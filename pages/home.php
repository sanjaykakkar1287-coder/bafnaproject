<section class="hero-section">

    <div class="container">

        <div class="hero-left">

            <span class="hero-badge">
                Global Paper Stationery Manufacturer
            </span>

            <h1 class="hero-title">

                <span>Manufacturing</span>
                <span>Excellence.</span>

                <br>

                <span>Exporting</span>
                <span>Quality</span>
                <span>Worldwide.</span>

            </h1>

            <p class="hero-description">
                India's trusted paper conversion manufacturer delivering high-volume notebooks, printed books, wood-free pencils, activity kits and private label solutions to global distributors.
            </p>

            <div class="hero-buttons">

                <a href="#" class="btn btn-primary">
                    Request Bulk Quote
                </a>

                <a href="#" class="btn btn-outline">
                    Download Catalogue
                </a>

            </div>

            <div class="hero-counter">

                <div class="counter-item">

                    <h2 class="count-number" data-count="70000">
                        0
                    </h2>

                    <span>Sq.ft Facility</span>

                </div>

                <div class="counter-item">

                    <h2 class="count-number" data-count="200000">
                        0
                    </h2>

                    <span>Units / Day</span>

                </div>

                <div class="counter-item">

                    <h2 class="count-number" data-count="600">
                        0
                    </h2>

                    <span>Skilled Workforce</span>

                </div>

            </div>

        </div>



        <div class="hero-right">

            <div class="map-glow"></div>

            <div class="world-map-wrapper">

                <img
                    src="images/world-map.png"
                    alt="World Map"
                    class="world-map">

                <div class="tooltip-container">

                    <!-- jQuery will generate all tooltips here -->

                </div>

            </div>

        </div>

    </div>

</section>
<style>
  :root{

    --bg:#050b14;
    --text:#ffffff;
    --muted:#94a3b8;
    --blue:#2563eb;
    --green:#10b981;
    --orange:#ffb400;

}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:var(--bg);
    color:var(--text);
    font-family:'Segoe UI',sans-serif;

}

.hero-section{

    width:100%;
    min-height:100vh;
    display:flex;
    align-items:center;
    overflow:hidden;
    position:relative;
    padding:70px 0;

}

.container{

    width:90%;
    max-width:1300px;
    margin:auto;

    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:60px;

}

.hero-left{

    width:50%;
    z-index:2;

}

.hero-right{

    width:50%;
    position:relative;

    display:flex;
    justify-content:center;
    align-items:center;

}

/*--------------------------
Badge
---------------------------*/

.hero-badge{

    display:inline-block;

    padding:8px 20px;

    border-radius:40px;

    background:rgba(255,255,255,.05);

    border:1px solid rgba(255,255,255,.08);

    color:#d5d5d5;

    margin-bottom:25px;

    font-size:14px;

}

/*-------------------------
Heading
--------------------------*/

.hero-title{

    font-size:65px;

    line-height:1.2;

    font-weight:700;

    margin-bottom:25px;

}

.hero-title span{

    display:inline-block;

    opacity:.25;

    transition:.4s;

}

.hero-description{

    color:var(--muted);

    font-size:18px;

    line-height:32px;

    margin-bottom:40px;

    max-width:560px;

}

/*--------------------------
Buttons
---------------------------*/

.hero-buttons{

    display:flex;

    gap:18px;

    margin-bottom:70px;

}

.btn{

    text-decoration:none;

    padding:15px 35px;

    border-radius:50px;

    font-weight:600;

    transition:.4s;

}

.btn-primary{

    background:var(--blue);

    color:#fff;

}

.btn-primary:hover{

    transform:translateY(-5px);

}

.btn-outline{

    border:1px solid rgba(255,255,255,.2);

    color:#fff;

}

.btn-outline:hover{

    background:#fff;

    color:#111;

}

/*------------------------
Counter
-------------------------*/

.hero-counter{

    display:flex;

    gap:55px;

}

.counter-item h2{

    font-size:42px;

    color:#3b82f6;

    margin-bottom:8px;

}

.counter-item span{

    color:#9aa8bb;

}

/*-------------------------
Map
--------------------------*/

.world-map-wrapper{

    position:relative;

    width:100%;

    max-width:650px;

}

.world-map{

    width:100%;

    display:block;

    position:relative;

    z-index:2;

}

