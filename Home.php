<!--Home Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Home page</title>

    <link href="Stylesheets/Styles10.css" rel="stylesheet" type="text/css" />


</head>
<body>


    <!--HEADER-->

     <?php

    require_once('Includes/header-signout.php');

    ?>



    <div class="content">

        <div class="add">
            <a href="add.html">
                <img src="Images/add1.jpg" width="200px" height="503px" /></a>
        </div>
        <div class="leftb">
            <button><a href="Deliveryareas.html">delivery Info</a></button>
            <button><a href="Homedelivery.html">Home Delivery</a></button>
            <button><a href="shoppinglist.html">Shopping List</a></button>
            <button><a href="track.html">Tracking Info</a></button>

        </div>


        <!--slide show-->
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/slide1.jpg" width="800px" height="500px">
                <div class="text">This is future</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/slide2.jpg" width="800px" height="500px">
                <div class="text">You can shop  at home</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/slide3.jpg" width="800px" height="500px">
                <div class="text">Be a part of it</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
        <div class="row">
            <div class="p1">
                <a href="p1.html">
                    <img src="Images/p1.jpg" width="188px" height="200px" />
                </a>
            </div>
            <div class="p2">
                <a href="p2.html">
                    <img src="Images/p2.jpg" width="188px" height="200px" />
                </a>
            </div>
            <div class="p3">
                <a href="p3.html">
                    <img src="Images/p3.jpg" width="188px" height="200x" />
                </a>
            </div>
            <div class="p4">
                <a href="p4.html">
                    <img src="Images/p4.jpg" width="188px" height="200px" />
                </a>
            </div>
            <div class="p5">
                <a href="p5.html">
                    <img src="Images/p5.jpeg" width="188px" height="200px" />
                </a>
            </div>
            <div class="p6">
                <a href="p6.html">
                    <img src="Images/p6.jpg" width="188px" height="200px" />
                </a>
            </div>
        </div>

    </div>

    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <!--FOOTER-->

    <?php

    require_once('Includes/header-signout.php');

    ?>

</body>

</html>
