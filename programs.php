<?php 
$currentPage = 'programs';
include 'config.php';
include 'functions.php';

// Get settings
$siteShortName = getSetting('site_short_name', 'ULFA');
$siteName = getSetting('site_name', 'United Love for All');
$siteDescription = getSetting('site_description', '');

$pageTitle = 'Our Programs';
$pageDescription = 'Explore ' . $siteShortName . ' comprehensive programs supporting orphaned children through education, welfare, development, agriculture, and community engagement.';
include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Our Programs</h1>
            <p>Comprehensive support for vulnerable children and communities</p>
        </div>
    </div>

    <!-- Programs -->
    <section>
        <div class="container">
            <div class="section-title">
                <span class="badge-section">WHAT WE DO</span>
                <h2>Transforming Lives Through Action</h2>
                <p class="subtitle">Six key programs addressing the holistic needs of our children</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon"><i class="fas fa-graduation-cap"></i></div>
                        <h3>Education Support</h3>
                        <p>Providing access to quality education, school supplies, uniforms, and academic mentorship. We ensure every child under our care attends school and receives the support needed to excel academically.</p>
                        <ul style="margin-top: 1.5rem; padding-left: 1.5rem;">
                            <li>School fees and supplies</li>
                            <li>Academic tutoring</li>
                            <li>Career guidance</li>
                            <li>Scholarship programs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon"><i class="fas fa-child"></i></div>
                        <h3>Child Welfare</h3>
                        <p>Comprehensive care programs ensuring the physical, emotional, and social wellbeing of every child. We provide healthcare, nutrition, counseling, and recreational activities.</p>
                        <ul style="margin-top: 1.5rem; padding-left: 1.5rem;">
                            <li>Healthcare & nutrition</li>
                            <li>Psychological support</li>
                            <li>Sports & recreation</li>
                            <li>Life skills training</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon"><i class="fas fa-home"></i></div>
                        <h3>Orphanage Development</h3>
                        <p>Building and maintaining safe, nurturing facilities that provide a loving home environment. We create spaces where children feel secure and cared for.</p>
                        <ul style="margin-top: 1.5rem; padding-left: 1.5rem;">
                            <li>Safe housing facilities</li>
                            <li>Clean water & sanitation</li>
                            <li>Infrastructure development</li>
                            <li>Home environment care</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon"><i class="fas fa-seedling"></i></div>
                        <h3>Agriculture Projects</h3>
                        <p>Teaching sustainable farming practices and creating income-generating activities. Our agriculture program provides food security and vocational training for older children.</p>
                        <ul style="margin-top: 1.5rem; padding-left: 1.5rem;">
                            <li>Organic farming training</li>
                            <li>Food production</li>
                            <li>Income generation</li>
                            <li>Environmental conservation</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon"><i class="fas fa-users"></i></div>
                        <h3>Community Engagement</h3>
                        <p>Building partnerships and raising awareness within the community. We work with local leaders, families, and organizations to create a supportive environment for all children.</p>
                        <ul style="margin-top: 1.5rem; padding-left: 1.5rem;">
                            <li>Community outreach</li>
                            <li>Awareness programs</li>
                            <li>Partnership building</li>
                            <li>Family reunification support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon"><i class="fas fa-heartbeat"></i></div>
                        <h3>Healthcare Services</h3>
                        <p>Ensuring access to quality healthcare through regular check-ups, vaccinations, and medical treatment. We prioritize the health and wellbeing of every child.</p>
                        <ul style="margin-top: 1.5rem; padding-left: 1.5rem;">
                            <li>Regular health screenings</li>
                            <li>Vaccinations & preventive care</li>
                            <li>Medical treatment</li>
                            <li>Health education</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Support Our Programs</h2>
                <p class="lead" style="font-size: 1.2rem; margin-bottom: 2rem;">Your contribution directly impacts the lives of children in our care.</p>
                <div class="hero-buttons" style="justify-content: center;">
                    <a href="get-involved.php#donate" class="btn btn-hero btn-hero-primary"><span><i class="fas fa-heart me-2"></i>Donate Now</span></a>
                    <a href="get-involved.php#volunteer" class="btn btn-hero btn-hero-outline" style="border-color: var(--primary-black); color: var(--primary-black);"><span>Volunteer</span></a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
