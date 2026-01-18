<?php 
$currentPage = 'contact';
$pageTitle = 'Contact Us';
$pageDescription = 'Get in touch with ULFA. We\'re here to answer your questions and help you get involved.';
include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you. Reach out to learn more or get involved.</p>
        </div>
    </div>

    <!-- Contact Section -->
    <section>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h5>Visit Us</h5>
                            <p>Mpondwe Lhubiriha<br>Kasese District<br>Uganda</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <h5>Call Us</h5>
                            <p>Main: +256 700 000 000<br>Mobile: +256 750 000 000</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h5>Email Us</h5>
                            <p>General: info@ulfa.org<br>Donations: donate@ulfa.org</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h5>Office Hours</h5>
                            <p>Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 2:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div style="background: var(--white); padding: 3rem; border: 3px solid var(--primary-black);">
                        <h2 class="mb-4">Send Us a Message</h2>
                        <div id="contactAlert"></div>
                        <form id="contactForm" class="contact-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" class="form-control" placeholder="Your Phone *" required>
                                </div>
                                <div class="col-md-6">
                                    <select name="subject" class="form-control" required>
                                        <option value="">Select Subject *</option>
                                        <option value="donation">Make a Donation</option>
                                        <option value="volunteer">Become a Volunteer</option>
                                        <option value="sponsor">Sponsor a Child</option>
                                        <option value="partnership">Partnership Inquiry</option>
                                        <option value="general">General Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" rows="6" placeholder="Your Message *" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" id="submitBtn" class="btn-submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="background: var(--gray-light);">
        <div class="container">
            <div class="section-title">
                <span class="badge-section">FIND US</span>
                <h2>Our Location</h2>
                <p class="subtitle">Visit us at our centre in Kasese District</p>
            </div>
            <div style="background: var(--white); padding: 3rem; border: 3px solid var(--primary-black); text-align: center;">
                <i class="fas fa-map-marked-alt" style="font-size: 5rem; color: var(--primary-yellow); margin-bottom: 2rem;"></i>
                <h3 class="mb-3">ULFA Orphanage Centre</h3>
                <p style="font-size: 1.1rem; color: var(--gray-text); max-width: 600px; margin: 0 auto;">
                    Located in Mpondwe Lhubiriha, Kasese District, Western Uganda. We're accessible by road from Kasese town (45 minutes drive) and Fort Portal (2 hours drive).
                </p>
                <div class="mt-4">
                    <a href="https://maps.google.com" target="_blank" class="btn btn-hero btn-hero-primary"><span><i class="fas fa-map-marker-alt me-2"></i>Get Directions</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section>
        <div class="container">
            <div class="section-title">
                <span class="badge-section">FAQ</span>
                <h2>Frequently Asked Questions</h2>
                <p class="subtitle">Quick answers to common questions</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="program-card">
                        <h4 style="color: var(--primary-yellow); margin-bottom: 1rem;"><i class="fas fa-question-circle me-2"></i>How can I donate?</h4>
                        <p>You can donate through our website contact form, bank transfer, or mobile money. Visit our <a href="get-involved.php#donate" style="color: var(--primary-yellow);">Get Involved</a> page for more details.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="program-card">
                        <h4 style="color: var(--primary-yellow); margin-bottom: 1rem;"><i class="fas fa-question-circle me-2"></i>Can I visit the orphanage?</h4>
                        <p>Yes! We welcome visitors. Please contact us in advance to schedule your visit and ensure we can provide you with a proper tour.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="program-card">
                        <h4 style="color: var(--primary-yellow); margin-bottom: 1rem;"><i class="fas fa-question-circle me-2"></i>How do I become a volunteer?</h4>
                        <p>Fill out our contact form selecting "Become a Volunteer" or email us directly. We'll guide you through our volunteer application and training process.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="program-card">
                        <h4 style="color: var(--primary-yellow); margin-bottom: 1rem;"><i class="fas fa-question-circle me-2"></i>Is child sponsorship available?</h4>
                        <p>Absolutely! Our child sponsorship program allows you to directly support a specific child's education, health, and wellbeing. <a href="get-involved.php#sponsor" style="color: var(--primary-yellow);">Learn more</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Make a Difference?</h2>
                <p class="lead" style="font-size: 1.2rem; margin-bottom: 2rem;">Your journey to transforming lives starts here</p>
                <div class="hero-buttons" style="justify-content: center;">
                    <a href="get-involved.php#donate" class="btn btn-hero btn-hero-primary"><span><i class="fas fa-heart me-2"></i>Donate Now</span></a>
                    <a href="get-involved.php#volunteer" class="btn btn-hero btn-hero-outline" style="border-color: var(--primary-black); color: var(--primary-black);"><span>Volunteer Today</span></a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
