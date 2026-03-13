<?php
// contact.php - Contact page

// Include the header
include 'includes/header.php';
?>
  <style>
  /* ===== Contact Page Styles ===== */
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
/* Hero Section */
.hero {
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('/api/placeholder/1200x400?text=Luxury+Hotel') no-repeat center/cover;
    color: white;
    padding: 100px 20px;
    text-align: center;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}

.hero p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto;
}


/* Container */
.container {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 2rem;
}

.contact-section {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
    padding: 3rem 1rem;
    background-color: #f9f9f9;
}

.contact-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    max-width: 1200px;
    width: 100%;
    background-color: #fff;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
}

.contact-info, .contact-form {
    flex: 1;
    min-width: 300px;
}

.contact-info h2,
.contact-form h2 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
    color: #222;
}

.contact-info p {
    margin-bottom: 1.5rem;
    color: #555;
}

.contact-info ul {
    list-style: none;
    padding: 0;
}

.contact-info ul li {
    margin-bottom: 0.8rem;
    font-size: 1rem;
    color: #444;
}

.contact-form form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.contact-form input,
.contact-form textarea {
    padding: 0.9rem 1rem;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 1rem;
    transition: border 0.3s;
}

.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: #c59d5f;
    box-shadow: 0 0 5px rgba(197, 157, 95, 0.3);
}

.contact-form .btn {
    background-color: #c59d5f;
    color: white;
    padding: 0.9rem;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form .btn:hover {
    background-color: #a57d3b;
}

/* ===== Map Section ===== */
.map-section {
    padding: 3rem 1rem;
    background-color: #fff;
    text-align: center;
}

.map-section .section-title {
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    color: #222;
}

.map-container {
    width: 100%;
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
}

.map-container img {
    width: 100%;
    display: block;
    height: auto;
}
footer {
    background: #1a1a1a;
    color: #ccc;
    padding: 2rem 1rem 1rem;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 2rem;
    max-width: 1200px;
    margin: auto;
}

.footer-section h3 {
    margin-bottom: 1rem;
    color: #fff;
}

.footer-section ul li {
    margin-bottom: 0.5rem;
}

.footer-bottom {
    text-align: center;
    margin-top: 2rem;
    border-top: 1px solid #333;
    padding-top: 1rem;
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-content {
        flex-direction: column;
        text-align: center;
    }

    .hero h1 {
        font-size: 2.2rem;
    }

    .cta h2 {
        font-size: 1.7rem;
    }

    nav ul {
        flex-direction: column;
        align-items: center;
    }
}




    </style>
        <script src="hotel.js"></script>

<div class="container">
    <div class="hero" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/api/placeholder/1200x400?text=Contact+Us') no-repeat center/cover;">
        <h1>Contact Us</h1>
        <p>Have questions or want to get in touch? We'd love to hear from you.</p>
    </div>

    <section class="contact-section">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p>Reach out to us for bookings, inquiries, or feedback. We're here to help you 24/7.</p>
                <ul>
                    <?php
                    $contactInfo = [
                        'Address' => '123 Beach Road, Paradise City',
                        'Phone' => '(555) 123-4567',
                        'Email' => 'info@luxuryhotel.com'
                    ];
                    
                    foreach($contactInfo as $type => $detail):
                    ?>
                    <li><strong><?php echo htmlspecialchars($type); ?>:</strong> <?php echo htmlspecialchars($detail); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="contact-form">
                <h2>Send a Message</h2>
                <?php
                // Check if form is submitted
                if(isset($_GET['status']) && $_GET['status'] == 'success'): 
                ?>
                <div class="success-message" style="background: #e0f7e9; color: #2e7d32; padding: 15px; border-radius: 5px; margin-bottom: 15px;">
                    Thank you for contacting us! We will get back to you shortly.
                </div>
                <?php endif; ?>
                
                <form method="post" action="process_contact.php">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <section class="map-section">
        <h2 class="section-title">Find Us Here</h2>
        <div class="map-container">
            <img src="/api/placeholder/1200x400?text=Google+Map+Placeholder" alt="Map Location" />
        </div>
    </section>
</div>

<?php
// Include the footer
include 'includes/footer.php';
?>