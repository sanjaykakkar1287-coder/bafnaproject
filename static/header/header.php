<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/header/style.css">
    <link rel="stylesheet" href="./static/css/homepages/hero.css">
    <link rel="stylesheet" href="./static/css/homepages/home.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<!-- Add these to your <head> section -->
<link rel="stylesheet" href="./static/css/homepages/home.css">
<link rel="stylesheet" href="./static/css/homepages/hero.css">
<link rel="stylesheet" href="./static/css/homepages/about.css">
<link rel="stylesheet" href="./static/css/homepages/product.css">
<link rel="stylesheet" href="./static/css/homepages/contact.css">
<link rel="stylesheet" href="./static/css/homepages/privacy.css">
<link rel="stylesheet" href="./static/css/homepages/terms.css">

<?php include './pages/modal.php'; ?>
<?php include './pages/infoadmin.php'; ?>

</head>

    <header class="site-header">
        <div class="header-container">
            <div class="header-left">
                <a href="./" class="logo">
                    <img src="./static/img/logo.png" alt="Bafna Logo"> <!-- Added image logo -->
                </a>
            </div>

            <div class="header-center">
                <form action="/search" method="get" class="search-form">
                    <input type="search" name="q" placeholder="Search..." class="search-input">
                    <button type="submit" class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

<!-- Button trigger modal -->



            <div class="header-right">
                <a href="#" class="contact-link contact-btn" id="contactbtn">Contact Us</a> <!-- Added class for button styling -->
                <button class="hamburger-btn" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- This is the menu that will be toggled -->
    <nav class="mobile-menu">
        <a href="#" id="homebtn" class="menu-link active">Home</a>
        <a href="#" id="aboutbtn" class="menu-link">About us</a>
        <a href="#" id="productsbtn" class="menu-link">Products</a>
        <a href="#" id="contactmenu" class="menu-link">Contact us</a>
    </nav>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(function(){
        // Function to set the active class
        function setActive(element) {
            $('.menu-link').removeClass('active');
            $(element).addClass('active');
        }

        // Function to close the mobile menu
        function closeMobileMenu() {
            $('.hamburger-btn').removeClass('open');
            $('.mobile-menu').removeClass('open');
        }

        // Use a more specific selector for the header button
        $("#contactbtn, #contactfooter").click(function(e){
            e.preventDefault();
            setActive('#contactmenu'); // Set menu item active
            loadContactPage();
           // This button is not in the mobile menu, so no need to close it.
        });

        $("#aboutbtn").click(function(e){
            e.preventDefault();
            setActive(this);
            loadAboutPage();
            closeMobileMenu();
            
        });

        $("#productsbtn").click(function(e){
            e.preventDefault();
            setActive(this);
            loadProductPage();
            closeMobileMenu();
            initProductPage();
        });

        $("#homebtn").click(function(e){
            e.preventDefault();
            setActive(this);
            // Instead of reloading the page, load the home content via AJAX
            $(".indexpage").load("./pages/home.php", function() {
                // Re-initialize hero animations if they exist on the home page
                // if (typeof initHomeHero === 'function') {
                //     initHomeHero();
                // }
            });
            closeMobileMenu();
           
        });

        // Handle the contact link inside the slide-out menu
        $("#contactmenu").click(function(e) {
            e.preventDefault();
            setActive(this);
            loadContactPage();
            closeMobileMenu();
        });

        // Use event delegation for the button inside the loaded content
        $(document).on('click', '#about-legacy-btn', function(e) {
            e.preventDefault();
            setActive('#aboutbtn'); // Keep the menu item active
            loadAboutPage();
            // No need to close mobile menu here as this button is not in it
        });

         $("#privacybtn-footer").click(function(e) {
            e.preventDefault();
            setActive(this);
            loadPrivacyPage();
            closeMobileMenu();
        });
        $("#termsbtn-footer").click(function(e) {
            e.preventDefault();
            setActive(this);
            loadTermsPage();
            closeMobileMenu();
        });
    });
    </script>