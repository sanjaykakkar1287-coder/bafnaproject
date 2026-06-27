/**
 * Attaches the contact form submission handler.
 * This function is designed to be called after the contact page content is loaded.
 */
function initContactFormHandler() {
    // Use event delegation on a static parent to handle the form submission.
    // This is robust and works even if the form is reloaded.
    $('.indexpage').off('submit.contact').on('submit.contact', '.enquiry-form', function(e) {
        e.preventDefault(); // Prevent the default browser submission

        var $form = $(this);
        var $submitButton = $form.find('.submit-btn');
        var originalButtonText = $submitButton.find('.btn-text').text();

        // Provide user feedback
        $submitButton.prop('disabled', true).find('.btn-text').text('Sending...');

        $.ajax({
            url: './adminpage/contactform.php', // The new PHP script to handle the form data
            type: 'POST',
            data: $form.serialize(), // Serialize the form data for submission
            
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: response.message,
                        confirmButtonColor: '#0F6B4B'
                    });
                    $form.trigger('reset'); // Clear the form on success
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message || 'An unknown error occurred.',
                        confirmButtonColor: '#0F6B4B'
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Connection Error',
                    text: 'Could not connect to the server. Please try again later.',
                    confirmButtonColor: '#0F6B4B'
                });
            },
            complete: function() {
                // Restore the button to its original state
                $submitButton.prop('disabled', false).find('.btn-text').text(originalButtonText);
            }
        });
    });
}

function loadContactPage() {

    $.ajax({
        url: "./pages/contact.php",
        type: "GET",
        success: function(response) {

            $(".indexpage").html(response);
            // After loading the contact page, initialize its form handler
            initContactFormHandler();
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
            if (typeof window.initAboutPageInteractions === "function") {
                window.initAboutPageInteractions();
            }

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
            if (typeof window.initShowroomCarousel === "function") {
                window.initShowroomCarousel();
            }

        },
        error: function() {

            alert("No Page Found");

        }
    });

}
