<?php include 'hero.php';?>
<script src="./static/js/hero.js"></script>


<!-- PREMIUM ABOUT US SECTION -->
<section class="about-section" aria-labelledby="about-title">
    <div class="about-shell">
        
        <!-- VISUAL COMPOSITION (LEFT SIDE) -->
        <div class="about-left">
            <div class="composition-grid">
                <!-- Main Frame with Conic Animated Border Shadow Effect -->
                <div class="about-image-wrapper main-frame">
                    <img src="./static/img/aboutbafna.jpg" alt="Modern manufacturing facility for stationery products" class="about-image">
                    <div class="frame-overlay"></div>
                </div>
                
                <!-- Floating Premium Architectural Card -->
                <div class="floating-glass-card">
                    <div class="glass-card-inner">
                        <i class="fa-solid fa-gem" aria-hidden="true"></i>
                        <h3>Uncompromised Standards</h3>
                        <p>Every batch undergo rigorous compliance testing for international export standards.</p>
                    </div>
                </div>
                
                <!-- Background Accent Block -->
                <div class="geometry-accent"></div>
            </div>
        </div>

        <!-- EDITORIAL CONTENT (RIGHT SIDE) -->
        <div class="about-right">
            <div class="section-badge">
                <span class="badge-dot"></span>
                Corporate Profile
            </div>

            <h2 class="about-title" id="about-title">
                <span class="title-row">Trusted Manufacturing.</span>
                <span class="title-row color-shifting-text">Proven Expertise.</span>
            </h2>

            <div class="editorial-body">
                <p class="lead-text">
                    P P Bafna Ventures Pvt. Ltd. stands as a cornerstone of high-volume paper conversion in India, manufacturing tailored stationery architectures for top global brands.
                </p>
                
                <p class="about-description">
                    Our capabilities span fully-automated production of premium notebooks, bespoke office stationery, case-bound journals, and specialized educational supplies. Driven by continuous manufacturing innovation, we execute massive private-label orders flawlessly for global distributors and deep retail networks.
                </p>
                
                <p class="about-description">
                    Operating out of advanced infrastructure, we marry rapid scalability with precision detail. We don't simply supply paper products; we anchor your logistics and supply chain with zero-defect execution.
                </p>
            </div>

            <div class="about-action-row " >
                <a href="#" id="about-legacy-btn" class="hero-btn hero-btn-primary"  >
                    <span class="btn-text" >Explore Our Legacy</span>
                    <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i>
                </a>
                
                <!-- Trust Signifier -->
                <div class="trust-sig">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>ISO 9001:2015 & FSC Certified</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END ABOUT US SECTION -->
