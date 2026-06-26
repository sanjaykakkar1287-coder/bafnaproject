<
    <link rel="stylesheet" href="./static/header/style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./static/js/header.js"></script>
<script src="./static/js/pagesajax.js"></script>

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
        <a href="#" id="homebtn">Home</a>
        <a href="#" id="aboutbtn">About us</a>
        <a href="#" id="productsbtn">Products</a>
        <a href="#" class="contact-btn">Contact us</a>
    </nav>
    <script>
        $(document).ready(function(){

    $(".contact-btn").click(function(e){

        e.preventDefault();

         loadContactPage();

    });
    $("#aboutbtn").click(function(e){

        e.preventDefault();

         loadAboutPage();

    });
    $("#productsbtn").click(function(e){

        e.preventDefault();

         loadProductPage();

    });
    $("#homebtn").click(function(e){

        e.preventDefault();

        window.location.href = "index.php";

    });

});
    </script>