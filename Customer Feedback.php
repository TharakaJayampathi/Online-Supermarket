<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Feedback - Store 2 Door</title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Styles6.css" rel="stylesheet" type="text/css" />
    

</head>

<body>

    <!--HEADER-->

    <?php

    require_once('Includes/header-signout.php');

?>

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

    <h1 class="para">Your Comments !</h1>
    <h3 class="para">We are always looking for ways to improve your online shopping experience.</h3>
    <h3 class="para">What is your opinion of this web site...!</h3>

    

    <p class="para">We are here to help with any quastion or comments from you </p>
    <br>
    <br>

    <p class="para">Please leave your comments below :</p>

    <form>
        
        <label>Name :</label> <br>
        <input class="int" type="text" name="name"><br>

        <label>E-mail :</label><br>
        <input class="int" type="text" name="e-mail"><br>

        <label>Subject :</label><br>
        <input class="int" type="text" name="subject"><br>

        <label>Comments :</label><br>
        <textarea rows="5" cols="50" name="comments">Enter comments here....</textarea>

        <input class="int" type="button" name="send" value="Send">
    </form>

    </div>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <!--FOOTER-->

     <?php

    require_once('Includes/footer.php');

    ?>
</body>

</html>

<?php

    mysqli_close($connection);

?>