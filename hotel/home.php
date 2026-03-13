<?php
// index.php - Main file for the home page

// Include the header
include 'includes/header.php';
?>
 <style>
      /* Reset & Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    background-color: #fdfdfd;
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
    background-color: #0d1b2a;
    padding: 20px 0;
    color: white;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
}

.logo {
    font-size: 1.8rem;
    font-weight: bold;
    color: #f4d35e;
}

.logo span {
    color: #ee6c4d;
}

nav ul {
    display: flex;
    gap: 20px;
}

nav a {
    color: white;
    font-weight: 500;
    transition: color 0.3s ease;
}

nav a:hover,
nav a.active {
    color: #f4d35e;
}

/* Hero Section */
.hero {
    background: url('/api/placeholder/1200/500?text=Luxury+Hotel+Banner') center/cover no-repeat;
    padding: 100px 20px;
    text-align: center;
    color: white;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 15px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 25px;
}

.btn {
    padding: 12px 24px;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color: #ee6c4d;
    color: white;
}

.btn-primary:hover {
    background-color: #d65a3b;
}

.btn-secondary {
    background-color: #0d1b2a;
    color: white;
}

.btn-secondary:hover {
    background-color: #1b2e47;
}

/* Container */
.container {
    max-width: 1200px;
    margin: auto;
    padding: 40px 20px;
}

/* Features Section */
.features {
    text-align: center;
    margin-bottom: 60px;
}

.section-title {
    font-size: 2rem;
    margin-bottom: 30px;
    color: #0d1b2a;
}

.features-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.feature-card {
    background: #ffffff;
    border: 1px solid #ddd;
    padding: 20px;
    flex: 1 1 calc(25% - 20px);
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    text-align: center;
}

.feature-icon {
    font-size: 2rem;
    margin-bottom: 10px;
}

/* Room Showcase */
.room-showcase {
    margin-bottom: 60px;
}

.room-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

.room-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.room-image img {
    width: 100%;
    height: auto;
}

.room-content {
    padding: 20px;
}

.room-features {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
    font-size: 0.9rem;
    color: #555;
}

.room-price {
    font-weight: bold;
    margin-bottom: 15px;
}

/* Testimonials */
.testimonials {
    background-color: #f4f4f4;
    padding: 60px 20px;
    border-radius: 8px;
    margin-bottom: 60px;
}

.testimonial-container {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    max-width: 900px;
    margin: auto;
}

.testimonial {
    background: #fff;
    padding: 20px;
    border-left: 5px solid #ee6c4d;
    border-radius: 6px;
}

.testimonial-text {
    font-style: italic;
}

.testimonial-author {
    margin-top: 10px;
    font-weight: bold;
    text-align: right;
}

/* CTA */
.cta {
    background-color: #ee6c4d;
    color: white;
    padding: 60px 20px;
    text-align: center;
    border-radius: 8px;
}

.cta h2 {
    font-size: 2rem;
    margin-bottom: 15px;
}

/* Footer */
footer {
    background-color: #0d1b2a;
    color: white;
    padding-top: 40px;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
    padding: 0 20px 30px;
    gap: 20px;
}

.footer-section {
    flex: 1 1 250px;
}

.footer-section h3 {
    margin-bottom: 15px;
    color: #f4d35e;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-bottom {
    background-color: #08111b;
    text-align: center;
    padding: 15px;
    font-size: 0.9rem;
    color: #bbb;
}

/* Responsive */
@media (max-width: 768px) {
    .header-container,
    .features-container,
    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .feature-card,
    .footer-section {
        width: 100%;
        text-align: center;
    }

    .room-features {
        flex-direction: column;
        gap: 5px;
    }
}


    </style>
  <script src="hotel.js"></script>
