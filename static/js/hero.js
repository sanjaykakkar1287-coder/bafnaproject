
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
                    left: "65%",
                    top: "45%"
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
                // First, ensure any existing timer is cleared before starting a new one.
                if (autoTimer) clearInterval(autoTimer);

                autoTimer = setInterval(function () {
                    var $activeTab = $section.find(".market-tab.active");
                    var $nextTab = $activeTab.next(".market-tab");
                    
                    // Loop back round to initial element if boundaries are met
                    if ($nextTab.length === 0) {
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
                stopAutoCycle(); // Stop the automatic switching
                activateTab($(this));
                // Do not restart here; wait for mouseleave.
            });

            // Pause auto-cycle on hover to allow user interaction
            $section.on("mouseenter", function() {
                stopAutoCycle();
            });
 
            // Restart the auto-cycle when the user's mouse leaves the section
            $section.on("mouseleave", function () {
                startAutoCycle(); // Simply restart the timer.
            });
        }

        $(initCategorySwitching);
    })(window.jQuery);



    //map flight route flip card and global footprint//

    
    (function ($) {
        if (!$) { return; }

        function initIntegratedCommandHub() {
            var $section = $(".appearance-section").last();
            var $pills = $section.find(".region-pill");
            var $cards = $section.find(".expo-card-3d");
            var $nodes = $section.find(".geo-marker-node");
            var $routes = $section.find(".flight-route");
            
            var totalItems = $cards.length;
            var currentIdx = 0;
            var loopInterval = null;

            // Database matrix for live JS telemetry switching
            var regionalDataset = [
                {
                    title: "North America Corridor",
                    hubs: 14,
                    transit: "Ocean Freight Priority",
                    log: "Processing high-volume private label notebook configurations for US distributors."
                },
                {
                    title: "EMEA Distribution Channels",
                    hubs: 19,
                    transit: "Intermodal Containerized",
                    log: "Sustainable wood-free pencil architectures routed to European wholesale networks."
                },
                {
                    title: "MENA Strategic Markets",
                    hubs: 11,
                    transit: "Direct Land & Sea Route",
                    log: "High-volume academic notebooks dispatched for regional supply frameworks in the Middle East."
                },
                {
                    title: "India Markets",
                    hubs: 56,
                    transit: "Direct Land & Air Route",
                    log: "Custom academic exercise book production runs successfully routed to GCC ports."
                }
            ];
            
            // Map regions to the actual map elements (nodes and routes)
            // This allows multiple map items to be activated by a single pill/card.
            var regionMap = [
                [0, 1, 2], // N. America: Canada, USA, Mexico
                [3, 4],    // EMEA: UK, Europe
                [5, 6, 7], // MENA: MENA, West Africa, East Africa
                []         // India: No remote nodes, just the HQ. We can add one if needed.
            ];


            function runNumericCounter($element, value) {
                $({ countVal: 0 }).animate({ countVal: value }, {
                    duration: 700,
                    easing: "swing",
                    step: function () {
                        $element.text(Math.ceil(this.countVal));
                    },
                    complete: function () {
                        $element.text(value);
                    }
                });
            }

            function syncGlobalDashboard(targetIndex) {
                currentIdx = targetIndex;
                var galleryIndex = targetIndex % totalItems; // Loop gallery if more regions than cards

                // 1. Toggle UI Navigation Buttons / Selection Pills
                $pills.removeClass("active").eq(targetIndex).addClass("active");

                // 2. Animate and re-compile Right 3D Photo Book Stack
                $cards.removeClass("active flipped queued"); // Reset all cards
                $cards.each(function(index) {
                    if (index === galleryIndex) $(this).addClass("active");
                    else if (index < galleryIndex) $(this).addClass("flipped");
                    else if (index === galleryIndex + 1) $(this).addClass("queued");
                });

                // 3. Highlight Map Nodes & Animate Flight Routes based on the new mapping
                $nodes.removeClass("active");
                $routes.removeClass("active");
                var elementsToShow = regionMap[targetIndex] || [];
                elementsToShow.forEach(function(i) {
                    $nodes.eq(i).addClass("active");
                    $routes.eq(i).addClass("active");
                });

                // 4. Update Left Text Dashboard & Run Numeric Counters via JS
                var data = regionalDataset[currentIdx];
                $section.find(".dynamic-region-title").text(data.title);
                $section.find(".dynamic-transit-text").text(data.transit);
                $section.find(".dynamic-log-text").hide().text(data.log).fadeIn(300);
                
                var $counterEl = $section.find(".counter-run");
                runNumericCounter($counterEl, data.hubs);

                // Update controls markers
                $section.find(".curr-idx").text(galleryIndex + 1);
            }

            function nextRotation() {
                var nextIdx = (currentIdx + 1) % $pills.length; // Cycle through all 4 regions
                syncGlobalDashboard(nextIdx);
            }

            function startTimer() {
                loopInterval = setInterval(nextRotation, 5000); // Increased interval for better viewing
            }

            function stopTimer() {
                if (loopInterval) {
                    clearInterval(loopInterval);
                    loopInterval = null;
                }
            }

            // Bind Event Listeners
            // The number of pills/regions might be different from the number of expo cards.
            // We should use the number of regions for the loop.
            $section.find(".total-idx").text(totalItems); // This is for the gallery, which is correct.
            syncGlobalDashboard(0);
            startTimer();

            // Intercept direct pill choices
            $pills.on("click", function (e) {
                e.preventDefault();
                stopTimer();
                var newIndex = $(this).data("index");
                // The gallery might have a different number of items than regions.
                // We'll sync the dashboard but let the gallery be controlled separately.
                // Or, we can link them. Let's link them for now.
                syncGlobalDashboard(newIndex);
            });

            // Intercept dashboard next/prev triggers
            $section.find(".next-btn").on("click", function(e) {
                e.preventDefault();
                stopTimer();
                var next = (currentIdx + 1) % $pills.length;
                var next = (currentIdx + 1) % regionalDataset.length;
                syncGlobalDashboard(next);
            });

            $section.find(".prev-btn").on("click", function(e) {
                e.preventDefault();
                stopTimer();
                var prev = (currentIdx - 1 + $pills.length) % $pills.length;
                var prev = (currentIdx - 1 + regionalDataset.length + regionalDataset.length) % regionalDataset.length;
                syncGlobalDashboard(prev);
            });
        }

        $(initIntegratedCommandHub);
    })(window.jQuery);


