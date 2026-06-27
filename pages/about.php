<section class="about-page-hero" aria-labelledby="about-hero-title">
    <div class="about-page-shell">
        
        <div class="about-intro-grid">
            <div class="intro-left">
                <div class="section-badge">
                    <span class="badge-dot"></span>
                    Our Legacy Since 1960s
                </div>
                <h1 class="about-hero-title" id="about-hero-title">
                    <span>Building Trust Through</span>
                    <span class="color-shifting-text">Quality, Innovation & Responsibility.</span>
                </h1>
                <p class="lead-text">
                    Established in the paper industry in the 1960s, P P Bafna Ventures Pvt. Ltd. has evolved from a traditional paper house into a state-of-the-art global manufacturer and exporter of stationery architectures.
                </p>
            </div>
            <div class="intro-right">
                <p class="body-text">
                    With decades of deep vertical experience and modern high-volume manufacturing infrastructure across India, we continue to serve enterprise distributors, mass retailers, and educational institutions globally. Our commitment is anchored on zero-defect quality, structural innovation, and customer-focused supply chain solutions.
                </p>
                <div class="legacy-years-badge">
                    <span class="years-num">60+</span>
                    <span class="years-lbl">Years of Paper Industrial Excellence</span>
                </div>
            </div>
        </div>

        <hr class="luxury-divider">

        <div class="mission-vision-container">
            <div class="mv-card mission-card">
                <div class="mv-shimmer"></div>
                <div class="mv-icon"><i class="fa-solid fa-bullseye"></i></div>
                <h2>Our Mission</h2>
                <p>To engineer and deliver flawless stationery and paper products at global scale, while cultivating long-term cross-border partnerships through absolute delivery reliability, continuous material innovation, and service excellence.</p>
            </div>

            <div class="mv-card vision-card">
                <div class="mv-shimmer"></div>
                <div class="mv-icon"><i class="fa-solid fa-eye"></i></div>
                <h2>Our Vision</h2>
                <p>To stand as the world's preferred multi-category manufacturing partner, globally recognized for sustainable forestry integration, carbon-conscious production frameworks, and elite customer value creation.</p>
            </div>
        </div>

        <hr class="luxury-divider">

        <div class="team-section-wrapper">
            <div class="center-headers">
                <div class="section-badge">
                    <span class="badge-dot"></span>
                    Human Capital
                </div>
                <h2 class="section-main-title">Powered by Experience.</h2>
                <p class="section-subtitle">Our global workforce across specialized vertices operates in absolute synergy to execute complex, high-volume orders with institutional precision.</p>
            </div>

            <div class="team-grid">
                <div class="team-card">
                    <div class="team-icon-box"><i class="fa-solid fa-gears"></i></div>
                    <h3>Manufacturing & Tech</h3>
                    <p>Engineers driving our high-speed automated paper conversion and wood-free pencil production matrices.</p>
                </div>
                <div class="team-card">
                    <div class="team-icon-box"><i class="fa-solid fa-clipboard-check"></i></div>
                    <h3>Quality Assurance</h3>
                    <p>Compliance specialists enforcing strict inspection protocols matching global international export standards.</p>
                </div>
                <div class="team-card">
                    <div class="team-icon-box"><i class="fa-solid fa-ship"></i></div>
                    <h3>Logistics & Exports</h3>
                    <p>Global supply chain architects delivering seamless cross-border freight routing and custom clearance execution.</p>
                </div>
                <div class="team-card">
                    <div class="team-icon-box"><i class="fa-solid fa-headset"></i></div>
                    <h3>Customer Support</h3>
                    <p>Dedicated accounts relationship managers anchoring 24/7 communications for private label distributors.</p>
                </div>
            </div>
        </div>

        <hr class="luxury-divider">

        <div class="cert-promo-banner">
            <div class="banner-inner">
                <div class="banner-text">
                    <div class="section-badge inverted">
                        <span class="badge-dot"></span>
                        Global Compliance
                    </div>
                    <h2>Certified. Compliant. Globally Trusted.</h2>
                    <p>Delivering trusted quality through responsible manufacturing practices and internationally audited, zero-defect facilities.</p>
                </div>
                <div class="banner-action">
                    <a href="#certifications" class="hero-btn hero-btn-outline golden-btn">
                        <i class="fa-solid fa-file-shield"></i>
                        <span>View Audit Credentials</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    /* DESIGN SYSTEM COMPLIANT LUXURY VARIABLES */
    .about-page-hero {
        --brand-primary: #0F6B4B; 
        --brand-accent: #D4AF37; 
        --brand-dark: #073525;
        --text-primary: #111612; 
        --text-muted: #55605a;
        --bg-main: #FFFFFF;
        --bg-tint: #f4f8f5;
        --shadow-elegant: 0 30px 60px -15px rgba(15, 107, 75, 0.05), 0 10px 30px -10px rgba(0, 0, 0, 0.02);
        --border-subtle: rgba(15, 107, 75, 0.08);

        padding: clamp(60px, 8vw, 120px) 20px;
        background-color: var(--bg-main);
        position: relative;
        overflow: hidden;
    }

    /* Fine Line Architecture Matrix Grid Overlay */
    .about-page-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(var(--border-subtle) 1px, transparent 1px),
            linear-gradient(90deg, var(--border-subtle) 1px, transparent 1px);
        background-size: 80px 80px;
        mask-image: radial-gradient(circle at 50% 30__, black 40%, transparent 80%);
        opacity: 0.6;
        z-index: 1;
    }

    .about-page-shell {
        width: min(1240px, 100%);
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* SECTION 1: INTRO GRID TYPOGRAPHY */
    .about-intro-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: clamp(40px, 6vw, 80px);
        align-items: flex-start;
        margin-bottom: 56px;
    }

    .about-hero-title {
        font-size: clamp(36px, 4.2vw, 56px);
        font-weight: 900;
        line-height: 1.1;
        letter-spacing: -0.03em;
        color: var(--text-primary);
        margin-bottom: 24px;
    }
    .about-hero-title span { display: block; }

    .lead-text {
        font-size: clamp(17px, 1.2vw, 20px);
        line-weight: 1.6;
        color: var(--brand-dark);
        font-weight: 600;
    }

    .body-text {
        font-size: clamp(15px, 1.1vw, 17px);
        line-height: 1.65;
        color: var(--text-muted);
        margin-bottom: 28px;
    }

    .legacy-years-badge {
        background: var(--bg-tint);
        border: 1px solid var(--border-subtle);
        padding: 16px 24px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        gap: 16px;
        box-shadow: var(--shadow-elegant);
    }

    .years-num {
        font-size: 38px;
        font-weight: 900;
        color: var(--brand-primary);
        line-height: 1;
    }
    .years-lbl {
        font-size: 13px;
        font-weight: 700;
        color: var(--brand-dark);
        line-height: 1.3;
    }

    /* PREMIUM DIVIDER LINE */
    .luxury-divider {
        border: none;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--border-subtle) 20%, var(--border-subtle) 80%, transparent);
        margin: clamp(48px, 6vw, 72px) 0;
    }

    /* SECTION 2: MISSION & VISION STRIPS */
    .mission-vision-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        perspective: 1000px;
    }

    .mv-card {
        background: #ffffff;
        border: 1px solid var(--border-subtle);
        border-radius: 24px;
        padding: clamp(32px, 4vw, 48px);
        position: relative;
        overflow: hidden;
        box-shadow: var(--shadow-elegant);
        transform-style: preserve-3d;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.4s ease;
    }

    .mv-icon {
        width: 56px;
        height: 56px;
        background: rgba(15, 107, 75, 0.04);
        color: var(--brand-primary);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 24px;
        transition: all 0.4s ease;
        transform: translateZ(20px);
    }

    .mv-card h2 {
        font-size: 24px;
        font-weight: 800;
        color: var(--brand-dark);
        margin: 0 0 14px 0;
        letter-spacing: -0.02em;
        transform: translateZ(25px);
    }

    .mv-card p {
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--text-muted);
        margin: 0;
        transform: translateZ(20px);
    }

    /* 3D Dynamic Hover States for Mission/Vision */
    .mv-card:hover {
        transform: translateY(-8px) rotateX(2deg) scale(1.01);
        border-color: rgba(214, 175, 55, 0.25);
    }
    .mv-card:hover .mv-icon {
        background: var(--brand-primary);
        color: #ffffff;
        transform: translateZ(40px) scale(1.05);
    }

    /* SECTION 3: TEAM MATRIX ARCHITECTURE */
    .center-headers {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 48px;
    }
    .section-main-title {
        font-size: 32px;
        font-weight: 800;
        color: var(--brand-dark);
        margin-bottom: 12px;
        letter-spacing: -0.02em;
    }
    .section-subtitle {
        font-size: 15px;
        color: var(--text-muted);
        line-height: 1.6;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 20px;
    }

    .team-card {
        background: var(--bg-tint);
        border: 1px solid var(--border-subtle);
        border-radius: 16px;
        padding: 28px 20px;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .team-icon-box {
        font-size: 22px;
        color: var(--brand-primary);
        margin-bottom: 16px;
        transition: transform 0.4s ease;
    }

    .team-card h3 {
        font-size: 16px;
        font-weight: 700;
        color: var(--brand-dark);
        margin: 0 0 8px 0;
    }

    .team-card p {
        font-size: 13px;
        line-height: 1.55;
        color: var(--text-muted);
        margin: 0;
    }

    .team-card:hover {
        background: #ffffff;
        border-color: rgba(15, 107, 75, 0.18);
        transform: translateY(-5px);
        box-shadow: var(--shadow-elegant);
    }
    .team-card:hover .team-icon-box {
        transform: scale(1.15) rotate(8deg);
        color: var(--brand-accent);
    }

    /* SECTION 4: CERTIFICATIONS BANNER BLOCK */
    .cert-promo-banner {
        background: linear-gradient(135deg, var(--brand-dark), #031c13);
        border-radius: 24px;
        padding: clamp(32px, 5vw, 56px);
        color: #ffffff;
        box-shadow: 0 30px 60px -15px rgba(7, 53, 37, 0.3);
        position: relative;
        overflow: hidden;
    }

    .cert-promo-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 80% 50%, rgba(214, 175, 55, 0.15), transparent 60%);
    }

    .banner-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        position: relative;
        z-index: 2;
    }

    .banner-text { max-width: 620px; }
    .banner-text h2 {
        font-size: clamp(26px, 3vw, 36px);
        font-weight: 800;
        margin: 12px 0;
        letter-spacing: -0.02em;
    }
    .banner-text p {
        font-size: 15px;
        line-height: 1.6;
        color: rgba(255,255,255,0.75);
        margin: 0;
    }

    .golden-btn {
        border-color: rgba(214, 175, 55, 0.4) !important;
        background: rgba(214, 175, 55, 0.05) !important;
        color: var(--brand-accent) !important;
    }
    .golden-btn:hover {
        background: var(--brand-accent) !important;
        color: var(--brand-dark) !important;
    }

    /* RESPONSIVE CONTROL MEDIA BREAKPOINTS */
    @media (max-width: 992px) {
        .about-intro-grid { grid-template-columns: 1fr; gap: 32px; }
        .mission-vision-container { grid-template-columns: 1fr; gap: 20px; }
        .team-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .banner-inner { flex-direction: column; text-align: center; gap: 28px; }
        .banner-text { max-width: 100%; }
    }

    @media (max-width: 640px) {
        .about-page-hero { padding-left: 16px; padding-right: 16px; }
        .team-grid { grid-template-columns: 1fr; gap: 16px; }
        .cert-promo-banner { padding: 32px 20px; }
    }
