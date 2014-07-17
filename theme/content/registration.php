<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />

    <title>Designith | S'inscrire</title>
    <?php $fontstyle='<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css"/>'; ?>

</head>

<?php 
$desactive_body=true;
ob_start(); 
?>

<body class="login-body">

    <section class="vbox">

        <section class="scrollable">

            <div class="container">

              <form class="form-signin" action="index.html">
                <h2 class="form-signin-heading">registration now</h2>
                <div class="login-wrap">
                    <p>Enter your personal details below</p>
                    <input type="text" class="form-control" placeholder="Full Name" autofocus>
                    <input type="text" class="form-control" placeholder="Address" autofocus>
                    <input type="text" class="form-control" placeholder="Email" autofocus>
                    <input type="text" class="form-control" placeholder="City/Town" autofocus>
                    <div class="radios">
                        <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                            <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Male
                        </label>
                        <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                            <input name="sample-radio" id="radio-02" value="1" type="radio" /> Female
                        </label>
                    </div>

                    <p> Enter your account details below</p>
                    <input type="text" class="form-control" placeholder="User Name" autofocus>
                    <input type="password" class="form-control" placeholder="Password">
                    <input type="password" class="form-control" placeholder="Re-type Password">
                    <label class="checkbox">
                        <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

                    <div class="registration">
                        Already Registered.
                        <a class="" href="login.html">
                            Login
                        </a>
                    </div>

                </div>

              </form>

              <br><br>

            </div>

        </section>

    </section>

</body>

<?php 
$body=ob_get_contents();
ob_end_clean(); 
?>

</html>
