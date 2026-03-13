<?php
// Include database connection
require_once 'config.php';

// Start session
session_start();

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to check if a room is available for given dates
function isRoomAvailable($room_id, $check_in, $check_out, $conn) {
    $sql = "SELECT r.reservation_id FROM Reservations r 
            JOIN ReservationRooms rr ON r.reservation_id = rr.reservation_id 
            WHERE rr.room_id = ? AND r.status IN ('confirmed', 'checked-in') 
            AND ((r.check_in_date BETWEEN ? AND ?) 
            OR (r.check_out_date BETWEEN ? AND ?) 
            OR (r.check_in_date <= ? AND r.check_out_date >= ?))";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssss", $room_id, $check_in, $check_out, $check_in, $check_out, $check_in, $check_out);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->num_rows === 0; // Return true if no conflicting bookings
}

// Process booking form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['book_room'])) {
    // Collect form data
    $first_name = sanitize_input($_POST['first_name']);
    $last_name = sanitize_input($_POST['last_name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $address = sanitize_input($_POST['address']);
    $room_type = sanitize_input($_POST['room_type']);
    $check_in = sanitize_input($_POST['check_in']);
    $check_out = sanitize_input($_POST['check_out']);
    $special_requests = sanitize_input($_POST['special_requests']);
    
    // Validation
    $errors = [];
    
    if (empty($first_name) || empty($last_name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($check_in) || empty($check_out)) {
        $errors[] = "Check-in and check-out dates are required";
    } elseif (strtotime($check_out) <= strtotime($check_in)) {
        $errors[] = "Check-out date must be after check-in date";
    }
    
    // If no validation errors, proceed with booking
    if (empty($errors)) {
        // Begin transaction
        $conn->begin_transaction();
        
        try {
            // Check if guest already exists
            $stmt = $conn->prepare("SELECT guest_id FROM Guests WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                // Guest exists, get ID
                $row = $result->fetch_assoc();
                $guest_id = $row['guest_id'];
                
                // Update guest information
                $stmt = $conn->prepare("UPDATE Guests SET first_name = ?, last_name = ?, phone = ?, address = ? WHERE guest_id = ?");
                $stmt->bind_param("ssssi", $first_name, $last_name, $phone, $address, $guest_id);
                $stmt->execute();
            } else {
                // Insert new guest
                $stmt = $conn->prepare("INSERT INTO Guests (first_name, last_name, email, phone, address) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $address);
                $stmt->execute();
                $guest_id = $conn->insert_id;
            }
            
            // Create reservation
            $stmt = $conn->prepare("INSERT INTO Reservations (guest_id, check_in_date, check_out_date, special_requests, booking_source) VALUES (?, ?, ?, ?, 'website')");
            $stmt->bind_param("isss", $guest_id, $check_in, $check_out, $special_requests);
            $stmt->execute();
            $reservation_id = $conn->insert_id;
            
            // Find available room of the selected type
            $stmt = $conn->prepare("SELECT room_id FROM Rooms WHERE type = ? AND status = 'available' LIMIT 1");
            $stmt->bind_param("s", $room_type);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $room_id = $row['room_id'];
                
                // Verify room is available for selected dates
                if (isRoomAvailable($room_id, $check_in, $check_out, $conn)) {
                    // Link room to reservation
                    $stmt = $conn->prepare("INSERT INTO ReservationRooms (reservation_id, room_id) VALUES (?, ?)");
                    $stmt->bind_param("ii", $reservation_id, $room_id);
                    $stmt->execute();
                    
                    // Get room rate for payment
                    $stmt = $conn->prepare("SELECT rate FROM Rooms WHERE room_id = ?");
                    $stmt->bind_param("i", $room_id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();
                    $rate = $row['rate'];
                    
                    // Calculate total (rate * number of days)
                    $days = floor((strtotime($check_out) - strtotime($check_in)) / (60 * 60 * 24));
                    $total_amount = $rate * $days;
                    
                    // Create payment record
                    $stmt = $conn->prepare("INSERT INTO Payments (reservation_id, amount, payment_method, status) VALUES (?, ?, 'pending', 'pending')");
                    $stmt->bind_param("id", $reservation_id, $total_amount);
                    $stmt->execute();
                    
                    // Commit transaction
                    $conn->commit();
                    
                    // Redirect to payment page
                    $_SESSION['reservation_id'] = $reservation_id;
                    $_SESSION['total_amount'] = $total_amount;
                    header("Location: payment.php");
                    exit();
                } else {
                    $errors[] = "The selected room is not available for the chosen dates. Please select different dates.";
                    $conn->rollback();
                }
            } else {
                $errors[] = "No rooms of the selected type are available. Please try another room type.";
                $conn->rollback();
            }
        } catch (Exception $e) {
            $conn->rollback();
            $errors[] = "An error occurred: " . $e->getMessage();
        }
    }
}
?>