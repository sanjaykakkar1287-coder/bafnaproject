<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/header/style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./static/js/header.js"></script>
<script src="./static/js/pagesajax.js"></script>
</head>
<body>

    <header class="site-header">
        <div class="header-container">
            <div class="header-left">
                <a href="/" class="logo">
                    <img src="./static/images/logo.png" alt="Bafna Logo"> <!-- Added image logo -->
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
    <script>
    $(document).ready(function(){
        // Function to set the active class
        function setActive(element) {
            $('.menu-link').removeClass('active');
            $(element).addClass('active');
        }

        // Use a more specific selector for the header button
        $("#contactbtn").click(function(e){
            e.preventDefault();
            setActive('#contactmenu'); // Set menu item active
            loadContactPage();
        });

        $("#aboutbtn").click(function(e){
            e.preventDefault();
            setActive(this);
            loadAboutPage();
        });

        $("#productsbtn").click(function(e){
            e.preventDefault();
            setActive(this);
            loadProductPage();
        });

        $("#homebtn").click(function(e){
            e.preventDefault();
            setActive(this);
            // Instead of reloading the page, load the home content via AJAX
            $(".indexpage").load("./pages/home.php");
        });

        // Handle the contact link inside the slide-out menu
        $("#contactmenu").click(function(e) {
            e.preventDefault();
            setActive(this);
            loadContactPage();
        });
    });
    </script>