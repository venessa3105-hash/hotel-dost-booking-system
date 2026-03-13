<?php
// about.php - About page

// Include the header
include 'includes/header.php';
?>
   <style>
 /* Global Styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}

img {
    width: 100%;
    height: auto;
    border-radius: 10px;
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
    background-color: #222;
    color: #fff;
    padding: 1rem 0;
}

.header-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 1rem;
}

.logo {
    font-size: 1.8rem;
    font-weight: bold;
    color: #fff;
}

.logo span {
    color: #c9a46a;
}

nav ul {
    display: flex;
    gap: 1.5rem;
}

nav a {
    color: #fff;
    font-weight: 500;
    position: relative;
    padding: 5px 0;
}

nav a::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    left: 0;
    bottom: 0;
    background: #c9a46a;
    transition: width 0.3s ease;
}

nav a:hover::after,
nav a.active::after {
    width: 100%;
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

/* About Sections */
.container {
    max-width: 1200px;
    margin: auto;
    padding: 2rem 1rem;
}

.about-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin-bottom: 3rem;
    gap: 2rem;
}

.about-content {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 2rem;
    align-items: center;
    justify-content: center;
}

.about-text {
    flex: 1;
    min-width: 280px;
}

.about-image {
    flex: 1;
    min-width: 280px;
}

.about-section.reverse .about-content {
    flex-direction: row-reverse;
}

/* Section Titles */
.section-title {
    text-align: center;
    font-size: 2rem;
    color: #c9a46a;
    margin-bottom: 1.5rem;
}

/* Sustainability Section */
.sustainability {
    background: #fffbe7;
    padding: 2rem 1rem;
    border-radius: 10px;
    margin-bottom: 3rem;
}

.sustainability-list {
    margin: 1rem 0;
    padding-left: 1.5rem;
    list-style: disc;
}

/* Team Section */
.team-container {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
    margin-top: 1rem;
}

