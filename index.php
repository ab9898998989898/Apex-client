<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AppexInsurance provides comprehensive auto insurance coverage with competitive rates, flexible plans, and exceptional claims service. Get your free quote today.">
    <meta name="keywords" content="auto insurance, car insurance, liability coverage, comprehensive insurance, collision coverage, insurance quotes">
    <meta name="author" content="AppexInsurance">
    <meta property="og:title" content="AppexInsurance - Reliable Auto Insurance Coverage">
    <meta property="og:description" content="Protect your vehicle and peace of mind with AppexInsurance. Competitive rates, fast claims, and personalized service.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://AppexInsurance.us">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#1a365d">
    <title>AppexInsurance - Reliable Auto Insurance Coverage | Get Your Free Quote</title>

    <!-- Preload and load main stylesheet -->
    <link rel="preload" href="styles.css" as="style" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="styles.css"></noscript>

    <!-- Preload and load Google Fonts (replace with your actual font if different) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" as="style" onload="this.rel='stylesheet'">
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    </noscript>
    <link rel="icon" href="icon.webp">
    <style>
        /* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #fff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header */
.site-header {
    background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
    color: white;
    padding: 1rem 0;
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo h1 {
    color: white;
    font-size: 1.8rem;
    margin-bottom: 0;
}

.tagline {
    font-size: 0.9rem;
    color: #bee3f8;
    font-style: italic;
}

.main-navigation ul {
    display: flex;
    list-style: none;
    gap: 2rem;
    align-items: center;
}

.main-navigation a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.main-navigation a:hover,
.main-navigation a:focus {
    color: #bee3f8;
    outline: 2px solid #bee3f8;
    outline-offset: 2px;
}

.cta-button {
    background: #e53e3e;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    font-weight: 600;
}

.cta-button:hover,
.cta-button:focus {
    background: #c53030;
    color: white !important;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, rgba(26, 54, 93, 0.65) 0%, rgba(44, 82, 130, 0.65) 100%), 
                url('Background.webp') center/cover;
    padding: 4rem 0;
    color: white;
    position: relative;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(26, 54, 93, 0.7) 0%, rgba(44, 82, 130, 0.7) 100%);
    z-index: 1;
}

.hero-section .container {
    position: relative;
    z-index: 2;
}

.hero-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 3rem;
}

.hero-content h2 {
    font-size: 3rem;
    margin-bottom: 1.5rem;
    color: white;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.hero-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    color: #f7fafc;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.hero-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.primary-button, .secondary-button {
    padding: 1rem 2rem;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    display: inline-block;
}

.primary-button {
    background: #e53e3e;
    color: white;
    border: 2px solid #e53e3e;
}

.primary-button:hover,
.primary-button:focus {
    background: #c53030;
    border-color: #c53030;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(229, 62, 62, 0.3);
    outline: 2px solid #fff;
    outline-offset: 2px;
}