<!-- PREMIUM PRODUCT CATEGORIES SECTION -->
<section class="categories-section" aria-labelledby="categories-title">
    <div class="categories-shell">
        
        <!-- SECTION HEADER SECTION -->
        <div class="categories-header">
            <div class="section-badge">
                <span class="badge-dot"></span>
                Product Portfolio
            </div>
            
            <h2 class="categories-title" id="categories-title">
                <span>Our Core Product Categories.</span>
                <span class="color-shifting-text">Complete Stationery Solutions.</span>
            </h2>
            
            <p class="categories-subtitle">
                Explore our diverse range of high-conversion stationery, precision-engineered wood-free pencils, premium journals, and custom private-label packaging frameworks engineered for global supply chains.
            </p>

            <!-- LUXURY MARKET CLASSIFICATION TABS -->
            <div class="market-tabs" role="tablist" aria-label="Market Segments">
                <button class="market-tab active" role="tab" aria-selected="true" data-target="export-market">
                    <i class="fa-solid fa-globe"></i>
                    <span>Export Category Portfolio</span>
                </button>
                <button class="market-tab" role="tab" aria-selected="false" data-target="domestic-market">
                    <i class="fa-solid fa-house-chimney-window"></i>
                    <span>Domestic Category Portfolio</span>
                </button>
                <div class="tab-indicator-pill"></div>
            </div>
        </div>

        <!-- PRODUCTS INTERACTIVE CONTAINER -->
        <div class="categories-grid-container">
            
            <!-- EXPORT MARKET ITEMS GRID (Flip entry configured via CSS variables) -->
            <div class="products-grid active" id="export-market" role="tabpanel">
                <!-- Card 1 -->
                <div class="product-card-3d" style="--page-index: 1;">
                    <div class="product-card">
                        <div class="product-image-container">
                            <div class="image-overlay-glow"></div>
                            <div class="placeholder-visual"><i class="fa-solid fa-book-open"></i></div>
                        </div>
                        <div class="product-details">
                            <span class="product-meta">High-Volume Scale</span>
                            <h3>Global Notebook Series</h3>
                            <p>Composition books, wirebound journals, and filler papers optimized for Western retail requirements.</p>
                            <a href="#" class="product-link">View Specifications <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="product-card-3d" style="--page-index: 2;">
                    <div class="product-card">
                        <div class="product-image-container">
                            <div class="image-overlay-glow"></div>
                            <div class="placeholder-visual"><i class="fa-solid fa-pencil"></i></div>
                        </div>
                        <div class="product-details">
                            <span class="product-meta">Eco-Friendly Craft</span>
                            <h3>Polymer & Wood-Free Pencils</h3>
                            <p>Premium break-resistant graphite and color pencils meeting global EN71 child-safety certifications.</p>
                            <a href="#" class="product-link">View Specifications <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="product-card-3d" style="--page-index: 3;">
                    <div class="product-card">
                        <div class="product-image-container">
                            <div class="image-overlay-glow"></div>
                            <div class="placeholder-visual"><i class="fa-solid fa-box-open"></i></div>
                        </div>
                        <div class="product-details">
                            <span class="product-meta">Bespoke Solutions</span>
                            <h3>Private Label Kit Assemblies</h3>
                            <p>Fully packaged educational boxes, custom stationery kits, and retail-ready subscription builds.</p>
                            <a href="#" class="product-link">View Specifications <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DOMESTIC MARKET ITEMS GRID -->
            <div class="products-grid" id="domestic-market" role="tabpanel">
                <!-- Card 1 -->
                <div class="product-card-3d" style="--page-index: 1;">
                    <div class="product-card">
                        <div class="product-image-container">
                            <div class="image-overlay-glow"></div>
                            <div class="placeholder-visual"><i class="fa-solid fa-graduation-cap"></i></div>
                        </div>
                        <div class="product-details">
                            <span class="product-meta">Academic Excellence</span>
                            <h3>Premium Student Stationery</h3>
                            <p>Heavy-duty exercise books, drawing pads, and functional scholastic paper items for domestic educational systems.</p>
                            <a href="#" class="product-link">View Specifications <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="product-card-3d" style="--page-index: 2;">
                    <div class="product-card">
                        <div class="product-image-container">
                            <div class="image-overlay-glow"></div>
                            <div class="placeholder-visual"><i class="fa-solid fa-briefcase"></i></div>
                        </div>
                        <div class="product-details">
                            <span class="product-meta">Corporate Precision</span>
                            <h3>Executive Office Supplies</h3>
                            <p>Smyth-sewn corporate diaries, bound ledger books, duplicate pads, and architectural filing archives.</p>
                            <a href="#" class="product-link">View Specifications <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="product-card-3d" style="--page-index: 3;">
                    <div class="product-card">
                        <div class="product-image-container">
                            <div class="image-overlay-glow"></div>
                            <div class="placeholder-visual"><i class="fa-solid fa-layer-group"></i></div>
                        </div>
                        <div class="product-details">
                            <span class="product-meta">Industrial Print</span>
                            <h3>Commercial Packaging Cubes</h3>
                            <p>Rigid board configurations, full-color litho-laminated cartons, and industrial paper wraps.</p>
                            <a href="#" class="product-link">View Specifications <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>




