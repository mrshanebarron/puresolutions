# SPEC: Pure Solutions — Senior Living Consulting Website

## Job Details
- **Job #424**: Professional WordPress Website Development for Senior Living Consulting Business
- **Budget**: $1,000
- **Tech Stack**: WordPress (custom theme)
- **Client**: Pure Solutions (senior living consulting company)
- **End User**: Senior living facility administrators, operators, and owners looking for consulting help with procurement, optimization, and technology

## What We're Building
A professional, responsive WordPress website for a senior living consulting company. Clean, modern design with clear service descriptions, packages, and strong CTAs. The site must communicate trust, expertise, and professionalism — this is B2B consulting for an industry that serves elderly people.

## Domain Research
- **Industry**: Senior living consulting (assisted living, memory care, independent living, continuing care retirement communities)
- **Competitors studied**: Senior Living Smart, Sage Age Strategies, Plante Moran Living Forward, Senior Housing News
- **UX patterns**: Trust-first design, clear service breakdowns, case studies/testimonials, easy contact pathways
- **Terminology**: Procurement optimization, technology enablement, operational efficiency, census growth, resident satisfaction, regulatory compliance, cost containment, vendor management

## Design Decisions

### Typography
- **Headings**: Playfair Display (serif — conveys trust, establishment, sophistication for B2B consulting)
- **Body**: Source Sans 3 (clean sans-serif, excellent readability, professional)
- **Google Fonts URL**: `https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Source+Sans+3:wght@300;400;500;600;700&display=swap`

### Color Palette
- **Primary**: `#1B4D6E` (deep teal blue — trust, professionalism, healthcare adjacent)
- **Secondary**: `#2E8B57` (sea green — growth, vitality, care)
- **Accent**: `#D4A843` (warm gold — premium, established)
- **Dark**: `#1a1a2e` (near-black for headers, footer)
- **Light**: `#f8f6f3` (warm off-white background)
- **Text**: `#333333` (dark gray for body text)
- **Light text**: `#666666` (secondary text)

### Photos (Unsplash — download with ?w=1200&q=80)
1. Senior living facility exterior: `https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=1200&q=80`
2. Elderly couple in garden: `https://images.unsplash.com/photo-1447005497901-b3e9ee359928?w=1200&q=80`
3. Modern senior living interior: `https://images.unsplash.com/photo-1586105251261-72a756497a11?w=1200&q=80`
4. Business meeting/consulting: `https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&q=80`
5. Healthcare technology: `https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1200&q=80`
6. Senior care hands: `https://images.unsplash.com/photo-1516534775068-ba3e7458af70?w=1200&q=80`
7. Modern office workspace: `https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200&q=80`
8. Team collaboration: `https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1200&q=80`
9. Senior living community: `https://images.unsplash.com/photo-1559234938-b60fff04894d?w=1200&q=80`
10. Data analytics dashboard: `https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1200&q=80`

### Layout Style
- Clean, professional, lots of white space
- Full-width hero sections with overlay text
- Card-based service and package displays
- Alternating left-right content sections for visual rhythm
- Sticky header with CTA button

## Pages & Sections

### 1. Homepage (front-page.php)
- **Hero**: Full-width image with overlay. Headline: "Strategic Solutions for Senior Living Excellence". Subheadline about 20+ years experience. CTA: "Schedule a Consultation"
- **Intro section**: Brief overview of Pure Solutions — who they are, what they do
- **Services overview**: 3-4 cards linking to services page (Strategic Procurement, Optimization, Technology Enablement, Flexible Support)
- **Why Pure Solutions**: 3-column trust indicators (Experience, Results, Partnership approach)
- **Stats bar**: Key metrics (Years Experience: 20+, Communities Served: 150+, Cost Savings Delivered: $50M+, Client Retention: 98%)
- **Testimonials**: 2-3 rotating client quotes
- **CTA section**: "Ready to Optimize Your Senior Living Operation?" with button

### 2. About Page (page-about.php)
- Company history and mission
- Team section (placeholder team members with photos)
- Values: Integrity, Innovation, Partnership, Results
- "Our Approach" section describing the consulting methodology

### 3. Services Page (page-services.php)
- **Strategic Procurement**: Vendor evaluation, contract negotiation, supply chain optimization
- **Optimization**: Operational efficiency, cost containment, revenue enhancement, staffing optimization
- **Technology Enablement**: EHR implementation, smart building tech, resident engagement platforms, data analytics
- **Flexible Support Packages**: Ongoing advisory, project-based, interim management
- Each service with icon, description, key benefits, and CTA

### 4. Solutions Page (page-solutions.php)
- Industry-specific solutions by community type:
  - Assisted Living
  - Memory Care
  - Independent Living
  - Continuing Care Retirement Communities (CCRCs)
- Each with specific challenges addressed and outcomes delivered

### 5. Packages Page (page-packages.php)
- **Starter**: Assessment + recommendations (for single-community operators)
- **Professional**: Full optimization engagement (for multi-site operators)
- **Enterprise**: Comprehensive partnership (for large portfolios)
- Comparison table with features
- Each with CTA to contact

### 6. FAQ Page (page-faq.php)
- Accordion-style FAQ
- Questions about: engagement process, timeline, pricing model, industries served, remote vs on-site, getting started
- At least 8 Q&A pairs

### 7. Contact Page (page-contact.php)
- Contact form (Contact Form 7 or custom): Name, Email, Phone, Company, Community Size, Message
- Office location (placeholder address)
- Phone and email
- Map embed (optional)
- "Schedule a Call" CTA

### Navigation
- Home | About | Services | Solutions | Packages | FAQ | Contact
- Mobile hamburger menu
- Sticky header

### Footer
- Company info, quick links, services links, contact info
- Social media icons (LinkedIn, Twitter placeholder links)
- Copyright 2026

## WordPress Technical Requirements

### Theme
- Custom theme built from scratch (no page builders)
- Tailwind CSS via CDN
- Alpine.js for interactivity (mobile menu, accordions, testimonial slider)
- GSAP + ScrollTrigger for scroll animations

### Plugins (minimal)
- Contact Form 7 (or build custom form)
- Yoast SEO (basic setup)
- That's it — keep it lightweight

### Custom Post Types
- **Testimonials** CPT: quote, author_name, author_title, company
- **Team Members** CPT: name, title, bio, photo

### Customizer / Theme Settings
- Not required for demo — hardcode content

### Performance
- No heavy page builders
- Minimal plugins
- Images optimized via Unsplash parameters
- Tailwind CDN (no build step)

## Seed Data
- 3 team members with realistic names and bios
- 4 testimonials from realistic senior living operators
- All pages populated with real content (no Lorem Ipsum)
- 8+ FAQ entries

## Demo Credentials
- **Admin**: admin / password
- **URL**: puresolutions.test (local)

## Packages from ~/Sites/packages/
- `accordion` — for FAQ page
- `tabs` — for services/solutions if needed
- `carousel` — for testimonials (evaluate vs Alpine slider)

## Acceptance Criteria
1. All 7 pages exist with real content
2. Navigation works on desktop and mobile
3. Contact form submits successfully
4. Testimonials display and rotate
5. FAQ accordion opens/closes smoothly
6. Stats counter animates on scroll
7. All images load (downloaded from Unsplash)
8. Responsive at 375px, 768px, 1440px
9. No Lorem Ipsum anywhere
10. Typography is Playfair Display + Source Sans 3 (not defaults)
11. Color palette matches spec
12. Every link returns 200
13. Page load under 3 seconds
14. WordPress admin accessible at /wp-admin
