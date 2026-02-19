<?php
/* Template Name: About */
get_header(); ?>

<!-- Page Hero -->
<section class="relative py-24 md:py-32 overflow-hidden">
    <img src="<?php echo ps_img('team-collab.jpg'); ?>" alt="Our consulting team" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-dark/90 to-primary/80"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="gold-line mb-6"></span>
        <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-4">About Pure Solutions</h1>
        <p class="text-white/80 text-lg max-w-xl">Two decades of focused expertise in helping senior living communities operate at their best.</p>
    </div>
</section>

<!-- Mission & Story -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="gsap-reveal">
                <span class="gold-line mb-6"></span>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-navy mb-6">Our Story</h2>
                <p class="text-text-light text-lg leading-relaxed mb-6">
                    Pure Solutions was founded in 2004 with a singular conviction: the senior living industry deserves consulting partners who understand the unique dynamics of caring for aging populations while running a sustainable business.
                </p>
                <p class="text-text-light leading-relaxed mb-6">
                    Our founders spent years working inside senior living organizations before launching Pure Solutions, witnessing firsthand how generic consulting firms failed to account for the regulatory landscape, the emotional weight of decisions, and the operational complexity of communities that operate 24 hours a day, 365 days a year.
                </p>
                <p class="text-text-light leading-relaxed">
                    Today, Pure Solutions partners with operators of every size — from a single assisted living community in a rural market to portfolios spanning dozens of states. What has not changed is our commitment to hands-on engagement, measurable outcomes, and solutions that last well beyond the consulting agreement.
                </p>
            </div>
            <div class="gsap-reveal relative">
                <img src="<?php echo ps_img('modern-office.jpg'); ?>" alt="Pure Solutions office" class="rounded-lg shadow-2xl w-full">
                <div class="absolute -bottom-6 -left-6 bg-white rounded-lg p-6 shadow-xl hidden md:block">
                    <span class="font-heading text-3xl font-bold text-primary block">2004</span>
                    <span class="text-text-light text-sm font-medium">Year Founded</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission -->