.secondary-button {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.secondary-button:hover,
.secondary-button:focus {
    background: white;
    color: #1a365d;
    transform: translateY(-2px);
    outline: 2px solid #1a365d;
    outline-offset: 2px;
}

.hero-stats {
    display: flex;
    justify-content: center;
    gap: 3rem;
    flex-wrap: wrap;
}

.stat-item {
    text-align: center;
}

.stat-item strong {
    display: block;
    font-size: 2rem;
    color: white;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.stat-item span {
    color: #f7fafc;
    font-size: 0.9rem;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

/* Coverage Section */
.coverage-section {
    padding: 5rem 0;
    background: white;
}

.section-intro {
    text-align: center;
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto 3rem;
    color: #4a5568;
}

.coverage-section h2 {
    text-align: center;
    margin-bottom: 1rem;
}

.coverage-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.coverage-card {
    background: #f7fafc;
    padding: 2rem;
    border-radius: 12px;
    border: 2px solid #e2e8f0;
    transition: all 0.3s ease;
    position: relative;
}

.coverage-card:hover,
.coverage-card:focus-within {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border-color: #3182ce;
}

.coverage-card.featured {
    border-color: #e53e3e;
    background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
}

.popular-badge {
    position: absolute;
    top: -10px;
    right: 20px;
    background: #e53e3e;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.coverage-card h3 {
    color: #1a365d;
    margin-bottom: 1rem;
}

.coverage-card ul {
    list-style: none;
    margin-top: 1.5rem;
}

.coverage-card li {
    padding: 0.5rem 0;
    color: #4a5568;
    position: relative;
    padding-left: 1.5rem;
}

.coverage-card li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #38a169;
    font-weight: bold;
}

/* Features Section */
.features-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, #edf2f7 0%, #e2e8f0 100%);
}

.features-section h2 {
    text-align: center;
    margin-bottom: 3rem;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.feature-item {
    text-align: center;
    padding: 2rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.feature-item:hover,
.feature-item:focus-within {
    transform: translateY(-5px);
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.feature-item h3 {
    margin-bottom: 1rem;
    color: #1a365d;
}


/* CTA Section */
.cta-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
    color: white;
    text-align: center;
}

.cta-section h2 {
    color: white;
    margin-bottom: 1rem;
}

.cta-section p {
    color: #bee3f8;
    font-size: 1.1rem;
    margin-bottom: 2rem;
}

.cta-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Footer */
.site-footer {
    background: #1a365d;
    color: white;
    padding: 3rem 0 1rem;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.footer-section h3,
.footer-section h4 {
    color: white;
    margin-bottom: 1rem;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 0.5rem;
}

.footer-section a {
    color: #bee3f8;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section a:hover,
.footer-section a:focus {
    color: white;
    outline: 2px solid #bee3f8;
    outline-offset: 2px;
}

.footer-bottom {
    border-top: 1px solid #2d3748;
    padding-top: 2rem;
    text-align: center;
}

.footer-bottom p {
    margin-bottom: 0.5rem;
    color: #bee3f8;
}

.disclaimer {
    font-size: 0.9rem;
    color: #a0aec0;
}

/* Footer Disclaimer */
.footer-disclaimer {
    background-color:#1a365d;
    border-radius:12px ;
    padding: 2rem;
    margin: 0 auto;
    text-align: center;
    min-width: 200px;
    max-width: 900px;
}
.footer-disclaimer h4 {
    text-align: center;
    font-weight: bold;
    font-size: 2rem;
    color: #e53e3e;
}

.footer-disclaimer-text {
    font-size: 1.2rem;
    color: #d2caca;
    line-height: 1.2;
}

@media (max-width: 900px) {
    .footer-disclaimer {
        max-width: 100%;
        margin-left: 0;
        margin-top: 1.5em;
    }
    .footer-disclaimer-text {
        text-align: left;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
        gap: 1rem;
    }
    
    .main-navigation ul {
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
    }
    
    .hero-content h2,
    .page-hero h1 {
        font-size: 2rem;
    }
    
    .hero-actions,
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .hero-stats {
        gap: 1.5rem;
    }
    
    .coverage-grid,
    .features-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    .hero-content h2,
    .page-hero h1 {
        font-size: 1.8rem;
    }
    
    .primary-button,
    .secondary-button {
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
    }
    
    .coverage-card,
    .feature-item {
        padding: 1.5rem;
    }
}
    </style>
</head>
<body>
    <header class="site-header" role="banner">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1>AppexInsurance</h1>
                    <span class="tagline">Your Road to Protection</span>
                </div>
                <nav class="main-navigation" role="navigation" aria-label="Main navigation">
                    <ul>
                        <li><a href="index.php" aria-current="page">Home</a></li>
                        <li><a href="#coverage">Coverage</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#quote" class="cta-button">Get Quote</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main role="main">
        <section id="home" class="hero-section" aria-labelledby="hero-heading">
            <div class="container">
                <div class="hero-content">
                    <h2 id="hero-heading">Drive with Confidence, Protected by AppexInsurance</h2>
                    <p>Comprehensive auto insurance coverage that adapts to your lifestyle. From daily commuters to weekend drivers, we've got the right plan for you.</p>
                    <div class="hero-actions">
                        <a href="#quote" class="primary-button" aria-describedby="quote-description">Get Free Quote</a>
                        <a href="#coverage" class="secondary-button">View Coverage Options</a>
                    </div>
                    <span id="quote-description" class="sr-only">Get a personalized insurance quote in under 5 minutes</span>
                </div>
                <aside class="hero-stats" aria-label="Company statistics">
                    <div class="stat-item">
                        <strong aria-label="50,000 plus">50,000+</strong>
                        <span>Happy Customers</span>
                    </div>
                    <div class="stat-item">
                        <strong aria-label="24 hours 7 days">24/7</strong>
                        <span>Claims Support</span>
                    </div>
                    <div class="stat-item">
                        <strong aria-label="15 plus">15+</strong>
                        <span>Years Experience</span>
                    </div>
                </aside>
            </div>
        </section>

        <section id="coverage" class="coverage-section" aria-labelledby="coverage-heading">
            <div class="container">
                <h2 id="coverage-heading">Comprehensive Coverage Options</h2>
                <p class="section-intro">Choose from our range of auto insurance plans designed to meet your specific needs and budget.</p>
                
                <div class="coverage-grid" role="list">
                    <article class="coverage-card" role="listitem">
                        <h3>Liability Coverage</h3>
                        <p>Meet state requirements with our essential liability protection. Covers bodily injury and property damage to others in accidents where you're at fault.</p>
                        <ul>
                            <li>Bodily injury liability</li>
                            <li>Property damage liability</li>
                            <li>State minimum compliance</li>
                            <li>Legal defense coverage</li>
                        </ul>
                    </article>

                    <article class="coverage-card featured" role="listitem">
                        <div class="popular-badge" aria-label="Most popular plan">Most Popular</div>
                        <h3>Full Coverage</h3>
                        <p>Complete protection combining liability, collision, and comprehensive coverage. Perfect for financed vehicles and those seeking maximum protection.</p>
                        <ul>
                            <li>All liability benefits</li>
                            <li>Collision coverage</li>
                            <li>Comprehensive coverage</li>
                            <li>Uninsured motorist protection</li>
                            <li>Rental car reimbursement</li>
                        </ul>
                    </article>

                    <article class="coverage-card" role="listitem">
                        <h3>Comprehensive Plus</h3>
                        <p>Premium protection with enhanced benefits for luxury vehicles and high-value assets. Includes gap coverage and original equipment manufacturer parts.</p>
                        <ul>
                            <li>All full coverage benefits</li>
                            <li>Gap insurance included</li>
                            <li>OEM parts guarantee</li>
                            <li>Roadside assistance</li>
                            <li>Accident forgiveness</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="features-section" aria-labelledby="features-heading">
            <div class="container">
                <h2 id="features-heading">Why Choose AppexInsurance?</h2>
                <div class="features-grid" role="list">
                    <article class="feature-item" role="listitem">
                        <div class="feature-icon" aria-hidden="true">💰</div>
                        <h3>Competitive Rates</h3>
                        <p>We work with multiple carriers to find you the best rates available. Our pricing is transparent with no hidden fees.</p>
                    </article>
                    <article class="feature-item" role="listitem">
                        <div class="feature-icon" aria-hidden="true">⚡</div>
                        <h3>Fast Claims Processing</h3>
                        <p>Report claims 24/7 through our mobile app or website. Most claims are processed within 48 hours of submission.</p>
                    </article>
                    <article class="feature-item" role="listitem">
                        <div class="feature-icon" aria-hidden="true">🏆</div>
                        <h3>Local Expertise</h3>
                        <p>Our network of local agents understands your area's specific requirements and can provide personalized service.</p>
                    </article>
                    <article class="feature-item" role="listitem">
                        <div class="feature-icon" aria-hidden="true">📱</div>
                        <h3>Digital Tools</h3>
                        <p>Manage your policy, pay bills, and file claims through our user-friendly mobile app and online portal.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section" aria-labelledby="contact-heading">
            <div class="container">
                <h2 id="contact-heading">Contact Us</h2>
                <div class="contact-grid">
                    <div class="contact-info">
                        <h3>Get in Touch</h3>
                        <p>Have questions about your coverage or need to file a claim? Our team is here to help.</p>
                        
                        <address class="contact-methods">
                            <div class="contact-method">
                                <strong>Phone:</strong>
                                <a href="tel:+18884325219" aria-label="Call us at 888-432-5219">(888) 432-5219</a>
                            </div>
                            <div class="contact-method">
                                <strong>Email:</strong>
                                <a href="mailto:info@AppexInsurance.us" aria-label="Email us at info@AppexInsurance.us">info@AppexInsurance.us</a>
                            </div>
                            <div class="contact-method">
                                <strong>Claims Hotline:</strong>
                                <a href="tel:+18884325219" aria-label="Claims hotline 888-432-5219">(888) 432-5219</a>
                            </div>
                            <div class="contact-method">
                                <strong>Hours:</strong>
                                <span>24/7 Claims | Mon-Fri 8AM-8PM Sales</span>
                            </div>
                        </address>
                    </div>
                    
                    <div class="office-locations">
                        <h3>Office Locations</h3>
                        <div class="location">
                            <h4>Corporate Headquarters</h4>
                            <address>
                                1104 Haddon Stone Dr SE<br>
                                Owens Cross Roads, AL 35763
                            </address>
                        </div>
                        <div class="location">
                            <h4>Regional Offices</h4>
                            <p>We have agents in all 50 states. <a href="#find-agent">Find a local agent near you</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>AppexInsurance</h3>
                    <p>Protecting what matters most to you since 2008. Your trusted partner for reliable auto insurance coverage.</p>
                </div>                
                    <nav class="footer-section" aria-label="Quick links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#quote">Get Quote</a></li>
                        <li><a href="#coverage">Coverage Options</a></li>
                    </ul>
                </nav>                
                <nav class="footer-section" aria-label="Support links">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="about.php#faq">FAQ</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
                <nav class="footer-section" aria-label="Legal links">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 AppexInsurance. All rights reserved. Licensed in all 50 states.</p>
                <p class="disclaimer">AppexInsurance is a registered trademark. Coverage subject to policy terms and conditions.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple form handling and smooth scrolling
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for navigation links
            const navLinks = document.querySelectorAll('a[href^="#"]');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                        // Update focus for accessibility
                        target.focus();
                    }
                });
            });
            // Quote form handling with validation
            const quoteForm = document.querySelector('.quote-form');
            if (quoteForm) {
                quoteForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Basic form validation
                    const requiredFields = quoteForm.querySelectorAll('[required]');
                    let isValid = true;
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.setAttribute('aria-invalid', 'true');
                        } else {
                            field.setAttribute('aria-invalid', 'false');
                        }
                    });
                    if (isValid) {
                        alert('Thank you for your interest! A representative will contact you within 24 hours with your personalized quote.');
                    } else {
                        alert('Please fill in all required fields.');
                    }
                });
            }
        });
    </script>

</body>
</html>