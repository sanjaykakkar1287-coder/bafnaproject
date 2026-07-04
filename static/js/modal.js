/**
 * modal.js
 *
 * Handles the client-side logic for a generic modal.
 * This script manages opening and closing the modal, and can be used
 * to load dynamic content into it.
 */
$(document).ready(function() {
    // Get the modal element
    const $modal = $('#formModal');

    // Check if the modal exists on the page
    if ($modal.length === 0) {
        return; // Do nothing if no modal is found
    }

    // Get the close button
    const $closeBtn = $modal.find('.close-btn');

    /**
     * Opens the modal.
     */
    function openModal() {
        $modal.css('display', 'block');
        // You can add logic here to populate the modal title and body
        // For example:
        // $('#modalTitle').text('Contact Us');
        // $('#modalBody').load('path/to/form.html');
    }

    /**
     * Closes the modal.
     */
    function closeModal() {
        $modal.css('display', 'none');
        // Clear content if it was loaded dynamically to ensure it's fresh next time
        // $('#modalBody').html('');
    }

    // When the user clicks a button with the class 'hero-btn', open the modal.
    // Using event delegation on `document` to ensure it works for dynamically added elements.
    $(document).on('click', '.hero-btn', function(e) {
        e.preventDefault(); // Prevent default link behavior
        openModal();
    });

    // When the user clicks on the close button (x), close the modal.
    $closeBtn.on('click', function() {
        closeModal();
    });

    // When the user clicks anywhere outside of the modal content, close it.
    $(window).on('click', function(event) {
        if ($(event.target).is($modal)) {
            closeModal();
        }
    });
});