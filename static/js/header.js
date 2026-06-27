$(document).ready(function() {
            // When the hamburger button is clicked
            $('.hamburger-btn').on('click', function() {
                // Toggle the 'open' class on the button itself and the mobile menu
                $(this).toggleClass('open');
                $('.mobile-menu').toggleClass('open');
            });
        });

       