<!-- PREMIUM WORLD MAP MARKET COMMAND HUB & EXHIBITIONS SECTION -->
<section class="appearance-section" aria-labelledby="appearance-title">
    <div class="appearance-shell">
        
        <!-- DYNAMIC MARKET INTELLIGENCE HUB (LEFT COLUMN) -->
        <div class="appearance-left">
            <div class="section-badge">
                <span class="badge-dot"></span>
                Global Operations Hub
            </div>

            <h2 class="appearance-title" id="appearance-title">
                <span>Our Global Footprint.</span>
                <span class="color-shifting-text">Delivering Across Borders.</span>
            </h2>

            <!-- JAVASCRIPT-DRIVEN CONTROL PANEL PANEL -->
            <div class="market-command-panel">
                <!-- Live Region Switcher -->
                <div class="region-switcher-bar">
                    <button class="region-pill active" data-index="0">N. America</button>
                    <button class="region-pill" data-index="1">EMEA Corridor</button>
                    <button class="region-pill" data-index="2">MENA Markets</button>
                     <button class="region-pill" data-index="3">India Markets</button>
                </div>

                <!-- Dynamic Data Screen -->
                <div class="hub-monitor-display">
                    <div class="monitor-header">
                        <span class="live-ping"><span class="ping-dot"></span> Active Logistics</span>
                        <h3 class="dynamic-region-title">North America Corridor</h3>
                    </div>
                    
                    <div class="monitor-stats-grid">
                        <div class="monitor-stat">
                            <span class="stat-num counter-run" data-target="14">0</span>
                            <span class="stat-lbl">Primary Distribution Hubs</span>
                        </div>
                        <div class="monitor-stat">
                            <span class="stat-lbl">Transit Priority</span>
                            <span class="stat-txt dynamic-transit-text">Ocean Freight Priority</span>
                        </div>
                    </div>

                    <div class="telemetry-log">
                        <div class="log-row">
                            <span class="log-time">LIVE</span>
                            <span class="log-msg dynamic-log-text">Processing high-volume retail notebook allocations...</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PREMIUM ARCHITECTURAL WORLD MAP FRAME -->
            <div class="appearance-map-container">
    <div class="appearance-map-inner">
        <img src="./static/img/worldmap.png" alt="Global Supply Network Matrix" class="appearance-vector-map">
        
        <svg class="map-svg-canvas" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
    <path class="flight-route route-canada" d="M 69.5,56 Q 45,18 21,32" />

    <path class="flight-route route-usa" d="M 69.5,56 Q 44,25 20,43" />

    <path class="flight-route route-mexico" d="M 69.5,56 Q 42,38 19,53" />

    <path class="flight-route route-uk" d="M 69.5,56 Q 57,25 45.5,36" />

    <path class="flight-route route-europe" d="M 69.5,56 Q 61,28 53,37" />

    <path class="flight-route route-mena" d="M 69.5,56 Q 64.5,45 59.5,51" />

    <path class="flight-route route-west-africa" d="M 69.5,56 Q 58,45 46.5,55" />

    <path class="flight-route route-east-africa" d="M 69.5,56 Q 62,55 54.5,63" />
