<?php
// includes/header.php - Header component for all pages
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle . ' - ' : '' ?>Luxury Hotel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">Luxury<span>Hotel</span></div>
            <nav>
                <ul>
                    <?php
                    // Determine current page
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    
                    // Define navigation links
                    $navLinks = [
                        'index.php' => 'Home',
                        'book.php' => 'Book Now',
                        'about.php' => 'About',
                        'contact.php' => 'Contact'
                    ];
                    
                    // Generate navigation links
                    foreach($navLinks as $page => $label): 
                        $isActive = ($currentPage == $page) ? 'class="active"' : '';
                    ?>
                    <li><a href="<?php echo $page; ?>" <?php echo $isActive; ?>><?php echo $label; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>