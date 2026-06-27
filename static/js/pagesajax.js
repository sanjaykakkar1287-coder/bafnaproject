function runAfterContentRender(callback) {
    if (window.requestAnimationFrame) {
        window.requestAnimationFrame(function () {
            callback();
        });
    } else {
        window.setTimeout(callback, 0);
    }
}

function loadContactPage() {

    $.ajax({
        url: "./pages/contact.php",
        type: "GET",
        success: function(response) {

            $(".indexpage").html(response);
            // No specific JS initialization needed for the contact page currently
            // If you add JS for contact.php, call its init function here.

        },
        error: function() {

            alert("No Page Found");

        }
    });

}

function loadAboutPage() {

    $.ajax({
        url: "./pages/about.php",
        type: "GET",
        success: function(response) {

            $(".indexpage").html(response);
            // Initialize About page scripts after content is loaded
            runAfterContentRender(function () {
                if (typeof window.initAboutPageInteractions === "function") {
                    window.initAboutPageInteractions();
                }
            });

        },
        error: function() {

            alert("No Page Found");

        }
    });

}
function loadProductPage() {

    $.ajax({
        url: "./pages/product.php",
        type: "GET",
        success: function(response) {

            $(".indexpage").html(response);
            // Initialize Product page scripts after content is loaded
            runAfterContentRender(function () {
                if (typeof window.initShowroomCarousel === "function") {
                    window.initShowroomCarousel();
                }
            });

        },
        error: function() {

            alert("No Page Found");

        }
    });

}