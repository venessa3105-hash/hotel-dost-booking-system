<?php
// book.php - Booking page

// Include the header
include 'includes/header.php';
?>
<style>
    /* Reset & Base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f8f8f8;
    color: #333;
    line-height: 1.6;
}
a {
    text-decoration: none;
    color: inherit;
}
ul {
    list-style: none;
}

/* Header */
header {
    background: #1a1a1a;
    color: #fff;
    padding: 1rem 0;
}
.header-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
}
.logo {
    font-size: 1.8rem;
    font-weight: bold;
}
.logo span {
    color: #e0b973;
}
nav ul {
    display: flex;
    gap: 2rem;
}
nav a {
    color: #fff;
    transition: color 0.3s ease;
}
nav a:hover,
nav a.active {
    color: #e0b973;
}

/* Container */
.container {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 2rem;
}

/* Hero Section */
.hero {
    text-align: center;
    margin-bottom: 2rem;
}
.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}
.hero p {
    font-size: 1.1rem;
    color: #555;
}

/* Booking Container */
.booking-container {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
}

/* Booking Form */
.booking-form {
    flex: 1;
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}
.form-title {
    margin-bottom: 1rem;
    color: #444;
}
.form-group {
    margin-bottom: 1rem;
}
.form-row {
    display: flex;
    gap: 1rem;
}
.form-row .form-group {
    flex: 1;
}
label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
}
.form-control {
    width: 100%;
    padding: 0.6rem;
    border: 1px solid #ccc;
    border-radius: 5px;
}
textarea.form-control {
    resize: vertical;
}
select.form-control {
    background: #fff;
}
.room-types {
    display: flex;
    gap: 1rem;
}
.room-type-option {
    flex: 1;
    border: 2px solid #ccc;
    padding: 1rem;
    border-radius: 8px;
    text-align: center;
    cursor: pointer;
    transition: border 0.3s ease, box-shadow 0.3s ease;
}
.room-type-option:hover {
    border-color: #e0b973;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.room-type-option.selected {
    border-color: #e0b973;
    background-color: #fff9f0;
}
.room-type-option h4 {
    margin-bottom: 0.3rem;
}
.room-type-option .price {
    font-weight: bold;
    color: #444;
}

/* Room Preview */
.room-preview {
    flex: 1;
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}
.preview-image img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 1rem;
}
.room-detail {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.included-amenities {
    margin-top: 1rem;
}
.amenities-list {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-top: 0.5rem;
}
.amenity-tag {
    background: #e0b973;
    color: #fff;
    padding: 0.4rem 0.7rem;
    border-radius: 20px;
    font-size: 0.9rem;
}

/* Price Summary */
.price-summary {
    margin-top: 1.5rem;
    border-top: 1px solid #ccc;
    padding-top: 1rem;
}
.price-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
}
.price-row.total {
    font-weight: bold;
    font-size: 1.1rem;
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    background: #e0b973;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s ease;
}
.btn:hover {
    background: #d4a64e;
}

/* Footer */
footer {
    background: #1a1a1a;
    color: #eee;
    padding-top: 2rem;
}
.footer-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    gap: 2rem;
    padding: 0 2rem 2rem;
    flex-wrap: wrap;
}
.footer-section {
    flex: 1;
}
.footer-section h3 {
    margin-bottom: 1rem;
}
.footer-section ul li {
    margin-bottom: 0.5rem;
}
.footer-section ul li a {
    color: #eee;
    transition: color 0.3s;
}
.footer-section ul li a:hover {
    color: #e0b973;
}
.footer-bottom {
    text-align: center;
    padding: 1rem;
    background: #111;
    font-size: 0.9rem;
}


    </style>
        <script src="hotel.js"></script>

