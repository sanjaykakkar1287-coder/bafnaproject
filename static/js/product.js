
function initProductPage() {
(function ($) {
    if (!$) { return; }

    function initShowroomCarousel() {
        var $section = $(".products-page-container").last();

        if (!$section.length) {
            return;
        }

        /* ==================== RUNTIME 1: CAROUSEL DASHBOARD LOOP ==================== */
        var $slides = $section.find(".showroom-slide");
        var totalSlides = $slides.length;
        var activeIdx = 0;
        var autoCycleTimer = null;
        var cycleSpeed = 2500;

        if (window.bafnaShowroomTimer) {
            clearInterval(window.bafnaShowroomTimer);
        }

        function renderActiveSlide(targetIdx) {
            activeIdx = targetIdx;
            $slides.removeClass("active");
            var $activeSlide = $slides.eq(activeIdx);
            $activeSlide.addClass("active");

            var padStr = (activeIdx + 1) < 10 ? "0" + (activeIdx + 1) : (activeIdx + 1);
            $section.find(".curr-slide").text(padStr);

            var spec1 = $activeSlide.data("spec1");
            var spec2 = $activeSlide.data("spec2");
            $section.find(".dynamic-spec-1").hide().text(spec1).fadeIn(240);
            $section.find(".dynamic-spec-2").hide().text(spec2).fadeIn(240);

            var $progressBar = $section.find(".carousel-progress-fill");
            $progressBar.stop().css("width", "0%").animate({ width: "100%" }, cycleSpeed, "linear");
        }

        function triggerNextSlide() { renderActiveSlide((activeIdx + 1) % totalSlides); }
        function startTimer() {
            if (window.bafnaShowroomTimer) {
                clearInterval(window.bafnaShowroomTimer);
            }
            renderActiveSlide(activeIdx);
            window.bafnaShowroomTimer = setInterval(triggerNextSlide, cycleSpeed);
        }
        function stopTimer() { if (window.bafnaShowroomTimer) { clearInterval(window.bafnaShowroomTimer); window.bafnaShowroomTimer = null; } $section.find(".carousel-progress-fill").stop().css("width", "0%"); }

        var padTotal = totalSlides < 10 ? "0" + totalSlides : totalSlides;
        $section.find(".total-slides").text(padTotal);
        startTimer();

        $section.find(".next-slide-btn").on("click", function (e) { e.preventDefault(); stopTimer(); renderActiveSlide((activeIdx + 1) % totalSlides); });
        $section.find(".prev-slide-btn").on("click", function (e) { e.preventDefault(); stopTimer(); renderActiveSlide((activeIdx - 1 + totalSlides) % totalSlides); });
        $section.find(".showroom-carousel-wrapper").on("mouseenter", stopTimer).on("mouseleave", function() { if (!window.bafnaShowroomTimer) startTimer(); });


        /* ==================== RUNTIME 2: DOMESTIC NO-VIBRATE AUTO TICKER ==================== */
        var $domCards = $section.find(".unfold-card-3d");
        var domTotal = $domCards.length;
        var domCurrentIdx = 0;

        if (window.bafnaDomFlipTimer) {
            clearInterval(window.bafnaDomFlipTimer);
        }

        function cycleDomesticFlip() {
            $domCards.removeClass("dom-highlight-active");
            $domCards.eq(domCurrentIdx).addClass("dom-highlight-active");
            domCurrentIdx = (domCurrentIdx + 1) % domTotal;
        }

        function startDomTimer() {
            if (window.bafnaDomFlipTimer) {
                clearInterval(window.bafnaDomFlipTimer);
            }
            window.bafnaDomFlipTimer = setInterval(cycleDomesticFlip, 2000);
        }

        function stopDomTimer() {
            if (window.bafnaDomFlipTimer) {
                clearInterval(window.bafnaDomFlipTimer);
                window.bafnaDomFlipTimer = null;
                $domCards.removeClass("dom-highlight-active");
            }
        }

        if (domTotal > 0) {
            cycleDomesticFlip();
            startDomTimer();

            // Safe mouse filters ensure clean loops execution resets cleanly
            $domCards.off("mouseenter mouseleave").on("mouseenter", function() {
                stopDomTimer();
                $(this).addClass("dom-highlight-active");
            }).on("mouseleave", function() {
                $(this).removeClass("dom-highlight-active");
                domCurrentIdx = $domCards.index(this);
                startDomTimer();
            });
        }
    }

    // Expose the function to the global scope so it can be called from other scripts
    window.initShowroomCarousel = initShowroomCarousel;
})(window.jQuery);
}