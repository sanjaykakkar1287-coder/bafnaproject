
    (function($) {
        if (!$) {
            return;
        }

        function initHomeHero() {
            var $hero = $(".hero-section").last();
            var $tooltipContainer = $hero.find(".tooltip-container");
            var countries = [{
                    name: "Canada",
                    left: "22%",
                    top: "31%"
                },
                {
                    name: "USA",
                    left: "25%",
                    top: "40%"
                },
                {
                    name: "Mexico",
                    left: "26%",
                    top: "48%"
                },
                {
                    name: "UK",
                    left: "46%",
                    top: "33%"
                },
                {
                    name: "Europe",
                    left: "52%",
                    top: "37%"
                },
                {
                    name: "Middle East",
                    left: "58%",
                    top: "46%"
                },
                {
                    name: "West Africa",
                    left: "46%",
                    top: "47%"
                },
                {
                    name: "East Africa",
                    left: "54%",
                    top: "58%"
                },
                {
                    name: "India",
                    left: "74%",
                    top: "58%"
                }
            ];

            $tooltipContainer.empty();

            $.each(countries, function(i, item) {
                $tooltipContainer.append(
                    '<div class="map-tooltip" style="left:' + item.left + ';top:' + item.top + ';">' +
                    '<div class="tooltip-box">' + item.name + '</div>' +
                    '<div class="pulse"></div>' +
                    '</div>'
                );
            });

            // Counter animation on scroll
            var $counterSection = $hero.find(".hero-counter");
            if ($counterSection.length > 0) {
                var observer = new IntersectionObserver(function(entries) {
                    if (entries[0].isIntersecting) {
                        $hero.find(".count-number").each(function() {
                            var $this = $(this);
                            var target = parseInt($this.data("count"), 10) || 0;

                            if ($this.text() === '0') {
                                $({
                                    Counter: 0
                                }).animate({
                                    Counter: target
                                }, {
                                    duration: 2200,
                                    easing: "swing",
                                    step: function() {
                                        $this.text(Math.ceil(this.Counter).toLocaleString("en-IN"));
                                    },
                                    complete: function() {
                                        $this.text(target.toLocaleString("en-IN"));
                                    }
                                });
                            }
                        });
                        observer.disconnect();
                    }
                }, {
                    threshold: 0.1
                });

                observer.observe($counterSection[0]);
            }

            // Map tooltip animation loop
            var $pins = $hero.find(".map-tooltip");
            var current = 0;

            clearTimeout(window.bafnaHeroPinTimer);

            function showTooltip() {
                $pins.stop(true, true).hide();

                var $pin = $($pins[current]);
                $pin.css({
                    transform: "translate(-50%, -50%) scale(.8)",
                    opacity: 0,
                    display: "block"
                }).animate({
                    opacity: 1
                }, 240);

                setTimeout(function() {
                    $pin.css({
                        transform: "translate(-50%, -50%) scale(1)"
                    });
                }, 20);

                window.bafnaHeroPinTimer = setTimeout(function() {
                    $pin.fadeOut(260);
                    current = (current + 1) % $pins.length;
                    window.bafnaHeroPinTimer = setTimeout(showTooltip, 360);
                }, 1350);
            }

            if ($pins.length) {
                showTooltip();
            }
        }

        $(initHomeHero);
    })(window.jQuery);

    
    (function ($) {
        if (!$) { return; }

        function initCategorySwitching() {
            var $section = $(".categories-section").last();
            var $tabs = $section.find(".market-tab");
            var $indicator = $section.find(".tab-indicator-pill");
            var $gridContainer = $section.find(".categories-grid-container");
            var autoTimer = null;

            function updatePillWidth() {
                var $activeTab = $section.find(".market-tab.active");
                if ($activeTab.length && $indicator.is(":visible")) {
                    $indicator.css({
                        width: $activeTab.outerWidth() + "px",
                        left: $activeTab.position().left + "px"
                    });
                }
            }

            function updateContainerHeight() {
                var $activeGrid = $section.find(".products-grid.active");
                if ($activeGrid.length) {
                    $gridContainer.css('height', $activeGrid.outerHeight() + 'px');
                }
            }

            // Central state trigger to handle layout mutations cleanly
            function activateTab($targetTab) {
                if (!$targetTab.length || $targetTab.hasClass("active")) { return; }

                var targetId = $targetTab.data("target");
                var $targetGrid = $("#" + targetId);

                // Instantly strip active animation rules before toggling to guarantee clean restart execution
                $section.find(".products-grid").removeClass("active").css({ opacity: 0, pointerEvents: 'none' });
                $tabs.removeClass("active").attr("aria-selected", "false");

                $targetTab.addClass("active").attr("aria-selected", "true");
                updatePillWidth();

                // Force layout reflow execution to clean out DOM animation caching
                $targetGrid.each(function() { void this.offsetHeight; }); // Reflow
                
                $targetGrid.addClass("active").css({ opacity: 1, pointerEvents: 'auto' });
                updateContainerHeight(); // Set the new height
            }

            // Start Auto Loop configuration (Triggers every 2000 milliseconds)
            function startAutoCycle() { 
                autoTimer = setInterval(function () {
                    var $activeTab = $section.find(".market-tab.active");
                    var $nextTab = $activeTab.next(".market-tab");
                    
                    // Loop back round to initial element if boundaries are met
                    if (!$nextTab.length) {
                        $nextTab = $tabs.first();
                    }
                    activateTab($nextTab);
                }, 5000);
            }

            function stopAutoCycle() {
                if (autoTimer) {
                    clearInterval(autoTimer);
                    autoTimer = null;
                }
            }

            // Setup listeners & layout setups
            updatePillWidth();
            updateContainerHeight(); // Set initial height
            $(window).on("resize", function() { updatePillWidth(); updateContainerHeight(); });
            startAutoCycle();

            $tabs.on("click", function (e) {
                e.preventDefault();
                stopAutoCycle(); // Forever terminate automatic loop sequence upon direct user intentional engagement
                activateTab($(this));
            });
        }

        $(initCategorySwitching);
    })(window.jQuery);