</svg>
<div class="geo-ripple-layer">
    <div class="hq-marker-node" style="left: 69.5%; top: 56%;">
        <span class="hq-core"></span>
    </div>

    <div class="geo-marker-node node-canada" style="left: 21%; top: 32%;">
        <span class="pulse-ring ring-1"></span><span class="pulse-ring ring-2"></span><span class="core-point"></span>
    </div>

    <div class="geo-marker-node node-usa" style="left: 20%; top: 43%;">
        <span class="pulse-ring ring-1"></span><span class="pulse-ring ring-2"></span><span class="core-point"></span>
    </div>

    <div class="geo-marker-node node-mexico" style="left: 19%; top: 53%;">
        <span class="pulse-ring ring-1"></span><span class="pulse-ring ring-2"></span><span class="core-point"></span>
    </div>

    <div class="geo-marker-node node-uk" style="left: 45.5%; top: 36%;">
        <span class="pulse-ring ring-1"></span><span class="pulse-ring ring-2"></span><span class="core-point"></span>
    </div>

    <div class="geo-marker-node node-europe" style="left: 53%; top: 37%;">
        <span class="pulse-ring ring-1"></span><span class="pulse-ring ring-2"></span><span class="core-point"></span>
    </div>

    <div class="geo-marker-node node-mena" style="left: 59.5%; top: 51%;">
        <span class="pulse-ring ring-1"></span><span class="pulse-ring ring-2"></span><span class="core-point"></span>
    </div>

    <div class="geo-marker-node node-west-africa" style="left: 46.5%; top: 55%;">
        <span class="pulse-ring ring-1"></span><span class="pulse-ring ring-2"></span><span class="core-point"></span>
    </div>

    <div class="geo-marker-node node-east-africa" style="left: 54.5%; top: 63%;">
        <span class="pulse-ring ring-1"></span><span class="pulse-ring ring-2"></span><span class="core-point"></span>
    </div>
</div>
    </div>
</div>
        </div>

        <!-- EXPO / TRADE EXHIBITIONS MODULE (RIGHT COLUMN) -->
        <div class="appearance-right">
            <div class="exhibition-portfolio-container">
                <div class="portfolio-meta-header">
                    <span class="portfolio-tag">Industry Engagement</span>
                    <h3>Global Trade Exhibitions</h3>
                    <p>Our continuous presence at elite global paper stationery conventions and industrial printing trade fairs underscores our dedication to innovation, quality compliance, and worldwide market connectivity.</p>
                </div>

                <!-- PREMIUM 3D BOOK-FLIP PHOTO PORTFOLIO SHOWCASE -->
                <div class="exhibition-gallery-stack">
                    
                    <!-- Expo Photo 1 -->
                    <div class="expo-card-3d active" style="--book-index: 1;">
                        <div class="expo-card-inner">
                            <div class="expo-image-frame">
                                <img src="./static/img/expo-fair-1.jpg" alt="Paperworld International Expo Exhibit" class="expo-img">
                                <div class="expo-img-overlay"></div>
                            </div>
                            <div class="expo-card-details">
                                <span class="expo-location">Frankfurt, Germany</span>
                                <h4>Paperworld International Expo</h4>
                                <p>Unveiling sustainable wood-free pencil architectures and high-density journals to EMEA wholesale distribution networks.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Expo Photo 2 -->
                    <div class="expo-card-3d" style="--book-index: 2;">
                        <div class="expo-card-inner">
                            <div class="expo-image-frame">
                                <img src="./static/img/expo-fair-2.jpg" alt="National Stationery Show" class="expo-img">
                                <div class="expo-img-overlay"></div>
                            </div>
                            <div class="expo-card-details">
                                <span class="expo-location">New York, USA</span>
                                <h4>National Stationery Show</h4>
                                <p>Aligning with major North American mass retailers to configure optimized paper-conversion logistics and private-label assemblies.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Expo Photo 3 -->
                    <div class="expo-card-3d" style="--book-index: 3;">
                        <div class="expo-card-inner">
                            <div class="expo-image-frame">
                                <img src="./static/img/expo-fair-3.jpg" alt="Paperworld Middle East Exhibit" class="expo-img">
                                <div class="expo-img-overlay"></div>
                            </div>
                            <div class="expo-card-details">
                                <span class="expo-location">Dubai, UAE</span>
                                <h4>Paperworld Middle East</h4>
                                <p>Showcasing high-volume academic notebooks and fast-turnaround commercial packaging solutions for regional supply frameworks.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- GALLERY CONTROLS -->
                <div class="gallery-controls">
                    <button class="gallery-nav-btn prev-btn" aria-label="Previous Exhibition Profile">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </button>
                    <div class="gallery-fraction-indicator">
                        <span class="curr-idx">1</span><span class="sep">/</span><span class="total-idx">3</span>
                    </div>
                    <button class="gallery-nav-btn next-btn" aria-label="Next Exhibition Profile">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- PREMIUM CERTIFICATIONS SECTION -->
