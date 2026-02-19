<?php
/* Template Name: Packages */
get_header(); ?>

<!-- Page Hero -->
<section class="relative py-24 md:py-32 overflow-hidden">
    <img src="<?php echo ps_img('modern-office.jpg'); ?>" alt="Professional consulting" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-dark/90 to-primary/80"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="gold-line mb-6"></span>
        <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-4">Engagement Packages</h1>
        <p class="text-white/80 text-lg max-w-xl">Structured consulting engagements designed for operators of every size, from single communities to large portfolios.</p>
    </div>
</section>

<!-- Intro -->
<section class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center gsap-reveal">
        <p class="text-text-light text-lg leading-relaxed">
            We do not believe in rigid, one-size-fits-all pricing. The packages below represent our most common engagement structures. Each is customized to your specific situation during our initial consultation. All packages include a dedicated engagement manager and measurable outcomes reporting.
        </p>
    </div>
</section>

<!-- Package Cards -->
<section class="py-12 pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 gsap-stagger">
            <!-- Starter -->
            <div class="package-card bg-light rounded-2xl p-8 shadow-sm gsap-stagger-item">
                <div class="mb-8">
                    <h3 class="font-heading text-2xl font-bold text-navy mb-2">Starter</h3>
                    <p class="text-text-light text-sm">For single-community operators seeking targeted assessment and actionable recommendations.</p>
                </div>
                <div class="mb-8">
                    <span class="text-text-light text-sm">Starting at</span>
                    <div class="flex items-end space-x-1">
                        <span class="font-heading text-4xl font-bold text-primary">$15,000</span>
                    </div>
                    <span class="text-text-light text-sm">per engagement</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Comprehensive operational assessment (2-3 weeks)</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Procurement spend analysis</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Technology readiness evaluation</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Detailed findings report with prioritized action items</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Executive presentation to leadership team</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">30-day follow-up consultation</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-secondary w-full text-center no-underline block">Get Started</a>
            </div>

            <!-- Professional (Featured) -->
            <div class="package-card package-featured bg-white rounded-2xl p-8 shadow-lg gsap-stagger-item">
                <div class="mb-8">
                    <h3 class="font-heading text-2xl font-bold text-navy mb-2">Professional</h3>
                    <p class="text-text-light text-sm">For multi-site operators seeking full optimization across procurement, operations, and technology.</p>
                </div>
                <div class="mb-8">
                    <span class="text-text-light text-sm">Starting at</span>
                    <div class="flex items-end space-x-1">
                        <span class="font-heading text-4xl font-bold text-primary">$45,000</span>
                    </div>
                    <span class="text-text-light text-sm">per engagement</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm font-semibold">Everything in Starter, plus:</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Multi-site assessment and cross-community benchmarking</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Hands-on implementation support (8-12 weeks)</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Vendor renegotiation and new vendor sourcing</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Technology roadmap and implementation guidance</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Staff training and knowledge transfer sessions</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Quarterly progress reviews (12 months)</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold w-full text-center no-underline block">Get Started</a>
            </div>

            <!-- Enterprise -->
            <div class="package-card bg-light rounded-2xl p-8 shadow-sm gsap-stagger-item">
                <div class="mb-8">
                    <h3 class="font-heading text-2xl font-bold text-navy mb-2">Enterprise</h3>
                    <p class="text-text-light text-sm">For large portfolios seeking a comprehensive, ongoing consulting partnership.</p>
                </div>
                <div class="mb-8">
                    <span class="text-text-light text-sm">Custom pricing</span>
                    <div class="flex items-end space-x-1">
                        <span class="font-heading text-4xl font-bold text-primary">Custom</span>
                    </div>
                    <span class="text-text-light text-sm">tailored to portfolio</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm font-semibold">Everything in Professional, plus:</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Dedicated consulting team assignment</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Portfolio-wide procurement consolidation</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Enterprise technology platform evaluation and rollout</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">On-site consulting days (monthly)</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Interim management availability</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-secondary mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-text-main text-sm">Board presentation support and financial modeling</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-secondary w-full text-center no-underline block">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section class="py-16 bg-light">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 gsap-reveal">
            <h2 class="font-heading text-3xl font-bold text-navy mb-4">Package Comparison</h2>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-x-auto gsap-reveal">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-4 px-6 font-heading font-bold text-navy">Feature</th>
                        <th class="text-center py-4 px-4 font-heading font-bold text-navy">Starter</th>
                        <th class="text-center py-4 px-4 font-heading font-bold text-accent bg-accent/5">Professional</th>
                        <th class="text-center py-4 px-4 font-heading font-bold text-navy">Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-100">
                        <td class="py-3 px-6 text-text-main">Operational Assessment</td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="py-3 px-4 text-center bg-accent/5"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="py-3 px-6 text-text-main">Procurement Analysis</td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="py-3 px-4 text-center bg-accent/5"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="py-3 px-6 text-text-main">Implementation Support</td>
                        <td class="py-3 px-4 text-center text-gray-300">-</td>
                        <td class="py-3 px-4 text-center bg-accent/5"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="py-3 px-6 text-text-main">Vendor Renegotiation</td>
                        <td class="py-3 px-4 text-center text-gray-300">-</td>
                        <td class="py-3 px-4 text-center bg-accent/5"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="py-3 px-6 text-text-main">Technology Roadmap</td>
                        <td class="py-3 px-4 text-center text-gray-300">-</td>
                        <td class="py-3 px-4 text-center bg-accent/5"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="py-3 px-6 text-text-main">Staff Training</td>
                        <td class="py-3 px-4 text-center text-gray-300">-</td>
                        <td class="py-3 px-4 text-center bg-accent/5"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="py-3 px-6 text-text-main">Dedicated Team</td>
                        <td class="py-3 px-4 text-center text-gray-300">-</td>
                        <td class="py-3 px-4 text-center bg-accent/5 text-gray-300">-</td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="py-3 px-6 text-text-main">On-site Consulting Days</td>
                        <td class="py-3 px-4 text-center text-gray-300">-</td>
                        <td class="py-3 px-4 text-center bg-accent/5 text-gray-300">-</td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-6 text-text-main">Interim Management</td>
                        <td class="py-3 px-4 text-center text-gray-300">-</td>
                        <td class="py-3 px-4 text-center bg-accent/5 text-gray-300">-</td>
                        <td class="py-3 px-4 text-center"><svg class="w-5 h-5 text-secondary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center gsap-reveal">
        <h2 class="font-heading text-3xl md:text-4xl font-bold text-white mb-4">
            Need Help Choosing the Right Package?
        </h2>
        <p class="text-white/80 text-lg max-w-2xl mx-auto mb-8">
            Our complimentary initial consultation will help determine which engagement structure best fits your community's needs and budget.
        </p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold no-underline">Schedule a Consultation</a>
    </div>
</section>

<?php get_footer(); ?>
