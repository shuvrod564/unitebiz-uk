<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Thank You</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='blog'; include_once('includes/header.inc.php'); ?> 
  
 
    <!-- Header Wrapper Start -->
    <header class="bg-primary py-5 d-flex align-items-center">
        <div class="container-fluid py-md-5">
            <h1 class="h1 text-capitalize text-white text-center ">
            Thank You
            </h1> 
        </div><!--.//container-fluid--> 
    </header>
    <!-- Header Wrapper End -->

    <!-- Content Wrapper Start -->
    <div class="py-5">
        <div class="container py-md-5">
            <div class="text-center mb-4">
                <img src="assets/images/check.webp" class="img-fluid" width="200" height="183" alt="check icon">
            </div>
            <h2 class="h4 fw-medium ff-second text-center">Thank you! Your form has been submitted successfully.</h2> 
        </div><!--.//container-->
    </div>
    <!-- Content Wrapper End -->

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>