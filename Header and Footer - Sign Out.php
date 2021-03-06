<!--Header and Footer-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Header and Footer - Sign Out</title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>

    <!--HEADER-->

    <header>

        <div class="main_head">

            <div class="logo">
                <a href="Home.html">
                    <img src="Images/logo.jpg" alt="logo" />
                </a>
            </div>

            <div class="name">
                <a href="Home.html">
                    <h1>Store 2 Door </h1>
                </a>
            </div>

            <div class="topics">
                <a href="About Us.html" target="_blank">About Us </a>
                <a href="Customer Feedback.html" target="_blank">Customer Feedback </a>              
                <a href="Contact Us.html" target="_blank">Contact Us </a>
                <a href="Privacy Policy.html" target="_blank">Privacy Policy </a>
            </div>

            <div class="cart">
                <a href="Shopping Cart.html" target="_blank">
                    <img src="Images/cart.jpg" alt="shopping cart" />
                </a>
            </div>

            <div class="shopping">
                <a href="Shopping Cart.html" target="_blank">My Shopping Cart </a>
            </div>

            <div class="signOut">
                <a href="Home.html">Sign Out</a>
            </div>

            <div class="profile">
                <a href="User Account.html">
                    <img src="Images/img_avatar.png" alt="profile picture" class="image" />
                </a>
                <div class="middle">
                    <div class="text_profile">
                        <a href="User Account.html">View Profile </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="next">

            <div class="offers">
                <a href="Weekly Offers.html" target="_blank">Weekly Offers</a>
            </div>

            <div class="search">
                <input type="text" placeholder=" Search Items Here..." name="search" />
            </div>

        </div>

        <div class="navigation">
            <button><a href="Household.html">Household</a></button>
            <button><a href="Grocery.html">Grocery</a></button>
            <button><a href="Chilled.html">Chilled</a></button>
            <button><a href="Pharmacy.html">Pharmacy</a></button>
            <button><a href="Liquor.html">Liquor</a></button>
            <button><a href="Beverages.html">Beverages</a></button>
            <button><a href="Frozen Food.html">Frozen Food</a></button>
            <button><a href="Meat.html">Meat</a></button>
            <button><a href="Fish.html">Fish</a></button>
            <button><a href="Vegetables.html">Vegetables</a></button>
            <button><a href="Fruits.html">Fruits</a></button>
        </div>

    </header>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <div class="content">

    </div>

    <!--FOOTER-->

    <?php

    require_once('Includes/header-signout.php');

    ?>

</body>

</html>