/*------------------------
Glow
-------------------------*/

.map-glow{

    width:450px;

    height:450px;

    border-radius:50%;

    background:radial-gradient(circle,
    rgba(255,180,0,.35) 0%,
    rgba(255,180,0,.15) 45%,
    transparent 70%);

    position:absolute;

    left:50%;

    top:50%;

    transform:translate(-50%,-50%);

    filter:blur(10px);

    z-index:1;

}

/*---------------------------
Tooltip Container
----------------------------*/

.tooltip-container{

    position:absolute;

    left:0;

    top:0;

    width:100%;

    height:100%;

    z-index:3;

}

/*-------------------------
Tooltip
--------------------------*/

.map-tooltip{

    position:absolute;

    transform:translate(-50%,-50%);

    display:none;

}

.tooltip-box{

    background:var(--green);

    color:#fff;

    padding:8px 14px;

    border-radius:5px;

    font-size:13px;

    font-weight:600;

    white-space:nowrap;

    margin-bottom:10px;

    box-shadow:0 10px 25px rgba(0,0,0,.35);

}

.pulse{

    width:12px;

    height:12px;

    border-radius:50%;

    background:#3b82f6;

    margin:auto;

    box-shadow:

    0 0 15px #3b82f6,

    0 0 25px #3b82f6;

}

/*------------------------
Responsive
-------------------------*/

@media(max-width:992px){

.container{

flex-direction:column;

text-align:center;

}

.hero-left{

width:100%;

}

.hero-right{

width:100%;

margin-top:50px;

}

.hero-title{

font-size:45px;

}

.hero-counter{

justify-content:center;

flex-wrap:wrap;

}

.hero-buttons{

justify-content:center;

}

}
</style>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(function () {

    /*====================================
      COUNTRY DATA
    ====================================*/

    var countries = [

        { name: "Canada", left: "22%", top: "31%" },
        { name: "USA", left: "21%", top: "41%" },
        { name: "Mexico", left: "20%", top: "52%" },
        { name: "UK", left: "45%", top: "31%" },
        { name: "Europe", left: "49%", top: "37%" },
        { name: "Middle East", left: "58%", top: "46%" },
        { name: "West Africa", left: "46%", top: "56%" },
        { name: "East Africa", left: "54%", top: "61%" }

    ];



    /*====================================
      CREATE TOOLTIPS
    ====================================*/

    $.each(countries, function (i, item) {

        $(".tooltip-container").append(

            '<div class="map-tooltip" style="left:' + item.left + ';top:' + item.top + ';">' +

            '<div class="tooltip-box">' + item.name + '</div>' +

            '<div class="pulse"></div>' +

            '</div>'

        );

    });




    /*====================================
      HEADING ANIMATION
    ====================================*/

    function animateHeading() {

        var words = $(".hero-title span");

        words.removeClass("active");

        var i = 0;

        function showWord() {

            if (i >= words.length) {

                setTimeout(function () {

                    words.removeClass("active");

                    animateHeading();

                }, 1000);

                return;
            }

            $(words[i]).addClass("active");

            i++;

            setTimeout(showWord, 400);

        }

        showWord();

    }

    animateHeading();




    /*====================================
      COUNTER
    ====================================*/

    $(".count-number").each(function () {

        var $this = $(this);

        var target = parseInt($this.data("count"));

        $({

            Counter: 0

        }).animate({

            Counter: target

        }, {

            duration: 2500,

            easing: "swing",

            step: function () {

                $this.text(Math.ceil(this.Counter).toLocaleString());

            }

        });

    });






    /*====================================
      TOOLTIP LOOP
    ====================================*/

    var pins = $(".map-tooltip");

    var current = 0;

    function showTooltip() {

        pins.stop(true, true).hide();

        var pin = $(pins[current]);

        pin.css({

            transform: "translate(-50%,-50%) scale(.3)",

            opacity: 0,

            display: "block"

        });

        pin.animate({

            opacity: 1

        }, 300);

        pin.css({

            transform: "translate(-50%,-50%) scale(1)"

        });

        setTimeout(function () {

            pin.fadeOut(300);

            current++;

            if (current >= pins.length) {

                current = 0;

            }

            setTimeout(showTooltip, 350);

        }, 1400);

    }

    showTooltip();

});
</script>
