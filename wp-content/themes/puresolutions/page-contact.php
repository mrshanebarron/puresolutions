<?php
/* Template Name: Contact */
get_header();

$contact_success = isset($_GET['contact']) && $_GET['contact'] === 'success';
?>

<!-- Page Hero -->
<section class="relative py-24 md:py-32 overflow-hidden">
    <img src="<?php echo ps_img('team-collab.jpg'); ?>" alt="Get in touch" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-dark/90 to-primary/80"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="gold-line mb-6"></span>
        <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h1>
        <p class="text-white/80 text-lg max-w-xl">Ready to start a conversation? We respond within one business day.</p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <!-- Contact Form -->
            <div class="lg:col-span-2 gsap-reveal">
                <h2 class="font-heading text-3xl font-bold text-dark mb-2">Schedule a Consultation</h2>
                <p class="text-text-light mb-8">Fill out the form below and a member of our team will be in touch within one business day to schedule your complimentary consultation.</p>

                <?php if ($contact_success) : ?>
                <div class="bg-secondary/10 border border-secondary/30 rounded-lg p-6 mb-8">
                    <div class="flex items-start space-x-3">
                        <svg class="w-6 h-6 text-secondary flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h3 class="font-bold text-dark mb-1">Thank you for reaching out!</h3>
                            <p class="text-text-light text-sm">Your message has been received. A member of our team will be in touch within one business day to schedule your consultation.</p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="contact-form">
                    <input type="hidden" name="action" value="puresolutions_contact">
                    <?php wp_nonce_field('puresolutions_contact_submit', 'puresolutions_contact_nonce'); ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="contact_name">Full Name *</label>
                            <input type="text" id="contact_name" name="contact_name" required placeholder="John Smith">
                        </div>
                        <div>
                            <label for="contact_email">Email Address *</label>
                            <input type="email" id="contact_email" name="contact_email" required placeholder="john@company.com">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="contact_phone">Phone Number</label>
                            <input type="tel" id="contact_phone" name="contact_phone" placeholder="(555) 123-4567">
                        </div>
                        <div>
                            <label for="contact_company">Company / Organization *</label>
                            <input type="text" id="contact_company" name="contact_company" required placeholder="Community Name">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="contact_size">Community Size</label>
                        <select id="contact_size" name="contact_size">
                            <option value="">Select community size...</option>
                            <option value="1-50">Single community (1-50 beds)</option>
                            <option value="51-100">Single community (51-100 beds)</option>
                            <option value="101-200">Single community (101-200 beds)</option>
                            <option value="multi-small">Multi-site (2-5 communities)</option>
                            <option value="multi-medium">Multi-site (6-20 communities)</option>
                            <option value="multi-large">Large portfolio (20+ communities)</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="contact_message">How Can We Help? *</label>
                        <textarea id="contact_message" name="contact_message" rows="5" required placeholder="Tell us about your community and the challenges you are facing..."></textarea>
                    </div>
                    <button type="submit" class="btn-gold">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info Sidebar -->
            <div class="lg:col-span-1">
                <div class="gsap-reveal">
                    <div class="bg-light rounded-xl p-8 mb-8">
                        <h3 class="font-heading text-xl font-bold text-dark mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-dark text-sm mb-1">Office</h4>
                                    <p class="text-text-light text-sm leading-relaxed">4200 Westheimer Road<br>Suite 320<br>Houston, TX 77027</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-dark text-sm mb-1">Phone</h4>
                                    <a href="tel:+18005551234" class="text-primary hover:text-accent no-underline text-sm font-medium">(800) 555-1234</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-dark text-sm mb-1">Email</h4>
                                    <a href="mailto:info@puresolutions.com" class="text-primary hover:text-accent no-underline text-sm font-medium">info@puresolutions.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-primary rounded-xl p-8 text-white">
                        <h3 class="font-heading text-xl font-bold mb-4">What to Expect</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <span class="text-xs font-bold">1</span>
                                </div>
                                <p class="text-white/90 text-sm">We respond within one business day to schedule your call.</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <span class="text-xs font-bold">2</span>
                                </div>
                                <p class="text-white/90 text-sm">A 30-minute complimentary consultation to understand your needs.</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <span class="text-xs font-bold">3</span>
                                </div>
                                <p class="text-white/90 text-sm">A tailored proposal within 5 business days — no obligation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
