<?php 
$currentPage = 'stories';
include 'config.php';
include 'functions.php';

// Get settings
$siteShortName = getSetting('site_short_name', 'ULFA');
$siteName = getSetting('site_name', 'United Love for All');

$pageTitle = 'Stories & Testimonials';
$pageDescription = 'Read inspiring stories from children, families, and volunteers whose lives have been transformed by ' . $siteShortName . '.';
include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Stories & Testimonials</h1>
            <p>Real stories of hope, transformation, and community support</p>
        </div>
    </div>

    <!-- Founder's Story Highlight -->
    <section style="background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(255, 255, 255, 1) 100%);">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="badge-section" style="margin-bottom: 1rem; display: inline-block;">FOUNDER'S INSPIRATION</span>
                    <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1.5rem; color: var(--primary-black);">Why <?php echo htmlspecialchars($siteShortName); ?> Exists</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray-text); margin-bottom: 1rem;">"I was born and raised in a humble community in Kasese District. Growing up, I experienced firsthand the struggles that many children still face today — lack of school fees, long distances to school, hunger, and the constant fear of dropping out of education."</p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray-text); margin-bottom: 1rem;">"There were times when attending school meant completing household chores first, walking long distances barefoot, and sharing limited learning materials. Yet, despite these challenges, I learned an important lesson: <strong>when children are supported with love, dignity, and opportunity, their lives can change forever.</strong>"</p>
                    <p style="font-size: 1rem; color: var(--primary-black); font-weight: 600; margin-top: 1.5rem;">— Muadhi Abubakar, Founder & Executive Director</p>
                    <a href="about.php#founder" style="display: inline-block; margin-top: 1rem; background: var(--primary-yellow); color: var(--primary-black); padding: 0.75rem 1.5rem; font-weight: 600; text-decoration: none; border: 2px solid var(--primary-black);">Read Full Message</a>
                </div>
                <div class="col-lg-4 text-center">
                    <div style="border-left: 4px solid var(--primary-yellow); padding: 2rem; background: #fff;">
                        <div style="font-size: 3rem; color: var(--primary-yellow); margin-bottom: 1rem;"><i class="fas fa-quote-left"></i></div>
                        <p style="font-size: 1.1rem; font-style: italic; color: var(--gray-text); line-height: 1.7;">Every child we serve is not just a beneficiary — they are a future leader, a future parent, and a future contributor to society.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section>
        <div class="container">
            <div class="section-title">
                <span class="badge-section">TESTIMONIALS</span>
                <h2>Voices of Hope</h2>
                <p class="subtitle">Stories from children, families, and supporters whose lives have been touched</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testimonial-text">"<?php echo htmlspecialchars($siteShortName); ?> gave me hope when I had none. After losing my parents, I thought my education was over. Now I am in secondary school and dream of becoming a teacher to help other children like me."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">A</div>
                            <div>
                                <strong>Amina</strong><br>
                                <span style="color: var(--gray-text); font-size: 0.9rem;">Student, Age 14</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testimonial-text">"Volunteering at <?php echo htmlspecialchars($siteShortName); ?> has been life-changing. Seeing children who once had no hope now smiling, learning, and growing is the greatest reward anyone could ask for."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">J</div>
                            <div>
                                <strong>Joseph</strong><br>
                                <span style="color: var(--gray-text); font-size: 0.9rem;">Volunteer Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testimonial-text">"After losing my parents, I used to walk long distances to school barefoot, often hungry. <?php echo htmlspecialchars($siteShortName); ?> became my family. They gave me not just food and shelter, but love and hope for my future."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">D</div>
                            <div>
                                <strong>David</strong><br>
                                <span style="color: var(--gray-text); font-size: 0.9rem;"><?php echo htmlspecialchars($siteShortName); ?> Beneficiary</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testimonial-text">"Supporting <?php echo htmlspecialchars($siteShortName); ?> from abroad has connected me to children who truly need help. The monthly updates remind me that every small contribution makes a real difference in their lives."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">M</div>
                            <div>
                                <strong>Margaret</strong><br>
                                <span style="color: var(--gray-text); font-size: 0.9rem;">International Supporter</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testimonial-text">"The agricultural program taught me how to farm sustainably. Now I can help provide food for the centre and learn skills that will support me in the future. I am grateful for this opportunity."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">P</div>
                            <div>
                                <strong>Patrick</strong><br>
                                <span style="color: var(--gray-text); font-size: 0.9rem;">Agriculture Program Participant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testimonial-text">"Working with <?php echo htmlspecialchars($siteShortName); ?> has shown me the power of community. Together, we are giving hope to the most vulnerable children and building a stronger future for Kasese."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">R</div>
                            <div>
                                <strong>Rev. Robert</strong><br>
                                <span style="color: var(--gray-text); font-size: 0.9rem;">Community Leader</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section style="background: var(--gray-light);">
        <div class="container">
            <div class="section-title">
                <span class="badge-section">SUCCESS STORIES</span>
                <h2>Lives Transformed</h2>
                <p class="subtitle">Celebrating achievements and milestones</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="program-card">
                        <h3><i class="fas fa-graduation-cap" style="color: var(--primary-yellow); margin-right: 0.5rem;"></i>Education Success</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8;">Over 350 children are currently enrolled in primary and secondary schools, with 95% attendance rates. Our academic support program has helped dozens of students excel and pursue higher education.</p>
                        <ul style="margin-top: 1.5rem;">
                            <li>15 students graduated secondary school this year</li>
                            <li>5 students received university scholarships</li>
                            <li>98% pass rate on national exams</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="program-card">
                        <h3><i class="fas fa-heart" style="color: var(--primary-yellow); margin-right: 0.5rem;"></i>Health & Wellbeing</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8;">Through our healthcare program, we've ensured all children receive regular medical check-ups, vaccinations, and treatment when needed. Malnutrition rates have decreased by 85% since 2020.</p>
                        <ul style="margin-top: 1.5rem;">
                            <li>100% vaccination coverage for all children</li>
                            <li>Zero cases of preventable diseases</li>
                            <li>Significant improvement in overall health</li>
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
                <h2>Be Part of Their Story</h2>
                <p class="lead" style="font-size: 1.2rem; margin-bottom: 2rem;">Your support creates these success stories. Join us today.</p>
                <div class="hero-buttons" style="justify-content: center;">
                    <a href="get-involved.php#donate" class="btn btn-hero btn-hero-primary"><span><i class="fas fa-heart me-2"></i>Support Our Children</span></a>
                    <a href="contact.php" class="btn btn-hero btn-hero-outline" style="border-color: var(--primary-black); color: var(--primary-black);"><span>Share Your Story</span></a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