</style>

<script>
    (function ($) {
        if (!$) { return; }

        function initAboutPageInteractions() {
            var $section = $(".about-page-hero").last();
            var $mvCards = $section.find(".mv-card");
            var $teamCards = $section.find(".team-card");

            // Automatic sequential highlight loop for Team Cards (every 2.5 seconds)
            var currentTeamIdx = 0;
            var teamLoopTimer = null;

            function cycleTeamHighlight() {
                $teamCards.removeClass("auto-hover-style").css({ "background": "", "border-color": "" });
                
                var $currCard = $teamCards.eq(currentTeamIdx);
                // Dynamically simulate premium hover styles cleanly
                $currCard.css({
                    "background": "#ffffff",
                    "border-color": "rgba(15, 107, 75, 0.18)",
                    "transform": "translateY(-3px)"
                });

                currentTeamIdx = (currentTeamIdx + 1) % $teamCards.length;
            }

            function startTeamTimer() {
                teamLoopTimer = setInterval(cycleTeamHighlight, 2500);
            }

            function stopTeamTimer() {
                if (teamLoopTimer) {
                    clearInterval(teamLoopTimer);
                    teamLoopTimer = null;
                    $teamCards.css({ "transform": "", "background": "", "border-color": "" });
                }
            }

            if ($teamCards.length) {
                cycleTeamHighlight();
                startTeamTimer();

                // User mouse safety intercept loops
                $teamCards.on("mouseenter", function() {
                    stopTeamTimer();
                }).on("mouseleave", function() {
                    startTeamTimer();
                });
            }
        }

        $(initAboutPageInteractions);
    })(window.jQuery);
</script>