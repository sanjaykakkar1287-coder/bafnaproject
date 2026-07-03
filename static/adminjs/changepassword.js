/**
 * changepassword.js
 *
 * Handles the AJAX request for the "Change Password" modal form.
 */
$(document).ready(function () {

    $('#changePasswordForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        const $form = $(this);
        const $submitBtn = $form.find('button[type="submit"]');
        const originalBtnText = $submitBtn.text();

        // Basic client-side validation
        const newPassword = $('#new_password').val();
        const confirmPassword = $('#confirm_password').val();

        if (newPassword !== confirmPassword) {
            Swal.fire({
                icon: 'error',
                title: 'Passwords Do Not Match',
                text: 'Please ensure the new password and confirmation match.'
            });
            return; // Stop the submission
        }

        // Disable button and show loading text
        $submitBtn.prop('disabled', true).text('Updating...');

        $.ajax({
            url: 'changepassword.php', // The PHP script to handle the password change
            type: 'POST',
            data: $form.serialize() + '&action=change_password',
            dataType: 'json',
            success: function (response) {
                if (response && response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                    }).then(() => {
                        $('#changePasswordModal').hide(); // Hide modal on success
                        $form.trigger('reset'); // Clear the form
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Update Failed',
                        text: response.message || 'An unknown error occurred.'
                    });
                }
            },
            error: function (xhr) {
                console.error('AJAX Error:', xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'Server Error',
                    text: 'Could not connect to the server. Please try again.'
                });
            },
            complete: function () {
                // Re-enable the button and restore its text
                $submitBtn.prop('disabled', false).text(originalBtnText);
            }
        });
    });

});