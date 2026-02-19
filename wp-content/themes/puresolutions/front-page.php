<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-overlay relative min-h-[600px] md:min-h-[700px] flex items-center">
    <img src="<?php echo ps_img('hero-facility.jpg'); ?>" alt="Senior living facility" class="absolute inset-0 w-full h-full object-cover">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
        <div class="max-w-2xl">
            <span class="inline-block text-white/80 font-semibold text-sm tracking-widest uppercase mb-4">Trusted Industry Partner</span>
            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Strategic Solutions for Senior Living Excellence
            </h1>
            <p class="text-white/90 text-lg md:text-xl leading-relaxed mb-8 font-light">
                For over two decades, Pure Solutions has helped senior living communities optimize procurement, streamline operations, and embrace technology that elevates resident care.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold text-center no-underline">Schedule a Consultation</a>
                <a href="<?php echo home_url('/services/'); ?>" class="btn-white text-center no-underline">Explore Our Services</a>
            </div>
        </div>
    </div>
</section>

<!-- Intro Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="gsap-reveal">
                <span class="gold-line mb-6"></span>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-6">
                    Your Partner in Senior Living Operations
                </h2>
                <p class="text-text-light text-lg leading-relaxed mb-6">
                    Pure Solutions is a full-service consulting firm dedicated exclusively to the senior living industry. We partner with operators, owners, and administrators to transform the way communities manage procurement, optimize daily operations, and deploy technology that genuinely improves outcomes.
                </p>
                <p class="text-text-light leading-relaxed mb-8">
                    From single-community operators to multi-site portfolios with hundreds of beds, our tailored approach ensures every engagement delivers measurable impact. We do not believe in one-size-fits-all consulting. We believe in understanding your specific challenges and building solutions that last.
                </p>
                <a href="<?php echo home_url('/about/'); ?>" class="btn-secondary no-underline">Learn About Us</a>
            </div>
            <div class="gsap-reveal relative">
                <img src="<?php echo ps_img('elderly-garden.jpg'); ?>" alt="Residents enjoying outdoor spaces" class="rounded-lg shadow-2xl w-full">
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-accent/10 rounded-lg -z-10 hidden md:block"></div>
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-primary/10 rounded-lg -z-10 hidden md:block"></div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 gsap-reveal">
            <span class="gold-line mx-auto mb-6"></span>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-4">How We Help</h2>
            <p class="text-text-light text-lg max-w-2xl mx-auto">
                Four pillars of expertise designed to strengthen every aspect of your senior living operation.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 gsap-stagger">
            <!-- Strategic Procurement -->
            <div class="service-card bg-white rounded-xl p-8 shadow-sm gsap-stagger-item">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15a2.25 2.25 0 012.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-dark mb-3">Strategic Procurement</h3>
                <p class="text-text-light text-sm leading-relaxed mb-4">
                    Vendor evaluation, contract negotiation, and supply chain optimization that reduces costs without compromising quality.
                </p>
                <a href="<?php echo home_url('/services/'); ?>" class="text-primary font-semibold text-sm hover:text-accent transition-colors no-underline inline-flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Optimization -->
            <div class="service-card bg-white rounded-xl p-8 shadow-sm gsap-stagger-item">
                <div class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-dark mb-3">Optimization</h3>
                <p class="text-text-light text-sm leading-relaxed mb-4">
                    Operational efficiency, cost containment, revenue enhancement, and staffing optimization for measurable results.
                </p>
                <a href="<?php echo home_url('/services/'); ?>" class="text-primary font-semibold text-sm hover:text-accent transition-colors no-underline inline-flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Technology Enablement -->
            <div class="service-card bg-white rounded-xl p-8 shadow-sm gsap-stagger-item">
                <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-dark mb-3">Technology Enablement</h3>
                <p class="text-text-light text-sm leading-relaxed mb-4">
                    EHR implementation, smart building technology, resident engagement platforms, and data-driven analytics.
                </p>
                <a href="<?php echo home_url('/services/'); ?>" class="text-primary font-semibold text-sm hover:text-accent transition-colors no-underline inline-flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Flexible Support -->
            <div class="service-card bg-white rounded-xl p-8 shadow-sm gsap-stagger-item">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-dark mb-3">Flexible Support</h3>
                <p class="text-text-light text-sm leading-relaxed mb-4">
                    Ongoing advisory, project-based engagements, and interim management tailored to your operational needs.
                </p>
                <a href="<?php echo home_url('/services/'); ?>" class="text-primary font-semibold text-sm hover:text-accent transition-colors no-underline inline-flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Pure Solutions -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative gsap-reveal order-2 lg:order-1">
                <img src="<?php echo ps_img('business-meeting.jpg'); ?>" alt="Consulting team at work" class="rounded-lg shadow-2xl w-full">
                <div class="absolute -bottom-4 -right-4 bg-accent text-dark rounded-lg py-4 px-6 shadow-lg hidden md:block">
                    <span class="font-heading text-2xl font-bold block">98%</span>
                    <span class="text-sm font-semibold">Client Retention</span>
                </div>
            </div>
            <div class="gsap-reveal order-1 lg:order-2">
                <span class="gold-line mb-6"></span>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-8">Why Senior Living Leaders Choose Pure Solutions</h2>
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading text-xl font-bold text-dark mb-2">Deep Industry Experience</h3>
                            <p class="text-text-light leading-relaxed">Over 20 years working exclusively in senior living means we understand regulatory requirements, staffing challenges, and resident expectations at a level generalist consultants cannot match.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-6 h-6 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading text-xl font-bold text-dark mb-2">Proven Results</h3>
                            <p class="text-text-light leading-relaxed">Our clients see an average 15-25% reduction in procurement costs within the first year, along with measurable improvements in operational efficiency and resident satisfaction scores.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading text-xl font-bold text-dark mb-2">True Partnership</h3>
                            <p class="text-text-light leading-relaxed">We embed with your team rather than hand off a binder of recommendations. Our consultants work alongside your staff to implement changes and transfer knowledge that sustains results long after our engagement ends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="gsap-reveal">
                <span class="font-heading text-4xl md:text-5xl font-bold text-white block" data-count="20" data-suffix="+">0</span>
                <span class="text-white/90 text-sm font-semibold tracking-wider uppercase mt-2 block">Years Experience</span>
            </div>
            <div class="gsap-reveal">
                <span class="font-heading text-4xl md:text-5xl font-bold text-white block" data-count="150" data-suffix="+">0</span>
                <span class="text-white/90 text-sm font-semibold tracking-wider uppercase mt-2 block">Communities Served</span>
            </div>
            <div class="gsap-reveal">
                <span class="font-heading text-4xl md:text-5xl font-bold text-white block" data-count="50" data-prefix="$" data-suffix="M+">0</span>
                <span class="text-white/90 text-sm font-semibold tracking-wider uppercase mt-2 block">Cost Savings Delivered</span>
            </div>
            <div class="gsap-reveal">
                <span class="font-heading text-4xl md:text-5xl font-bold text-white block" data-count="98" data-suffix="%">0</span>
                <span class="text-white/90 text-sm font-semibold tracking-wider uppercase mt-2 block">Client Retention</span>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 gsap-reveal">
            <span class="gold-line mx-auto mb-6"></span>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-4">What Our Clients Say</h2>
            <p class="text-text-light text-lg max-w-2xl mx-auto">
                Trusted by senior living operators across the country to deliver meaningful, lasting improvements.
            </p>
        </div>
        <div x-data="testimonialSlider()" class="gsap-reveal">
            <div class="max-w-3xl mx-auto relative">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <div x-show="current === index"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition ease-in duration-300 absolute inset-0"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                        <div class="testimonial-card">
                            <svg class="w-10 h-10 text-accent/30 mb-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                            <p class="text-lg md:text-xl text-dark leading-relaxed mb-6 italic font-light" x-text="testimonial.quote"></p>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-lg" x-text="testimonial.initials"></div>
                                <div>
                                    <p class="font-bold text-dark" x-text="testimonial.name"></p>
                                    <p class="text-text-light text-sm" x-text="testimonial.title"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <!-- Dots -->
            <div class="flex justify-center space-x-3 mt-8">
                <template x-for="(testimonial, index) in testimonials" :key="'dot-'+index">
                    <button @click="goTo(index)" class="w-3 h-3 rounded-full transition-all duration-200" :class="current === index ? 'bg-primary scale-110' : 'bg-gray-300 hover:bg-gray-400'" :aria-label="'Go to testimonial ' + (index+1)"></button>
                </template>
            </div>
        </div>
    </div>
