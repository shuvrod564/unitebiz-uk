 
  <!-- Footer Wrapper Start --> 
    <footer class="bg-gray pt-5"> 
        <div class="container mt-lg-4 pb-4">
            <div class="row gx-3 gy-4 justify-content-between"> 
                <div class="col-lg-4">
                    <a href="<?php echo $base_url;?>" class="d-inline-block logo" aria-label="UBCL UK">
                        <img class="img-fluid" width="237" height="76" src="assets/images/footer-logo.svg" alt="UBCL UK">
                    </a>
                </div>
                <div class="col-lg-4">  
                    <p class="lead text-white fw-medium mb-1 mb-lg-3">ADDRESS</p>
                    <address class="lead-sm text-white fw-bold mb-0"> 
                        #V-01, Nakshatra Grdns., Cheranellore, Kochi- 682034, Kerala, India 
                    </address>
                </div>  
                <div class="col-lg-2 col-md-6">  
                    <p class="lead text-white fw-medium mb-1 mb-lg-3">PHONE</p> 
                    <a class="lead-sm text-white fw-bold" href="tel:+91199876543211">+911 998 765 43211</a> 
                </div>  
                <div class="col-lg-2 col-md-6">  
                    <p class="lead text-white fw-medium mb-1 mb-lg-3">EMAIL</p> 
                    <a class="lead-sm text-white fw-bold" href="info@unitebizcs.com">info@unitebizcs.com</a> 
                </div>  
            </div>  
        </div>
        <div class="copyright__wrapp border-top py-3">
            <div class="container"> 
                <div class="row g-4 align-items-center"> 
                    <div class="col-xl-10">  
                        <ul class="d-flex flex-row flex-wrap gap-3 gap-md-4 gap-lg-5 justify-content-center justify-content-xl-start">       
                            <li> 
                                <a href="<?php echo $base_url;?>about.php">
                                    About
                                </a>  
                            </li>         
                            <li> 
                                <a href="<?php echo $base_url;?>about.php">
                                    Services
                                </a>  
                            </li>         
                            <li> 
                                <a href="#">    
                                    Locations
                                </a>   
                            </li>         
                            <li> 
                                <a href="#">
                                    Blogs
                                </a>  
                            </li>      
                            <li> 
                                <a href="#">
                                    Resources
                                </a>  
                            </li>      
                            <li> 
                                <a href="#">
                                    Contact Us
                                </a>  
                            </li>    
                        </ul>    
                    </div>
                    <div class="col-xl-2"> 
                        <?php include_once('_social-links.inc.php'); ?>  
                    </div>
                </div><!--//.row--> 
            </div>
        </div> 
    </footer>
    <!-- Footer Wrapper End -->
   
     
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="backTop" class="btn backTop position-fixed p-0 rounded-circle justify-content-center align-items-center" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path fill="#fff" d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
    </button>
    <!-- JS: All Vendors --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://unpkg.com/default-passive-events@2.0.0/dist/index.umd.js"></script>
    <!-- <script src="<?php // echo $base_url;?>assets/js/vendors.min.js"></script>   -->
    <!-- JS: Designer Script -->
    <script src="<?php echo $base_url;?>assets/js/script.js"></script>  
   
 
    <script>
         
        $(".testimonialSlider").owlCarousel({
            autoplay: true, 
            autoplayHoverPause: true,
            smartSpeed: 550,
            responsiveClass: true,
            autoplayTimeout: 10000,
            autoplaySpeed: 3000,
            loop: true,
            margin: 15, 
            items: 3,
            navText: [
                '<img src="<?php echo $base_url;?>assets/images/home/testimonial/left-arow.svg" class="img-fluid" width="19" height="26" alt="icon" />',
                '<img src="<?php echo $base_url;?>assets/images/home/testimonial/right-arow.svg" class="img-fluid" width="19" height="26" alt="icon" />', 
            ] ,
            nav: true,
            dots: false, 
            responsiveClass: true, 
            responsive: { 
                0: { items: 1 },
                576: { items: 1  },
                768: { items: 1 },
                992: { items: 2 }, 
                1200: { items: 2.6 }, 
            } 
        });
        
    </script>




