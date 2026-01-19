<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ULFA' : 'ULFA - United Love for All Orphanage Centre'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'United Love for All (ULFA) provides love, care, education, and sustainable support to orphaned and vulnerable children in Kasese District, Uganda.'; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-hands-helping"></i>
                <span>
                    <span class="brand-main">ULFA</span>
                    <span class="brand-sub">United Love for All</span>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link <?php echo $currentPage == 'home' ? 'active' : ''; ?>" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo in_array($currentPage, ['about', 'stories', 'news']) ? 'active' : ''; ?>" href="#" role="button">About Us<span class="dropdown-icon"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.php"><i class="fas fa-bullseye"></i>Mission & Vision</a></li>
                            <li><a class="dropdown-item" href="about.php#impact"><i class="fas fa-chart-line"></i>Our Impact</a></li>
                            <li><a class="dropdown-item" href="about.php#team"><i class="fas fa-users"></i>Our Team</a></li>
                            <li><a class="dropdown-item" href="stories.php"><i class="fas fa-comments"></i>Stories</a></li>
                            <li><a class="dropdown-item" href="news.php"><i class="fas fa-newspaper"></i>News & Articles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $currentPage == 'programs' ? 'active' : ''; ?>" href="#" role="button">Our Programs<span class="dropdown-icon"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="programs.php"><i class="fas fa-graduation-cap"></i>Education Support</a></li>
                            <li><a class="dropdown-item" href="programs.php#child-welfare"><i class="fas fa-child"></i>Child Welfare</a></li>
                            <li><a class="dropdown-item" href="programs.php#orphanage"><i class="fas fa-home"></i>Orphanage Development</a></li>
                            <li><a class="dropdown-item" href="programs.php#agriculture"><i class="fas fa-seedling"></i>Agriculture Projects</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo in_array($currentPage, ['events', 'causes', 'gallery']) ? 'active' : ''; ?>" href="#" role="button">Our Work<span class="dropdown-icon"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="events.php"><i class="far fa-calendar"></i>Events & Activities</a></li>
                            <li><a class="dropdown-item" href="causes.php"><i class="fas fa-hand-holding-heart"></i>Active Causes</a></li>
                            <li><a class="dropdown-item" href="gallery.php"><i class="far fa-images"></i>Photo Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $currentPage == 'get-involved' ? 'active' : ''; ?>" href="#" role="button">Get Involved<span class="dropdown-icon"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="get-involved.php#donate"><i class="fas fa-donate"></i>Donate Now</a></li>
                            <li><a class="dropdown-item" href="get-involved.php#volunteer"><i class="fas fa-hand-holding-heart"></i>Volunteer</a></li>
                            <li><a class="dropdown-item" href="get-involved.php#partner"><i class="fas fa-handshake"></i>Partner With Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link <?php echo $currentPage == 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-donate" href="get-involved.php#donate"><i class="fas fa-heart me-2"></i>Donate Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