</section>

<script>
function testimonialSlider() {
    return {
        current: 0,
        interval: null,
        testimonials: [
            {
                quote: "Pure Solutions transformed our procurement process across twelve communities. Within eight months, we reduced supply costs by 22% while actually improving the quality of products reaching our residents. Their team understood our industry from day one.",
                name: "Margaret Holloway",
                title: "COO, Evergreen Senior Communities",
                initials: "MH"
            },
            {
                quote: "When we brought Pure Solutions in to evaluate our technology stack, we expected a list of expensive recommendations. Instead, they helped us get more from what we already had and only added systems that genuinely moved the needle on resident care and staff efficiency.",
                name: "David Chen",
                title: "VP of Operations, Pacific Coast Living",
                initials: "DC"
            },
            {
                quote: "After struggling with census and revenue challenges for two years, Pure Solutions helped us identify operational bottlenecks we could not see from the inside. Our occupancy rate increased 14 points in under a year, and staff turnover dropped measurably.",
                name: "Katherine Reynolds",
                title: "Executive Director, Sunrise Pointe CCRC",
                initials: "KR"
            },
            {
                quote: "The interim management support from Pure Solutions was outstanding. They placed an experienced operator on-site within a week during our leadership transition. The continuity of care never wavered, and our families never noticed a disruption.",
                name: "Robert Jameson",
                title: "Board Chair, Heritage Gardens Senior Living",
                initials: "RJ"
            }
        ],
        init() {
            this.startAutoplay();
        },
        startAutoplay() {
            this.interval = setInterval(() => {
                this.next();
            }, 6000);
        },
        next() {
            this.current = (this.current + 1) % this.testimonials.length;
        },
        goTo(index) {
            this.current = index;
            clearInterval(this.interval);
            this.startAutoplay();
        }
    }
}
</script>

<!-- CTA Section -->
<section class="relative py-20 overflow-hidden">
    <img src="<?php echo ps_img('senior-community.jpg'); ?>" alt="Senior living community" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-dark/80"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="gsap-reveal">
            <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                Ready to Optimize Your<br>Senior Living Operation?
            </h2>
            <p class="text-white/90 text-lg max-w-2xl mx-auto mb-10">
                Schedule a complimentary consultation to discuss your community's challenges and discover how Pure Solutions can deliver measurable improvements.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold text-center no-underline">Schedule Your Consultation</a>
                <a href="<?php echo home_url('/packages/'); ?>" class="btn-white text-center no-underline">View Our Packages</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
