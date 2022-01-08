<!--Registration Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Registration - Store 2 Door</title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="Stylesheets/Styles6.css">

    <script src="JavaScript/personal_details.js"></script>
   
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

    <!--CONTENT-->

    <div class="content">

        <form method="post" onsubmit="return formValidation();" action="Successfully Registered.html">

            <h1 class="para">Personal Details !</h1> <br />

            <label>First Name: </label>
            <br />
            <input class="int" type="text" name="first_name" id="firstname"/><br />

            <label>Last Name:</label>
            <br />
            <input class="int" type="text" name="last_name" id="lastname"/><br />

            <label>E mail Address: </label>
            <br />
            <input class="int" type="text" name="e_mail address" id="emailaddress"/><br />

            <label>Telephone Number: </label>
            <br />
            <input class="int" type="text" name="telephone_number" id="telephonenumber"/><br />

            <label>Fax Number: </label>
            <br />
            <input class="int" type="text" name="fax_number" id="faxnumber"/><br />

            <label>Address 1: </label>
            <br />
            <input class="int" type="text" name="address_1" id="address1"/><br />

            <label>Address 2: </label>
            <br />
            <input class="int" type="text" name="adderss_2" id="address2"/><br />

            <label>Company Name: </label>
            <br />
            <input class="int" type="text" name="company_name" id="companyname"/><br />

            <label>Company Address: </label>
            <br />
            <input class="int" type="text" name="company_address" id="companyaddress"/><br />

            <label>City: </label>
            <br />
            <input class="int" type="text" name="city" id="city"/><br />

            <label>Postal Code: </label>
            <br />
            <input class="int" type="text" name="postal_code" id="postalcode"/><br /><br />

            <h1 class="para">Create your Password !</h1> <br />

            <label>Password: </label>
            <br />
            <input class="int" type="password" name="password" id="password"/><br />

            <label>Confirm Password:</label>
            <br />
            <input class="int" type="password" name="confirm_password" id="confirmpassword"/><br />
            <br />

            <input type="checkbox" name="Policy" value="on" />     
            Agree the Privacy Policy
            <br />

            <input class="int" type="submit" name="submit" value="Submit" />
            <input class="int" type="reset" name="reset" value="Reset" />

        </form>

    </div>

    <br />
    <br />
    <br />

    <!--FOOTER-->

    <?php

    require_once('Includes/header-signout.php');

    ?>

</body>

</html>
