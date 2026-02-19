<?php
/* Template Name: FAQ */
get_header(); ?>

<!-- Page Hero -->
<section class="relative py-24 md:py-32 overflow-hidden">
    <img src="<?php echo ps_img('business-meeting.jpg'); ?>" alt="Consultation meeting" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-dark/90 to-primary/80"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="gold-line mb-6"></span>
        <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-4">Frequently Asked Questions</h1>
        <p class="text-white/80 text-lg max-w-xl">Common questions from senior living operators considering a consulting partnership.</p>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div x-data="faqAccordion()" class="space-y-0">

            <!-- FAQ 1 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(0)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">What does the engagement process look like from start to finish?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 0 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 0 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        Every engagement begins with a complimentary consultation where we learn about your community's specific challenges, goals, and constraints. From there, we propose a tailored scope of work with clear milestones and timelines. The engagement typically follows our four-phase approach: Discover (assessment), Design (strategy development), Implement (hands-on execution), and Sustain (knowledge transfer and ongoing support). Throughout the process, you receive regular progress updates and have direct access to your engagement manager.
                    </p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(1)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">How long does a typical consulting engagement last?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 1 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 1 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        It depends on the scope. Our Starter package assessments are typically completed within 3-4 weeks. Professional engagements with implementation support usually run 3-6 months. Enterprise partnerships are ongoing, often structured as 12-month agreements with renewal options. We never extend an engagement beyond what is necessary — our goal is to build your internal capability so you do not need us permanently.
                    </p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(2)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">How is pricing structured? Are there hidden costs?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 2 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 2 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        We use fixed-fee engagements for defined scopes of work, so you know the full cost before we begin. There are no hidden charges, hourly surprises, or scope-creep billing. If additional work arises during an engagement, we discuss it transparently and agree on scope adjustments before proceeding. Travel expenses for on-site work are included in our quoted fees for domestic engagements.
                    </p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(3)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">Do you work with communities outside of senior living?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 3 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 3 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        No. Our exclusive focus on senior living is what makes us effective. We work with assisted living communities, memory care facilities, independent living communities, CCRCs, and skilled nursing facilities. This focus means our benchmarks, vendor relationships, regulatory knowledge, and operational playbooks are always specific to the industry rather than adapted from other sectors.
                    </p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(4)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">Can you work with us remotely, or do you need to be on-site?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 4 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 4 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        We use a hybrid approach. Initial assessments and implementation phases typically include on-site visits because there is no substitute for walking your hallways, observing workflows, and meeting your staff. Ongoing advisory and follow-up work is effectively handled through video conferencing, shared dashboards, and regular virtual check-ins. For our Enterprise clients, we schedule regular monthly on-site consulting days.
                    </p>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(5)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">What kind of results can we expect, and when?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 5 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 5 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        Results vary by engagement scope, but our procurement optimization engagements typically deliver 15-25% cost savings within the first year. Operational improvements like census growth and staff retention show measurable movement within 3-6 months. Technology implementations follow their own timelines based on the systems involved. We set specific, measurable KPIs at the beginning of every engagement and report against them regularly so you always know exactly where you stand.
                    </p>
                </div>
            </div>

            <!-- FAQ 7 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(6)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">How do you ensure changes stick after the engagement ends?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 6 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 6 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        Sustainability is built into every engagement from day one. We involve your team in the process rather than working in isolation, which builds ownership and understanding. All Professional and Enterprise packages include formal knowledge transfer sessions, documented standard operating procedures, and training materials. We also provide post-engagement check-ins — typically at 30, 60, and 90 days — to ensure implementations are holding and to address any emerging challenges.
                    </p>
                </div>
            </div>

            <!-- FAQ 8 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(7)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">How do we get started?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 7 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 7 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        The easiest way to begin is through our contact page. Fill out a brief form describing your community and challenges, and a member of our team will reach out within one business day to schedule a complimentary consultation. During that conversation, we will discuss your situation in detail and recommend whether a formal engagement makes sense. There is no obligation and no sales pressure — if consulting is not what you need right now, we will tell you.
                    </p>
                </div>
            </div>

            <!-- FAQ 9 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(8)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">Do you work with non-profit and faith-based communities?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 8 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 8 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        Absolutely. A significant portion of our client base includes non-profit organizations and faith-based senior living communities. We understand the unique governance structures, mission-driven priorities, and funding considerations that distinguish these organizations. Our approach respects the values and mission of non-profit operators while still delivering the financial discipline and operational excellence that keeps communities sustainable for the residents who depend on them.
                    </p>
                </div>
            </div>

            <!-- FAQ 10 -->
            <div class="faq-item gsap-reveal">
                <button @click="toggle(9)" class="faq-trigger w-full flex items-center justify-between py-6 text-left">
                    <span class="font-heading text-lg font-bold text-navy pr-8">What size communities do you work with?</span>
                    <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open === 9 }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content" :style="open === 9 ? 'max-height: 500px; opacity: 1; padding-bottom: 24px;' : 'max-height: 0; opacity: 0; padding-bottom: 0;'">
                    <p class="text-text-light leading-relaxed">
                        We work with operators ranging from single communities with 30 beds to multi-state portfolios with thousands of units. Our Starter package is specifically designed for smaller, single-site operators who need expert assessment without an enterprise-level commitment. The Professional and Enterprise packages scale to match the complexity and scope of larger organizations. The principles of good procurement, operational efficiency, and technology adoption apply regardless of size — the implementation approach simply adjusts.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
function faqAccordion() {
    return {
        open: null,
        toggle(index) {
            this.open = this.open === index ? null : index;
        }
    }
}
</script>

<!-- CTA -->
<section class="py-16 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center gsap-reveal">
        <h2 class="font-heading text-3xl md:text-4xl font-bold text-white mb-4">
            Have a Question Not Listed Here?
        </h2>
        <p class="text-white/80 text-lg max-w-2xl mx-auto mb-8">
            Reach out directly and one of our team members will provide a thoughtful answer within one business day.
        </p>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold no-underline">Contact Us</a>
    </div>
</section>

<?php get_footer(); ?>