.team-member {
    background: #fff;
    padding: 1rem;
    border-radius: 10px;
    text-align: center;
    width: 250px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.team-member:hover {
    transform: translateY(-5px);
}

.member-image img {
    border-radius: 50%;
    margin-bottom: 1rem;
}

.member-title {
    color: #888;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

/* CTA Section */
.cta {
    background: #222;
    color: white;
    text-align: center;
    padding: 3rem 1rem;
    margin-top: 3rem;
    border-radius: 10px;
}

.cta h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.btn {
    display: inline-block;
    background: #c9a46a;
    color: #fff;
    padding: 0.75rem 1.5rem;
    margin-top: 1rem;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s ease;
}

.btn:hover {
    background: #b18b4d;
}

/* Footer */
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
    <div class="hero about-hero">
        <h1>About Luxury Hotel</h1>
        <p>Discover our story, philosophy, and what makes us the premier destination for luxury travelers.</p>
    </div>

    <section class="about-section">
        <div class="about-content">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>Founded in 2010, Luxury Hotel was born from a vision to create an unparalleled hospitality experience that combines elegant design, exceptional service, and sustainable practices. What began as a boutique hotel with just 50 rooms has grown into a world-renowned luxury destination.</p>
                <p>Our founding principle remains unchanged: to provide each guest with personalized service that anticipates needs before they arise, creating memorable experiences that last a lifetime.</p>
            </div>
            <div class="about-image">
                <img src="/api/placeholder/500/300?text=Our+Story" alt="Hotel Exterior">
            </div>
        </div>
    </section>

    <section class="about-section reverse" id="facilities">
        <div class="about-content">
            <div class="about-image">
                <img src="/api/placeholder/500/300?text=Facilities" alt="Hotel Facilities">
            </div>
            <div class="about-text">
                <h2>Our Facilities</h2>
                <p>Luxury Hotel offers a comprehensive range of world-class facilities designed to enhance your stay. From our temperature-controlled infinity pool overlooking the ocean to our fully-equipped fitness center with personal trainers available upon request.</p>
                <p>Our property spans 5 acres of meticulously landscaped gardens, providing peaceful retreats and stunning views from every angle. The hotel features 150 elegantly appointed rooms and suites, each designed with your comfort and convenience in mind.</p>
            </div>
        </div>
    </section>

    <?php
    // Array of about sections
    $sections = [
        'dining' => [
            'title' => 'Dining Experience',
            'content' => [
                'Experience culinary excellence at our three distinctive restaurants, each offering a unique gastronomic journey. Our signature restaurant, Azure, showcases farm-to-table cuisine with ingredients sourced from local producers and our own organic garden.',
                'Ocean Terrace offers casual alfresco dining with panoramic sea views, while The Cellar provides an intimate setting for fine wines and gourmet tapas. Our executive chef, with experience from Michelin-starred restaurants across Europe, ensures each dish is a masterpiece of flavor and presentation.'
            ],
            'image' => '/api/placeholder/500/300?text=Dining',
            'alt' => 'Restaurant'
        ],
        'spa' => [
            'title' => 'Spa & Wellness',
            'content' => [
                'Our award-winning Serenity Spa offers a sanctuary for mind, body, and spirit. Choose from a comprehensive menu of treatments that blend ancient healing techniques with modern wellness science.',
                'The spa features private treatment rooms, a hydrotherapy pool, aromatic steam rooms, and a meditation garden. Our therapists, trained in traditional and contemporary methods, provide personalized services to help you achieve balance and rejuvenation.'
            ],
            'image' => '/api/placeholder/500/300?text=Spa',
            'alt' => 'Spa Facilities',
        ],
        'events' => [
            'title' => 'Events & Celebrations',
            'content' => [
                'Whether you\'re planning a dream wedding, corporate retreat, or special celebration, our dedicated events team will ensure your occasion exceeds expectations. Our Grand Ballroom accommodates up to 300 guests, while smaller venues provide intimate settings for private gatherings.',
                'Each event space features state-of-the-art technology, flexible layouts, and our signature service. From custom menus to thematic decor, our events specialists attend to every detail, allowing you to focus on creating memories with your guests.'
            ],
            'image' => '/api/placeholder/500/300?text=Events',
            'alt' => 'Event Space',
        ]
    ];
    
    // Display dining, spa, and events sections
    foreach($sections as $id => $section):
        $class = ($id == 'spa') ? 'about-section reverse' : 'about-section';
    ?>
    <section class="<?php echo $class; ?>" id="<?php echo $id; ?>">
        <div class="about-content">
            <?php if($id == 'spa'): ?>
                <div class="about-image">
                    <img src="<?php echo htmlspecialchars($section['image']); ?>" alt="<?php echo htmlspecialchars($section['alt']); ?>">
                </div>
                <div class="about-text">
                    <h2><?php echo htmlspecialchars($section['title']); ?></h2>
                    <?php foreach($section['content'] as $paragraph): ?>
                        <p><?php echo htmlspecialchars($paragraph); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="about-text">
                    <h2><?php echo htmlspecialchars($section['title']); ?></h2>
                    <?php foreach($section['content'] as $paragraph): ?>
                        <p><?php echo htmlspecialchars($paragraph); ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="about-image">
                    <img src="<?php echo htmlspecialchars($section['image']); ?>" alt="<?php echo htmlspecialchars($section['alt']); ?>">
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endforeach; ?>

    <section class="sustainability">
        <h2 class="section-title">Our Commitment to Sustainability</h2>
        <div class="sustainability-content">
            <p>At Luxury Hotel, we believe luxury and environmental responsibility go hand in hand. Our sustainability initiatives include:</p>
            <ul class="sustainability-list">
                <?php
                $initiatives = [
                    'Energy-efficient building design and operations',
                    'Water conservation through rainwater harvesting and recycling systems',
                    'Waste reduction and comprehensive recycling program',
                    'Locally sourced, organic ingredients in our restaurants',
                    'Supporting local conservation efforts and community projects'
                ];
                
                foreach($initiatives as $initiative):
                ?>
                <li><?php echo htmlspecialchars($initiative); ?></li>
                <?php endforeach; ?>
            </ul>
            <p>We're proud to have received Green Globe certification for our ongoing commitment to sustainable tourism practices.</p>
        </div>
    </section>

    <section class="team-section">
        <h2 class="section-title">Our Leadership Team</h2>
        <div class="team-container">
            <?php
            $team = [
                [
                    'name' => 'Jonathan Williams',
                    'title' => 'General Manager',
                    'bio' => 'With over 25 years in luxury hospitality across three continents, Jonathan brings unparalleled expertise to every aspect of the guest experience.',
                    'image' => '/api/placeholder/200/200?text=GM'
                ],
                [
                    'name' => 'Maria Rodriguez',
                    'title' => 'Executive Chef',
                    'bio' => 'A culinary visionary with training from the world\'s finest institutions, Maria creates memorable dining experiences that celebrate local flavors.',
                    'image' => '/api/placeholder/200/200?text=Chef'
                ],
                [
                    'name' => 'Sophia Chen',
                    'title' => 'Spa Director',
                    'bio' => 'Certified in multiple wellness disciplines, Sophia designs transformative spa journeys that integrate ancient wisdom with modern techniques.',
                    'image' => '/api/placeholder/200/200?text=Director'
                ]
            ];
            
            foreach($team as $member):
            ?>
            <div class="team-member">
                <div class="member-image">
                    <img src="<?php echo htmlspecialchars($member['image']); ?>" alt="<?php echo htmlspecialchars($member['title']); ?>">
                </div>
                <h3><?php echo htmlspecialchars($member['name']); ?></h3>
                <p class="member-title"><?php echo htmlspecialchars($member['title']); ?></p>
                <p><?php echo htmlspecialchars($member['bio']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <h2>Experience Luxury Hotel</h2>
            <p>Book your stay today and discover why our guests return year after year.</p>
            <a href="book.php" class="btn btn-primary">Book Your Stay</a>
        </div>
    </section>
</div>

<?php
// Include the footer
include 'includes/footer.php';
?>