<section class="certifications-section" aria-labelledby="certs-title">
    <div class="certs-shell">
        
        <!-- SECTION HEADER -->
        <div class="certs-header">
            <div class="section-badge">
                <span class="badge-dot"></span>
                Compliance & Quality
            </div>
            
            <h2 class="certs-title" id="certs-title">
                <span>Certified. Compliant.</span>
                <span class="color-shifting-text">Globally Trusted.</span>
            </h2>
            
            <p class="certs-subtitle">
                Our relentless commitment to premium quality metrics, ethical global workplace environments, and responsible ecological manufacturing architecture is verified through internationally benchmarked audits and continuous certifications.
            </p>
        </div>

        <!-- CERTIFICATION LUXURY BADGES GRID -->
        <div class="certs-grid">
            
            <!-- Badge 1: FSC -->
            <div class="cert-card">
                <div class="cert-shimmer"></div>
                <div class="cert-icon-frame">
                    <i class="fa-solid fa-tree"></i>
                </div>
                <div class="cert-info">
                    <h3>FSC® Certified</h3>
                    <span class="cert-status-badge">Fully Audited</span>
                    <p>Guarantees all wood and paper fiber materials are harvested responsibly from sustainably managed forestry frameworks.</p>
                </div>
            </div>

            <!-- Badge 2: Sedex -->
            <div class="cert-card">
                <div class="cert-shimmer"></div>
                <div class="cert-icon-frame">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>
                <div class="cert-info">
                    <h3>Sedex Member</h3>
                    <span class="cert-status-badge">Smeta Audited</span>
                    <p>Validates strict compliance with ethical supply chains, global labor standards, and safe health & safety operations.</p>
                </div>
            </div>

            <!-- Badge 3: Intertek WCA -->
            <div class="cert-card">
                <div class="cert-shimmer"></div>
                <div class="cert-icon-frame">
                    <i class="fa-solid fa-building-shield"></i>
                </div>
                <div class="cert-info">
                    <h3>Intertek WCA</h3>
                    <span class="cert-status-badge">Workplace Conditions</span>
                    <p>Achieving top tier operational scores for real-world workplace systems, wages, and corporate social accountability benchmarks.</p>
                </div>
            </div>

            <!-- Badge 4: Intertek SQP -->
            <div class="cert-card">
                <div class="cert-shimmer"></div>
                <div class="cert-icon-frame">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="cert-info">
                    <h3>Intertek SQP</h3>
                    <span class="cert-status-badge">Supplier Quality Program</span>
                    <p>Verifies rigorous product quality assurance, continuous process optimization, and industrial defect prevention policies.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    /* COMPLIANT LUXURY PALETTE VARIABLES */
    .certifications-section {
        --brand-primary: #0F6B4B; 
        --brand-accent: #D4AF37; 
        --brand-dark: #073525;
        --text-primary: #111612; 
        --text-muted: #55605a;
        --bg-main: #FFFFFF;
        --bg-tint: #f4f8f5;
        --shadow-elegant: 0 25px 50px -12px rgba(15, 107, 75, 0.04), 0 10px 20px -10px rgba(0, 0, 0, 0.02);
        --border-subtle: rgba(15, 107, 75, 0.08);

        padding: clamp(80px, 10vw, 120px) 20px;
        background-color: var(--bg-tint);
        position: relative;
        overflow: hidden;
    }

    /* Subtle Technical Grid Background Overlay Mesh */
    .certifications-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(var(--border-subtle) 1px, transparent 1px),
            linear-gradient(90deg, var(--border-subtle) 1px, transparent 1px);
        background-size: 80px 80px;
        mask-image: radial-gradient(circle at 50% 50%, black 10%, transparent 80%);
        opacity: 0.4;
        z-index: 1;
    }

    .certs-shell {
        width: min(1240px, 100%);
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .certs-header {
        text-align: center;
        max-width: 760px;
        margin: 0 auto 56px;
    }

    .certs-title {
        font-size: clamp(34px, 3.8vw, 48px);
        font-weight: 900;
        line-height: 1.15;
        letter-spacing: -0.03em;
        color: var(--text-primary);
        margin-bottom: 20px;
    }

    .certs-title span {
        display: block;
    }

    .certs-subtitle {
        color: var(--text-muted);
        font-size: clamp(15px, 1.1vw, 17px);
        line-height: 1.65;
        margin: 0;
    }

    /* BADGES MATRIX GRID DESIGN */
    .certs-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 20px;
        width: 100%;
    }

    .cert-card {
        background: var(--bg-main);
        border: 1px solid var(--border-subtle);
        border-radius: 20px;
        padding: 32px 24px;
        position: relative;
        overflow: hidden;
        box-shadow: var(--shadow-elegant);
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.4s ease, box-shadow 0.4s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .cert-icon-frame {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        background: rgba(15, 107, 75, 0.05);
        color: var(--brand-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        margin-bottom: 20px;
        transition: all 0.4s ease;
        border: 1px solid rgba(15, 107, 75, 0.05);
    }

    .cert-info h3 {
        font-size: 18px;
        font-weight: 800;
        color: var(--brand-dark);
        margin: 0 0 8px 0;
        letter-spacing: -0.01em;
    }

    .cert-status-badge {
        display: inline-block;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        color: var(--brand-accent);
        background: rgba(212, 175, 55, 0.08);
        padding: 4px 12px;
        border-radius: 100px;
        margin-bottom: 14px;
        border: 1px solid rgba(212, 175, 55, 0.15);
    }

    .cert-info p {
        font-size: 13px;
        line-height: 1.6;
        color: var(--text-muted);
        margin: 0;
    }

    /* PREMIUM METALLIC CARD SHIMMER ANMTION */
    .cert-shimmer {
        position: absolute;
        top: 0;
        left: -150%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(214, 175, 55, 0.06),
            transparent
        );
        transform: skewX(-20deg);
        transition: none;
    }

    /* CARD HOVER ENHANCEMENTS */
    .cert-card:hover {
        transform: translateY(-6px);
        border-color: rgba(214, 175, 55, 0.3); /* Shifts to luxury gold border hue on hover */
        box-shadow: 0 30px 60px -15px rgba(7, 53, 37, 0.08), 0 10px 20px -10px rgba(0, 0, 0, 0.02);
    }

    .cert-card:hover .cert-shimmer {
        left: 150%;
        transition: left 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .cert-card:hover .cert-icon-frame {
        background: var(--brand-primary);
        color: #ffffff;
        transform: scale(1.05) rotate(4deg);
        box-shadow: 0 12px 24px -6px rgba(15, 107, 75, 0.3);
    }

    /* RESPONSIVE LAYOUT TRANSLATIONS */
    @media (max-width: 1024px) {
        .certs-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }
    }

    @media (max-width: 640px) {
        .certifications-section {
            padding-left: 16px;
            padding-right: 16px;
        }

        .certs-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .cert-card {
            padding: 28px 20px;
        }
    }
    /* BADGES MATRIX GRID DESIGN */
.certs-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 24px;
    width: 100%;
    perspective: 1200px; /* 3D गहराई (Depth) देने के लिए ज़रूरी व्यू-कॉन्टेक्स्ट */
}

