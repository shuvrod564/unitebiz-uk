 

<?php if($folder === 'root') {  ?>
    <!-- CSS: All Vendors -->
    <link rel="stylesheet" href="<?php echo $base_url;?>css/vendors.css">  
    <!-- CSS: Html Designer -->
    <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css">  
<?php } if($folder === 'blog') {  ?>
    <!-- CSS: All Vendors -->
    <link rel="stylesheet" href="<?php echo $base_url;?>css/vendors.css">  
    <!-- CSS: Html Designer -->
    <link rel="stylesheet" href="<?php echo $base_url;?>css/blog.css">  
<?php } ?>


 
 
<style>
    :root {
        --eye: url('<?php echo $base_url;?>assets/images/icons/eye.svg');
        --plus-circle-icon: url('<?php echo $base_url;?>assets/images/icons/pluss.svg'); 
        --minus-circle-icon: url('<?php echo $base_url;?>assets/images/icons/minus.svg');
    }
</style>