<?php include_once('../includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Lorem ipsum dolor sit amet</title>
 
    <!-- All Stylesheets -->
    <?php $folder='blog'; include_once('../includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='inside'; include_once('../includes/header.inc.php'); ?> 

    <!-- Blog Wrapper Start -->
    <section class="py-5">
        <div class="container">
            <div class="detail__box mx-auto">
                <?php include_once('back.inc.php'); ?>
                <figure class="mb-4 mb-md-5"> 
                    <img src="images/01-lg.webp" width="900" height="470" class="img-fluid round" alt="Blog Thumbnail">
                </figure>
                 
                 
                <h1 class="h1">Lorem ipsum dolor sit, amet consectetur adipisicing</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus omnis atque maiores reiciendis iusto quae at molestiae eligendi, architecto odio aliquid sint ipsa natus nobis illum. Sapiente sed inventore unde odio accusamus enim excepturi debitis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis distinctio voluptas eos porro quam blanditiis quibusdam labore minima modi, exercitationem necessitatibus sed numquam aspernatur ratione officia doloremque architecto inventore sapiente. Fugiat enim dolorem quibusdam, expedita repellendus maxime perspiciatis distinctio nihil minus ad provident, amet placeat alias vitae! Impedit dicta iste eaque, laudantium rerum molestiae. Aspernatur?</p>

                <h2 class="mt-4 mt-md-5">Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste officiis voluptates debitis, numquam reprehenderit mollitia commodi. Minus doloribus dicta repellat nam? Neque eaque incidunt dignissimos labore obcaecati ipsa doloribus adipisci nesciunt iste suscipit id necessitatibus excepturi quas nulla quibusdam voluptatum ipsum omnis similique, illum possimus? Laboriosam, veniam? Dolorem, reprehenderit voluptate repellat illum culpa corrupti expedita, tempore hic praesentium quae neque consequatur minima ea delectus consequuntur.</p>

                <h3 class="mt-4 mt-md-5">Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste officiis voluptates debitis, numquam reprehenderit mollitia commodi. Minus doloribus dicta repellat nam? Neque eaque incidunt dignissimos labore obcaecati ipsa doloribus adipisci nesciunt iste suscipit id necessitatibus excepturi quas nulla quibusdam voluptatum ipsum omnis similique, illum possimus? Laboriosam, veniam? Dolorem, reprehenderit voluptate repellat illum culpa corrupti expedita, tempore hic praesentium quae neque consequatur minima ea delectus consequuntur.</p>

                <h4 class="mt-4 mt-md-5">Lorem ipsum dolor sit amet.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste officiis voluptates debitis, numquam reprehenderit mollitia commodi. Minus doloribus dicta repellat nam? Neque eaque incidunt dignissimos labore obcaecati ipsa doloribus adipisci nesciunt iste suscipit id necessitatibus excepturi quas nulla quibusdam voluptatum ipsum omnis similique, illum possimus? Laboriosam, veniam? Dolorem, reprehenderit voluptate repellat illum culpa corrupti expedita, tempore hic praesentium quae neque consequatur minima ea delectus consequuntur.</p>

                <h5 class="mt-4 mt-md-5">Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste officiis voluptates debitis, numquam reprehenderit mollitia commodi. Minus doloribus dicta repellat nam? Neque eaque incidunt dignissimos labore obcaecati ipsa doloribus adipisci nesciunt iste suscipit id necessitatibus excepturi quas nulla quibusdam voluptatum ipsum omnis similique, illum possimus? Laboriosam, veniam? Dolorem, reprehenderit voluptate repellat illum culpa corrupti expedita, tempore hic praesentium quae neque consequatur minima ea delectus consequuntur.</p>

                <h6 class="mt-4 mt-md-5">Lorem ipsum dolor sit amet.</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste officiis voluptates debitis, numquam reprehenderit mollitia commodi. Minus doloribus dicta repellat nam? Neque eaque incidunt dignissimos labore obcaecati ipsa doloribus adipisci nesciunt iste suscipit id necessitatibus excepturi quas nulla quibusdam voluptatum ipsum omnis similique, illum possimus? Laboriosam, veniam? Dolorem, reprehenderit voluptate repellat illum culpa corrupti expedita, tempore hic praesentium quae neque consequatur minima ea delectus consequuntur.</p>


                <?php 
                    include_once('author.inc.php');
                ?>
            </div><!--.//col--> 
        </div><!--.//container-->
    </section>
    <!-- Blog Wrapper End -->
 

    <!-- Footer and Script List --> 
    <?php $folder='inside'; include_once('../includes/footer.inc.php'); ?>
    
</body>
</html>