<div class="container">
    <div class="hero">
        <h1>Book Your Perfect Stay</h1>
        <p>Experience luxury and comfort in our premium rooms and suites. Choose from a variety of options tailored to your needs.</p>
    </div>

    <div class="booking-container">
        <div class="booking-form">
            <h2 class="form-title">Reservation Details</h2>
            <form id="bookingForm" method="post" action="process_booking.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="checkIn">Check-in Date</label>
                        <input type="date" id="checkIn" name="checkIn" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="checkOut">Check-out Date</label>
                        <input type="date" id="checkOut" name="checkOut" class="form-control" required min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="adults">Adults</label>
                        <select id="adults" name="adults" class="form-control">
                            <?php for($i=1; $i<=4; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php echo ($i==2) ? 'selected' : ''; ?>><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="children">Children</label>
                        <select id="children" name="children" class="form-control">
                            <?php for($i=0; $i<=3; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php echo ($i==0) ? 'selected' : ''; ?>><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Room Type</label>
                    <div class="room-types">
                        <?php
                        $roomTypes = [
                            'standard' => ['name' => 'Standard', 'desc' => 'Perfect for solo or couples', 'rate' => 99],
                            'deluxe' => ['name' => 'Deluxe', 'desc' => 'Extra space and comfort', 'rate' => 149],
                            'suite' => ['name' => 'Suite', 'desc' => 'Ultimate luxury experience', 'rate' => 249]
                        ];
                        
                        foreach($roomTypes as $id => $room): 
                        ?>
                        <div class="room-type-option <?php echo ($id == 'standard') ? 'selected' : ''; ?>" 
                             data-type="<?php echo htmlspecialchars($id); ?>" 
                             data-rate="<?php echo htmlspecialchars($room['rate']); ?>">
                            <h4><?php echo htmlspecialchars($room['name']); ?></h4>
                            <p><?php echo htmlspecialchars($room['desc']); ?></p>
                            <div class="price">$<?php echo htmlspecialchars($room['rate']); ?>/night</div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <input type="hidden" name="roomType" id="roomTypeInput" value="standard">
                </div>

                <div class="form-group">
                    <label for="viewType">View Preference</label>
                    <select id="viewType" name="viewType" class="form-control">
                        <?php
                        $viewTypes = [
                            'city' => 'City View',
                            'garden' => 'Garden View',
                            'pool' => 'Pool View',
                            'ocean' => 'Ocean View'
                        ];
                        
                        foreach($viewTypes as $value => $name): 
                        ?>
                        <option value="<?php echo htmlspecialchars($value); ?>" <?php echo ($value == 'ocean') ? 'selected' : ''; ?>><?php echo htmlspecialchars($name); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="specialRequests">Special Requests</label>
                    <textarea id="specialRequests" name="specialRequests" class="form-control" rows="3" placeholder="Any special requests or accommodations..."></textarea>
                </div>

                <h2 class="form-title">Guest Information</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control">
                </div>

                <div class="form-group">
                    <label for="idType">ID Type</label>
                    <select id="idType" name="idType" class="form-control">
                        <option value="passport">Passport</option>
                        <option value="drivers_license">Driver's License</option>
                        <option value="national_id">National ID</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
        </div>

        <div class="room-preview">
            <h2 class="form-title">Your Selection</h2>
            <div class="preview-image">
                <img src="/api/placeholder/500/300" alt="Room Preview" id="roomImage">
            </div>
            <div class="room-details">
                <h3 id="roomTitle">Standard Room - Ocean View</h3>
                <div class="room-detail">
                    <i>👥</i>
                    <span id="guestCount">2 Adults, 0 Children</span>
                </div>
                <div class="room-detail">
                    <i>📅</i>
                    <span id="stayDuration">5 Nights (Apr 20 - Apr 25, 2025)</span>
                </div>
                <div class="room-detail">
                    <i>🛏️</i>
                    <span id="bedType">1 King Bed</span>
                </div>
                <div class="room-detail">
                    <i>📏</i>
                    <span>28 m² / 301 ft²</span>
                </div>
                <div class="room-detail">
                    <i>🌄</i>
                    <span id="viewDescription">Ocean View</span>
                </div>

                <div class="included-amenities">
                    <h4>Included Amenities</h4>
                    <div class="amenities-list">
                        <div class="amenity-tag">Free WiFi</div>
                        <div class="amenity-tag">Breakfast</div>
                        <div class="amenity-tag">Air Conditioning</div>
                        <div class="amenity-tag">TV</div>
                        <div class="amenity-tag">Safe</div>
                        <div class="amenity-tag">Mini Bar</div>
                    </div>
                </div>

                <div class="price-summary">
                    <h4>Price Summary</h4>
                    <div class="price-row">
                        <span>Room Rate (per night)</span>
                        <span id="ratePerNight">$99.00</span>
                    </div>
                    <div class="price-row">
                        <span id="nightsCount">5 Nights</span>
                        <span id="subtotal">$495.00</span>
                    </div>
                    <div class="price-row">
                        <span>Taxes & Fees (12%)</span>
                        <span id="taxesAndFees">$59.40</span>
                    </div>
                    <div class="price-row total">
                        <span>Total</span>
                        <span id="totalPrice">$554.40</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer
include 'includes/footer.php';
?>