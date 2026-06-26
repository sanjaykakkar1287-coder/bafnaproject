function loadContactPage() {

    $.ajax({
        url: "./pages/contact.php",
        type: "GET",
        success: function(response) {

            $(".indexpage").html(response);

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

        },
        error: function() {

            alert("No Page Found");

        }
    });

}