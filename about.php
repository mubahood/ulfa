<?php 
$currentPage = 'about';
$pageTitle = 'About Us';
$pageDescription = 'Learn about ULFA United Love for All Orphanage Centre, our mission, vision, and the impact we make in Kasese District, Uganda.';
include 'config.php';
include 'functions.php';
include 'includes/header.php';

// Fetch team members
$stmt = $pdo->query("SELECT * FROM team_members WHERE status = 'active' ORDER BY display_order ASC, id ASC");
$teamMembers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>About ULFA</h1>
            <p>Discover our story, mission, and the lives we're transforming</p>
        </div>
    </div>

    <!-- Mission & Vision -->
    <section id="mission">
        <div class="container">
            <div class="section-title">
                <span class="badge-section">WHO WE ARE</span>
                <h2>Our Mission & Vision</h2>
                <p class="subtitle">Guided by love, driven by purpose</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="mission-card">
                        <div class="mission-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>Our Mission</h3>
                        <p>To provide holistic care, quality education, and sustainable livelihood opportunities to orphaned and vulnerable children in Kasese District, empowering them to become self-reliant and productive members of society. We strive to create an environment where every child feels loved, valued, and supported in reaching their full potential.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-card">
                        <div class="mission-icon"><i class="fas fa-eye"></i></div>
                        <h3>Our Vision</h3>
                        <p>A community where every orphaned and vulnerable child has access to love, quality education, comprehensive healthcare, and opportunities to reach their full potential and contribute meaningfully to society. We envision a future where no child is left behind and every child has the chance to succeed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Our Story</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray-text);">ULFA (United Love for All) was founded in Mpondwe Lhubiriha, Kasese District, Uganda, with a simple yet powerful vision: to provide a loving home and brighter future for orphaned and vulnerable children in our community.</p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray-text);">What started as a small initiative has grown into a comprehensive organization serving over 500 children through various programs including education support, child welfare, orphanage development, agriculture projects, and community engagement.</p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray-text);">Today, ULFA stands as a beacon of hope in Kasese District, transforming lives through compassion, dedication, and sustainable community development.</p>
                </div>
                <div class="col-lg-6">
                    <div style="background: var(--light-yellow); padding: 3rem; border: 3px solid var(--primary-black);">
                        <h3 class="mb-4">Core Values</h3>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 1.5rem; padding-left: 2rem; position: relative;">
                                <i class="fas fa-heart" style="position: absolute; left: 0; top: 0; color: var(--primary-yellow); font-size: 1.3rem;"></i>
                                <strong>Compassion:</strong> We treat every child with love and dignity
                            </li>
                            <li style="margin-bottom: 1.5rem; padding-left: 2rem; position: relative;">
                                <i class="fas fa-star" style="position: absolute; left: 0; top: 0; color: var(--primary-yellow); font-size: 1.3rem;"></i>
                                <strong>Excellence:</strong> We strive for quality in everything we do
                            </li>
                            <li style="margin-bottom: 1.5rem; padding-left: 2rem; position: relative;">
                                <i class="fas fa-hands-helping" style="position: absolute; left: 0; top: 0; color: var(--primary-yellow); font-size: 1.3rem;"></i>
                                <strong>Community:</strong> We build strong, supportive relationships
                            </li>
                            <li style="margin-bottom: 1.5rem; padding-left: 2rem; position: relative;">
                                <i class="fas fa-seedling" style="position: absolute; left: 0; top: 0; color: var(--primary-yellow); font-size: 1.3rem;"></i>
                                <strong>Sustainability:</strong> We create lasting, positive change
                            </li>
                            <li style="padding-left: 2rem; position: relative;">
                                <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0; color: var(--primary-yellow); font-size: 1.3rem;"></i>
                                <strong>Integrity:</strong> We operate with transparency and honesty
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact -->
    <section id="impact">
        <div class="container">
            <div class="section-title">
                <span class="badge-section">OUR IMPACT</span>
                <h2>Transforming Lives Daily</h2>
                <p class="subtitle">Real numbers, real impact, real change</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="impact-card">
                        <div class="impact-icon"><i class="fas fa-child"></i></div>
                        <div class="impact-number">500+</div>
                        <div class="impact-label">Children Supported</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impact-card">
                        <div class="impact-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="impact-number">350+</div>
                        <div class="impact-label">Students in School</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impact-card">
                        <div class="impact-icon"><i class="fas fa-utensils"></i></div>
                        <div class="impact-number">1000+</div>
                        <div class="impact-label">Daily Meals Served</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impact-card">
                        <div class="impact-icon"><i class="fas fa-hands-helping"></i></div>
                        <div class="impact-number">50+</div>
                        <div class="impact-label">Active Volunteers</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section id="team">
        <div class="container">
            <div class="section-title">
                <span class="badge-section">MEET OUR TEAM</span>
                <h2>The People Behind ULFA</h2>
                <p class="subtitle">Dedicated individuals committed to changing lives</p>
            </div>
            <?php if (empty($teamMembers)): ?>
                <div class="text-center" style="padding: 3rem 0;">
                    <p style="color: #666;">Our team information will be available soon.</p>
                </div>
            <?php else: ?>
                <div class="row g-4">
                    <?php foreach ($teamMembers as $member): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member-card" style="border: 2px solid var(--primary-black); border-radius: 0; overflow: hidden; background: #fff; transition: transform 0.3s;">
                            <?php if ($member['photo']): ?>
                            <div style="height: 280px; overflow: hidden; position: relative;">
                                <img src="<?php echo htmlspecialchars($member['photo']); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <?php else: ?>
                            <div style="height: 280px; background: #f8f9fa; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-user" style="font-size: 4rem; color: #ddd;"></i>
                            </div>
                            <?php endif; ?>
                            <div style="padding: 2rem; text-align: center;">
                                <h4 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--primary-black);">
                                    <?php echo htmlspecialchars($member['name']); ?>
                                </h4>
                                <p style="color: var(--primary-yellow); font-weight: 600; font-size: 1rem; margin-bottom: 0.25rem;">
                                    <?php echo htmlspecialchars($member['position']); ?>
                                </p>
                                <?php if ($member['department']): ?>
                                <p style="color: #999; font-size: 0.9rem; margin-bottom: 1rem;">
                                    <?php echo htmlspecialchars($member['department']); ?>
                                </p>
                                <?php endif; ?>
                                <?php if ($member['bio']): ?>
                                <p style="color: #666; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                                    <?php echo htmlspecialchars(strlen($member['bio']) > 150 ? substr($member['bio'], 0, 150) . '...' : $member['bio']); ?>
                                </p>
                                <?php endif; ?>
                                <?php if ($member['email'] || $member['phone'] || $member['linkedin'] || $member['twitter']): ?>
                                <div style="display: flex; justify-content: center; gap: 0.75rem; margin-top: 1rem; padding-top: 1rem; border-top: 2px solid #e9ecef;">
                                    <?php if ($member['email']): ?>
                                    <a href="mailto:<?php echo htmlspecialchars($member['email']); ?>" style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border: 2px solid var(--primary-black); background: transparent; color: var(--primary-black); text-decoration: none; transition: all 0.3s;">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                    <?php endif; ?>
                                    <?php if ($member['phone']): ?>
                                    <a href="tel:<?php echo htmlspecialchars($member['phone']); ?>" style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border: 2px solid var(--primary-black); background: transparent; color: var(--primary-black); text-decoration: none; transition: all 0.3s;">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                    <?php endif; ?>
                                    <?php if ($member['linkedin']): ?>
                                    <a href="<?php echo htmlspecialchars($member['linkedin']); ?>" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border: 2px solid var(--primary-black); background: transparent; color: var(--primary-black); text-decoration: none; transition: all 0.3s;">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <?php endif; ?>
                                    <?php if ($member['twitter']): ?>
                                    <a href="<?php echo htmlspecialchars($member['twitter']); ?>" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border: 2px solid var(--primary-black); background: transparent; color: var(--primary-black); text-decoration: none; transition: all 0.3s;">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <style>
    .team-member-card:hover {
        transform: translateY(-5px);
    }
    .team-member-card a:hover {
        background: var(--primary-yellow);
        border-color: var(--primary-yellow);
    }
    </style>

    <!-- CTA -->
    <section id="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Partner With Us</h2>
                <p class="lead" style="font-size: 1.2rem; margin-bottom: 2rem;">Join us in our mission to transform lives. Your support matters.</p>
                <div class="hero-buttons" style="justify-content: center;">
                    <a href="get-involved.php#donate" class="btn btn-hero btn-hero-primary"><span><i class="fas fa-heart me-2"></i>Donate Now</span></a>
                    <a href="contact.php" class="btn btn-hero btn-hero-outline" style="border-color: var(--primary-black); color: var(--primary-black);"><span>Contact Us</span></a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