<section class="py-16 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center gsap-reveal">
            <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                <svg class="w-8 h-8 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
            </div>
            <h2 class="font-heading text-3xl font-bold text-navy mb-6">Our Mission</h2>
            <p class="text-text-light text-xl leading-relaxed italic">
                "To empower senior living communities with the strategic insight, operational excellence, and technological capability they need to deliver exceptional care while building financially sustainable organizations."
            </p>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 gsap-reveal">
            <span class="gold-line mx-auto mb-6"></span>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-navy mb-4">Our Values</h2>
            <p class="text-text-light text-lg max-w-2xl mx-auto">
                The principles that guide every engagement, every recommendation, and every relationship.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 gsap-stagger">
            <div class="text-center p-8 gsap-stagger-item">
                <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-navy mb-3">Integrity</h3>
                <p class="text-text-light text-sm leading-relaxed">
                    We tell our clients what they need to hear, not what they want to hear. Honest assessment is the foundation of effective consulting.
                </p>
            </div>
            <div class="text-center p-8 gsap-stagger-item">
                <div class="w-16 h-16 bg-secondary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-navy mb-3">Innovation</h3>
                <p class="text-text-light text-sm leading-relaxed">
                    The senior living industry is evolving rapidly. We bring forward-thinking strategies and emerging technologies that keep our clients ahead.
                </p>
            </div>
            <div class="text-center p-8 gsap-stagger-item">
                <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-navy mb-3">Partnership</h3>
                <p class="text-text-light text-sm leading-relaxed">
                    We do not deliver reports from a distance. We embed with your team, understand your culture, and build solutions collaboratively.
                </p>
            </div>
            <div class="text-center p-8 gsap-stagger-item">
                <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-navy mb-3">Results</h3>
                <p class="text-text-light text-sm leading-relaxed">
                    Every recommendation we make is grounded in data and tied to measurable outcomes. If it cannot be measured, we do not recommend it.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 gsap-reveal">
            <span class="gold-line mx-auto mb-6"></span>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-navy mb-4">Our Approach</h2>
            <p class="text-text-light text-lg max-w-2xl mx-auto">
                A proven methodology refined over two decades of senior living consulting.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 gsap-stagger">
            <div class="relative gsap-stagger-item">
                <div class="bg-white rounded-xl p-8 shadow-sm relative z-10">
                    <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-lg mb-6">1</div>
                    <h3 class="font-heading text-lg font-bold text-navy mb-3">Discover</h3>
                    <p class="text-text-light text-sm leading-relaxed">
                        Comprehensive assessment of your operations, financials, technology, and staff workflows. We listen before we recommend.
                    </p>
                </div>
            </div>
            <div class="relative gsap-stagger-item">
                <div class="bg-white rounded-xl p-8 shadow-sm relative z-10">
                    <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-lg mb-6">2</div>
                    <h3 class="font-heading text-lg font-bold text-navy mb-3">Design</h3>
                    <p class="text-text-light text-sm leading-relaxed">
                        Custom strategy development with clear milestones, ROI projections, and implementation timelines tailored to your organization.
                    </p>
                </div>
            </div>
            <div class="relative gsap-stagger-item">
                <div class="bg-white rounded-xl p-8 shadow-sm relative z-10">
                    <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-lg mb-6">3</div>
                    <h3 class="font-heading text-lg font-bold text-navy mb-3">Implement</h3>
                    <p class="text-text-light text-sm leading-relaxed">
                        Hands-on execution alongside your team. We do not hand off a plan and walk away. We are in the building making it work.
                    </p>
                </div>
            </div>
            <div class="relative gsap-stagger-item">
                <div class="bg-white rounded-xl p-8 shadow-sm relative z-10">
                    <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-lg mb-6">4</div>
                    <h3 class="font-heading text-lg font-bold text-navy mb-3">Sustain</h3>
                    <p class="text-text-light text-sm leading-relaxed">
                        Knowledge transfer, ongoing monitoring, and support that ensures improvements outlast the engagement period.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 gsap-reveal">
            <span class="gold-line mx-auto mb-6"></span>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-navy mb-4">Leadership Team</h2>
            <p class="text-text-light text-lg max-w-2xl mx-auto">
                Experienced professionals who have spent their careers in senior living operations and consulting.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 gsap-stagger">
            <!-- Team Member 1 -->
            <div class="team-card bg-light rounded-xl overflow-hidden shadow-sm gsap-stagger-item">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="<?php echo ps_img('business-meeting.jpg'); ?>" alt="James Whitfield" class="w-full h-full object-cover">
                </div>
                <div class="p-8">
                    <h3 class="font-heading text-xl font-bold text-navy mb-1">James Whitfield</h3>
                    <p class="text-accent font-semibold text-sm mb-4">Founder & Managing Partner</p>
                    <p class="text-text-light text-sm leading-relaxed">
                        With 25 years in senior living operations and consulting, James founded Pure Solutions after serving as COO for a 40-community portfolio. He brings deep expertise in procurement strategy and operational turnaround.
                    </p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card bg-light rounded-xl overflow-hidden shadow-sm gsap-stagger-item">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="<?php echo ps_img('healthcare-tech.jpg'); ?>" alt="Dr. Susan Park" class="w-full h-full object-cover">
                </div>
                <div class="p-8">
                    <h3 class="font-heading text-xl font-bold text-navy mb-1">Dr. Susan Park</h3>
                    <p class="text-accent font-semibold text-sm mb-4">Director of Technology Solutions</p>
                    <p class="text-text-light text-sm leading-relaxed">
                        A healthcare technology specialist with a PhD in Health Informatics, Susan leads our technology enablement practice. She has guided over 60 EHR implementations and smart building deployments across senior living communities.
                    </p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card bg-light rounded-xl overflow-hidden shadow-sm gsap-stagger-item">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="<?php echo ps_img('data-analytics.jpg'); ?>" alt="Michael Torres" class="w-full h-full object-cover">
                </div>
                <div class="p-8">
                    <h3 class="font-heading text-xl font-bold text-navy mb-1">Michael Torres</h3>
                    <p class="text-accent font-semibold text-sm mb-4">VP of Client Engagement</p>
                    <p class="text-text-light text-sm leading-relaxed">
                        Michael brings 18 years of senior living operations experience, including roles as Executive Director and Regional VP. He ensures every engagement stays aligned with client goals and delivers quantifiable outcomes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center gsap-reveal">
        <h2 class="font-heading text-3xl md:text-4xl font-bold text-white mb-4">
            Want to Learn More About Our Team?
        </h2>
        <p class="text-white/80 text-lg max-w-2xl mx-auto mb-8">
            Schedule a conversation with one of our partners to discuss your senior living community's unique needs.
        </p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold no-underline">Get in Touch</a>
    </div>
</section>

<?php get_footer(); ?>
