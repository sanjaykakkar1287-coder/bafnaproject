/**
 * message.js
 *
 * Handles fetching and displaying the full enquiry message in a modal.
 */
$(document).ready(function() {

    // Use event delegation for message cells. This ensures it works for any
    // dynamically added rows in the future.
    $('.data-table-section').on('dblclick', '.message-cell', function() {
        const $cell = $(this);
        const enquiryId = $cell.data('id');

        // Show a loading state in the modal while fetching data
        Swal.fire({
            title: 'Loading Message...',
            didOpen: () => {
                Swal.showLoading();
            },
            allowOutsideClick: false,
            allowEscapeKey: false
        });

        // Perform AJAX request to get the full message
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: {
                id: enquiryId
            },
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        title: ' Message',
                        // Use 'html' to render line breaks from the message
                        html: `<div class="full-message-content">${response.message.replace(/\n/g, '<br>')}</div>`,
                        icon: 'info',
                        width: '600px', // A wider modal for better readability
                        confirmButtonText: 'Close'
                    });
                } else {
                    Swal.fire('Error', response.message || 'Could not retrieve the message.', 'error');
                }
            },
            error: function() {
                Swal.fire('Request Failed', 'An error occurred while trying to communicate with the server.', 'error');
            }
        });
    });

});