.cert-card {
    background: var(--bg-main);
    border: 1px solid var(--border-subtle);
    border-radius: 20px;
    padding: 40px 24px;
    position: relative;
    overflow: hidden;
    box-shadow: var(--shadow-elegant);
    
    /* स्मूथ 3D ट्रांसफॉर्मेशन इंजन */
    transform-style: preserve-3d;
    transform: translateZ(0);
    transition: 
        transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), 
        border-color 0.4s ease, 
        box-shadow 0.5s ease;
        
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    cursor: pointer;
}

/* कार्ड के अंदर के एलिमेंट्स को 3D स्पेस में ऊपर उठाने के लिए */
.cert-icon-frame,
.cert-info h3,
.cert-status-badge,
.cert-info p {
    transform: translateZ(30px); /* यह एलिमेंट्स को बैकग्राउंड से 30px बाहर हवा में दिखाएगा */
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}

.cert-icon-frame {
    width: 68px;
    height: 68px;
    border-radius: 18px;
    background: rgba(15, 107, 75, 0.04);
    color: var(--brand-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    margin-bottom: 24px;
    border: 1px solid rgba(15, 107, 75, 0.06);
}

.cert-info h3 {
    font-size: 19px;
    font-weight: 800;
    color: var(--brand-dark);
    margin: 0 0 10px 0;
    letter-spacing: -0.01em;
}

.cert-status-badge {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--brand-accent);
    background: rgba(212, 175, 55, 0.06);
    padding: 5px 14px;
    border-radius: 100px;
    margin-bottom: 16px;
    border: 1px solid rgba(212, 175, 55, 0.12);
    transition: all 0.4s ease;
}

