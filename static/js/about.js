(function ($) {
    if (!$) { return; }

    function initAboutPageInteractions() {
        var $section = $(".about-page-hero").last();

        if (!$section.length) {
            return;
        }

        var $teamCards = $section.find(".team-card");

        if (!$teamCards.length) {
            return;
        }

        // Automatic sequential highlight loop for Team Cards (every 2.5 seconds)
        var currentTeamIdx = 0;

        if (window.bafnaAboutTeamTimer) {
            clearInterval(window.bafnaAboutTeamTimer);
        }

        function cycleTeamHighlight() {
            $teamCards.removeClass("auto-hover-style").css({ "background": "", "border-color": "", "transform": "" });

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
            if (window.bafnaAboutTeamTimer) {
                clearInterval(window.bafnaAboutTeamTimer);
            }
            window.bafnaAboutTeamTimer = setInterval(cycleTeamHighlight, 2500);
        }

        function stopTeamTimer() {
            if (window.bafnaAboutTeamTimer) {
                clearInterval(window.bafnaAboutTeamTimer);
                window.bafnaAboutTeamTimer = null;
                $teamCards.css({ "transform": "", "background": "", "border-color": "" });
            }
        }

        cycleTeamHighlight();
        startTeamTimer();

        // User mouse safety intercept loops
        $teamCards.off("mouseenter mouseleave").on("mouseenter", stopTeamTimer).on("mouseleave", startTeamTimer);
    }

    // Expose the function to the global scope so it can be called from other scripts
    window.initAboutPageInteractions = initAboutPageInteractions;
})(window.jQuery);