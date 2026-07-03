$(document).ready(function() {
            // Get the modal
            var modal = $('#changePasswordModal');

            // When the user clicks the "Change Password" link, open the modal
            $('.cpassword').on('click', function(e) {
                e.preventDefault();
                modal.show();
            });

            // When the user clicks on <span> (x), close the modal
            $('.close-btn').on('click', function() {
                modal.hide();
            });

            // When the user clicks anywhere outside of the modal, close it
            $(window).on('click', function(event) {
                if ($(event.target).is(modal)) {
                    modal.hide();
                }
            });
        });