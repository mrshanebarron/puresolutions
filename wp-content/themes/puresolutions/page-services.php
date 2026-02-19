<?php
/* Template Name: Services */
get_header(); ?>

<!-- Page Hero -->
<section class="relative py-24 md:py-32 overflow-hidden">
    <img src="<?php echo ps_img('senior-interior.jpg'); ?>" alt="Senior living interior" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-dark/90 to-primary/80"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="gold-line mb-6"></span>
        <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-4">Our Services</h1>
        <p class="text-white/80 text-lg max-w-xl">Comprehensive consulting solutions designed specifically for the senior living industry.</p>
    </div>
</section>

<!-- Strategic Procurement -->
<section class="py-20 bg-white" id="procurement">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="gsap-reveal">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15a2.25 2.25 0 012.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-6">Strategic Procurement</h2>
                <p class="text-text-light text-lg leading-relaxed mb-6">
                    Procurement in senior living is not the same as general business purchasing. Medical supplies, food service contracts, maintenance equipment, and technology platforms all carry unique considerations around quality, regulatory compliance, and resident impact.
                </p>
                <p class="text-text-light leading-relaxed mb-8">
                    Our procurement consulting goes far beyond negotiating better prices. We evaluate your entire supply chain, identify where you are overpaying or under-receiving, and restructure vendor relationships to deliver sustainable cost savings without ever compromising the quality of care.
                </p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Vendor evaluation and performance benchmarking</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Contract negotiation and renegotiation</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Supply chain optimization and redundancy planning</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Group purchasing organization (GPO) assessment</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Spend analytics and cost transparency reporting</span>
                    </div>
                </div>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-primary no-underline">Discuss Your Procurement Needs</a>
            </div>
            <div class="gsap-reveal">
                <img src="<?php echo ps_img('data-analytics.jpg'); ?>" alt="Procurement analytics" class="rounded-lg shadow-2xl w-full">
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Optimization -->
<section class="py-20 bg-light" id="optimization">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="gsap-reveal order-2 lg:order-1">
                <img src="<?php echo ps_img('senior-care.jpg'); ?>" alt="Operational optimization" class="rounded-lg shadow-2xl w-full">
            </div>
            <div class="gsap-reveal order-1 lg:order-2">
                <div class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>
                </div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-6">Operational Optimization</h2>
                <p class="text-text-light text-lg leading-relaxed mb-6">
                    Running a senior living community means managing dozens of overlapping operational demands simultaneously. From staffing patterns and shift coverage to dining services, maintenance scheduling, and regulatory compliance, the margin for error is narrow and the cost of inefficiency is enormous.
                </p>
                <p class="text-text-light leading-relaxed mb-8">
                    Our optimization consultants assess your operations through a lens that balances financial performance with resident outcomes. We identify waste, streamline workflows, and implement systems that allow your team to focus on what matters most — the people in your care.
                </p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Operational efficiency assessments and benchmarking</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Cost containment without quality compromise</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Revenue enhancement through census growth strategies</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Staffing optimization and scheduling redesign</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Resident satisfaction measurement and improvement programs</span>
                    </div>
                </div>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-primary no-underline">Optimize Your Operations</a>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Technology Enablement -->
<section class="py-20 bg-white" id="technology">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="gsap-reveal">
                <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                    </svg>
                </div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-6">Technology Enablement</h2>
                <p class="text-text-light text-lg leading-relaxed mb-6">
                    Technology in senior living should simplify care, not complicate it. Too many communities invest in expensive systems that staff struggle to adopt and administrators cannot measure. Our technology practice takes a different approach — starting with what your team actually needs, then finding the right tools to deliver it.
                </p>
                <p class="text-text-light leading-relaxed mb-8">
                    Whether you are implementing your first electronic health records system, evaluating smart building solutions, or trying to make sense of the data you already collect, our team guides every step from vendor selection through training and full adoption.
                </p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Electronic Health Records (EHR) selection and implementation</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Smart building and IoT sensor deployment</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Resident engagement platforms and family communication tools</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Data analytics and performance dashboarding</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main">Staff training and technology adoption programs</span>
                    </div>
                </div>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-primary no-underline">Explore Technology Solutions</a>
            </div>
            <div class="gsap-reveal">
                <img src="<?php echo ps_img('healthcare-tech.jpg'); ?>" alt="Healthcare technology" class="rounded-lg shadow-2xl w-full">
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Flexible Support -->
<section class="py-20 bg-light" id="support">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="gsap-reveal order-2 lg:order-1">
                <img src="<?php echo ps_img('team-collab.jpg'); ?>" alt="Team support" class="rounded-lg shadow-2xl w-full">
            </div>
            <div class="gsap-reveal order-1 lg:order-2">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-6">Flexible Support Packages</h2>
                <p class="text-text-light text-lg leading-relaxed mb-6">
                    Not every community needs a full engagement. Sometimes you need a trusted advisor to call when challenges arise. Other times you need an experienced operator on-site during a leadership transition. Our flexible support packages adapt to exactly what your situation requires.
                </p>
                <div class="space-y-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h3 class="font-heading text-lg font-bold text-dark mb-2">Ongoing Advisory</h3>
                        <p class="text-text-light text-sm leading-relaxed">
                            Retained consulting with regular check-ins, quarterly reviews, and on-demand access to our senior team for strategic guidance.
                        </p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h3 class="font-heading text-lg font-bold text-dark mb-2">Project-Based Engagements</h3>
                        <p class="text-text-light text-sm leading-relaxed">
                            Focused consulting on specific initiatives — a new community opening, a technology migration, a procurement overhaul — with defined scope and timeline.
                        </p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h3 class="font-heading text-lg font-bold text-dark mb-2">Interim Management</h3>
                        <p class="text-text-light text-sm leading-relaxed">
                            Experienced operators placed on-site during leadership transitions, crisis situations, or organizational restructuring to maintain continuity of care and operations.
                        </p>
                    </div>
                </div>
                <a href="<?php echo home_url('/packages/'); ?>" class="btn-primary no-underline">View Our Packages</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center gsap-reveal">
        <h2 class="font-heading text-3xl md:text-4xl font-bold text-white mb-4">
            Not Sure Which Service You Need?
        </h2>
        <p class="text-white/80 text-lg max-w-2xl mx-auto mb-8">
            Our complimentary initial consultation helps identify which areas of your operation would benefit most from expert attention.
        </p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold no-underline">Schedule a Free Consultation</a>
    </div>
</section>

<?php get_footer(); ?>