(function ($) {
    if (!$) { return; }

    function initCertificationsAutoHover() {
        var $section = $(".certifications-section").last();
        var $cards = $section.find(".cert-card");
        var totalCards = $cards.length;
        var currentIdx = 0;
        var autoHoverTimer = null;

        
        function cycleAutoHover() {
          
            $cards.removeClass("auto-hover");
            
           
            $cards.eq(currentIdx).addClass("auto-hover");
            
            
            currentIdx = (currentIdx + 1) % totalCards;
        }

       
        function startEngine() {
            if (!autoHoverTimer) {
                autoHoverTimer = setInterval(cycleAutoHover, 2500);
            }
        }

        // 3. टाइमर इंजन बंद करने का फंक्शन
        function stopEngine() {
            if (autoHoverTimer) {
                clearInterval(autoHoverTimer);
                autoHoverTimer = null;
                $cards.removeClass("auto-hover"); 
            }
        }

       
        if (totalCards > 0) {
           
            cycleAutoHover();
            startEngine();

           
            $cards.on("mouseenter", function () {
                stopEngine();
            });

            
            $cards.on("mouseleave", function () {
                currentIdx = $cards.index(this); 
                startEngine();
            });
        }
    }

    
    $(initCertificationsAutoHover);
})(window.jQuery);

$(function () {

    const products = [
        {
            image: "./static/img/note1.png",
            title: "High-Density Paper Notebooks"
        },
        {
            image: "./static/img/note2.png",
            title: "Executive Premium Notebook"
        },
        {
            image: "./static/img/note3.png",
            title: "College Spiral Notebook"
        },
        {
            image: "./static/img/note4.png",
            title: "Leather Cover Journal"
        }
    ];

    let index = 0;

    function changeProduct() {

        $("#productImage").addClass("flip");

        setTimeout(function () {

            index = (index + 1) % products.length;

            $("#productImage").attr("src", products[index].image);
            $("#productTitle").text(products[index].title);

            $("#productImage").removeClass("flip");

        }, 400);

    }

    // Change every 3 seconds
    setInterval(changeProduct, 3000);

});