.cert-info p {
    font-size: 13.5px;
    line-height: 1.6;
    color: var(--text-muted);
    margin: 0;
}

/* प्रीमियम मैटेलिक सिल्क शिमर इफ़ेक्ट */
.cert-shimmer {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        125deg,
        transparent 30%,
        rgba(214, 175, 55, 0.08) 45%,
        rgba(255, 255, 255, 0.3) 50%,
        rgba(214, 175, 55, 0.08) 55%,
        transparent 70__%
    );
    background-size: 200% 200%;
    background-position: 200% 0;
    transition: background-position 0.8s ease;
    z-index: 1;
    pointer-events: none;
}

/* 🔥 3D HOVER EFFECT TRIPPERS */
.cert-card:hover , .cert-card.auto-hover {
    /* कार्ड हल्का सा स्केल होगा और 3D स्पेस में यूज़र की तरफ झुकेगा */
    transform: translateY(-10px) rotateX(4deg) rotateY(-2deg) scale(1.02);
    border-color: rgba(214, 175, 55, 0.35); 
    box-shadow: 
        0 40px 80px -20px rgba(7, 53, 37, 0.12), 
        0 15px 30px -15px rgba(214, 175, 55, 0.05);
}

/* होवर होने पर अंदर के एलिमेंट्स और ज़्यादा बाहर की तरफ पॉप-आउट होंगे */
.cert-card:hover , .cert-card.auto-hover  .cert-icon-frame {
    background: var(--brand-primary);
    color: #ffffff;
    transform: translateZ(50px) scale(1.08) rotate(5deg);
    box-shadow: 0 15px 30px -8px rgba(15, 107, 75, 0.35);
}

.cert-card:hover , .cert-card.auto-hover  .cert-status-badge {
    background: var(--brand-accent);
    color: var(--brand-dark);
    border-color: var(--brand-accent);
    transform: translateZ(45px);
}

.cert-card:hover .cert-info h3 { transform: translateZ(45px); }
.cert-card:hover .cert-info p { transform: translateZ(40px); }

/* लाइट रिफ्लेक्शन को एक्टिवेट करना */
.cert-card:hover ,.cert-card.auto-hover  .cert-shimmer {
    background-position: -50% 0;
    transition: background-position 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

/* RESPONSIVE LAYOUT TRANSLATIONS */
@media (max-width: 1024px) {
    .certs-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
    }
    .cert-card:hover {
        transform: translateY(-6px) scale(1.01); /* मोबाइल/टैबलेट पर मोशन सिकनेस रोकने के लिए 3D रोटेशन ऑफ */
    }
}

@media (max-width: 640px) {
    .certs-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
}
</style>
<script>
    
</script>