<div class="container">
    <div class="hero">
        <h1>Welcome to Luxury Hotel</h1>
        <p>Experience unparalleled luxury and comfort in our premium rooms and suites.</p>
        <a href="book.php" class="btn btn-primary">Book Your Stay</a>
    </div>

    <section class="features">
        <h2 class="section-title">Why Choose Us</h2>
        <div class="features-container">
            <div class="feature-card">
                <div class="feature-icon">🌟</div>
                <h3>Premium Rooms</h3>
                <p>Elegantly designed rooms with modern amenities and breathtaking views.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🍽️</div>
                <h3>Fine Dining</h3>
                <p>World-class restaurants offering gourmet cuisine from renowned chefs.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🧖</div>
                <h3>Spa & Wellness</h3>
                <p>Rejuvenating spa treatments and state-of-the-art fitness facilities.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏊</div>
                <h3>Infinity Pool</h3>
                <p>Relax in our stunning infinity pool with panoramic ocean views.</p>
            </div>
        </div>
    </section>

    <section class="room-showcase">
        <h2 class="section-title">Our Rooms</h2>
        <div class="room-cards">
            <?php 
            // Array of room data
            $rooms = [
                [
                    'title' => 'Standard Room',
                    'description' => 'Perfect for solo travelers or couples, our standard rooms offer comfort and elegance.',
                    'size' => '28 m²',
                    'bed' => 'Queen Bed',
                    'view' => 'Ocean View',
                    'price' => '$99',
                    'image' => '/api/placeholder/400/250?text=Standard+Room'
                ],
                [
                    'title' => 'Deluxe Room',
                    'description' => 'Extra space and premium amenities for those seeking additional comfort.',
                    'size' => '35 m²',
                    'bed' => 'King Bed',
                    'view' => 'Ocean View',
                    'price' => '$149',
                    'image' => '/api/placeholder/400/250?text=Deluxe+Room'
                ],
                [
                    'title' => 'Suite',
                    'description' => 'Ultimate luxury experience with separate living area and premium services.',
                    'size' => '55 m²',
                    'bed' => 'King Bed + Sofa',
                    'view' => 'Ocean View',
                    'price' => '$249',
                    'image' => '/api/placeholder/400/250?text=Suite+Room'
                ]
            ];
            
            // Loop through rooms and display them
            foreach($rooms as $room): 
            ?>
            <div class="room-card">
                <div class="room-image">
                    <img src="<?php echo htmlspecialchars($room['image']); ?>" alt="<?php echo htmlspecialchars($room['title']); ?>">
                </div>
                <div class="room-content">
                    <h3><?php echo htmlspecialchars($room['title']); ?></h3>
                    <p><?php echo htmlspecialchars($room['description']); ?></p>
                    <div class="room-features">
                        <span><?php echo htmlspecialchars($room['size']); ?></span>
                        <span><?php echo htmlspecialchars($room['bed']); ?></span>
                        <span><?php echo htmlspecialchars($room['view']); ?></span>
                    </div>
                    <div class="room-price">From <?php echo htmlspecialchars($room['price']); ?> per night</div>
                    <a href="book.php" class="btn btn-secondary">Book Now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="testimonials">
        <h2 class="section-title">Guest Experiences</h2>
        <div class="testimonial-container">
            <?php
            // Array with testimonial data
            $testimonials = [
                [
                    'text' => 'The most incredible hotel experience of my life. The ocean view from our suite was breathtaking, and the staff went above and beyond to make our stay perfect.',
                    'author' => 'Sarah J., New York'
                ],
                [
                    'text' => 'Impeccable service, stunning rooms, and the best hotel restaurant I\'ve ever experienced. Will definitely be returning for our anniversary.',
                    'author' => 'Michael T., London'
                ],
                [
                    'text' => 'From check-in to check-out, everything was flawless. The spa treatments were especially memorable. Luxury Hotel sets the standard for premium hospitality.',
                    'author' => 'Emma L., Sydney'
                ]
            ];
            
            // Display testimonials
            foreach($testimonials as $testimonial): 
            ?>
            <div class="testimonial">
                <div class="testimonial-text">
                    "<?php echo htmlspecialchars($testimonial['text']); ?>"
                </div>
                <div class="testimonial-author">- <?php echo htmlspecialchars($testimonial['author']); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <h2>Ready for an Unforgettable Stay?</h2>
            <p>Book your room now and experience the perfect blend of luxury, comfort, and exceptional service.</p>
            <a href="book.php" class="btn btn-primary">Book Your Stay</a>
        </div>
    </section>
</div>

<?php
// Include the footer
include 'includes/footer.php';
?>