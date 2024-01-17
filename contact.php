<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Contact Us</title>
    <link rel="canonical" href="<?php echo $base_url;?>contact.php" />
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='blog'; include_once('includes/header.inc.php'); ?> 
 
    <!-- Header Wrapper Start -->
    <header class="page__header py-5 d-flex align-items-center justify-content-center position-relative" style="background: url(assets/images/home/about-us/about-bg-thumbnail.webp) no-repeat center center / cover;"> 
    <div class="position-absolute top-0 start-0 w-100 h-100 header_gradient"></div>
        <div class="text-center container position-relative z-3 py-lg-5">
            <h1 class="h2 text-white fw-semibold text-uppercase">Contact Us</h1> 
        </div>    
    </header>
    <!-- Header Wrapper End --> 
     
    <!-- contact form wrapper start --> 
    <?php $pageType="contact"; include_once('includes/contact-form.inc.php'); ?>
    <!-- contact form wrapper end -->
    <!-- map section Start -->
    <div class="ratio ratio-16x9 overflow-hidden" style="max-height:25rem;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31428.097428037607!2d76.26741780825836!3d10.057052969758077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080de3dc351d6b%3A0x13d214a63c1807ab!2sCheranallur%2C%20Ernakulam%2C%20Kochi%2C%20Kerala%20682034%2C%20India!5e0!3m2!1sen!2sbd!4v1700471882225!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- map section End -->

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
    <!-- contact form validation script -->
    <?php include_once('includes/contact-form-validation-script.inc.php'); ?>

</body>
</html>
 