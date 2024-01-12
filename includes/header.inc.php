     
    <!-- navigation start --> 
    <nav class="navbar navbar-expand-xl smart-scroll" id="mainNav">
        <div class="container">   
            <a href="<?php echo $base_url;?>" class="navbar-brand p-0 m-0 d-inline-block" aria-label="UBCL UK">
                <img src="<?php echo $base_url;?>assets/images/main-logo.svg" width="168" height="43" alt="UBCL UK">
            </a>
               
            <ul class="navbar-nav d-none d-xl-flex align-items-center">       
                <li class="nav-item"> 
                    <a href="<?php echo $base_url;?>about.php" class="nav-link">
                        About
                    </a>  
                </li>         
                <li class="nav-item dropdown ms-xxl-5 ms-3"> 
                    <a href="#" class="nav-link dropdown-toggle fw-semibold" id="drop1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">    
                        Services
                    </a> 
                    <ul class="dropdown-menu p-2 rounded-3 border-0 bg-white" aria-labelledby="drop1">   
                        <li class="dropdown">
                            <a href="<?php echo $base_url;?>how-register-uk-company.php" class="dropdown-item fw-medium rounded-3 p-2 rounded-2">How to Register a UK Company</a>
                        </li>  
                        <li class="dropdown">
                            <a href="<?php echo $base_url;?>how-reserve-company-name.php" class="dropdown-item fw-medium rounded-3 p-2 rounded-2">How to Reserve a Company Name in the UK</a>
                        </li>  
                        <li class="dropdown">
                            <a href="<?php echo $base_url;?>register-company-name-uk.php" class="dropdown-item fw-medium overflow-hidden rounded-3 p-2 rounded-2">Register a Company Name in the UK</a>
                        </li>  
                        <li class="dropdown">
                            <a href="<?php echo $base_url;?>non-uk resident-company.php" class="dropdown-item fw-medium overflow-hidden rounded-3 p-2 rounded-2">Non-UK Resident Company Formations</a>
                        </li>  
                        <li class="dropdown">
                            <a href="<?php echo $base_url;?>registered-office.php" class="dropdown-item fw-medium overflow-hidden rounded-3 p-2 rounded-2">Registered Office</a>
                        </li>  
                        <li class="dropdown">
                            <a href="<?php echo $base_url;?>director-service-address.php" class="dropdown-item fw-medium overflow-hidden rounded-3 p-2 rounded-2">Director’s Service Address</a>
                        </li>  
                        <li class="dropdown">
                            <a href="<?php echo $base_url;?>guide-company-address.php" class="dropdown-item fw-medium overflow-hidden rounded-3 p-2 rounded-2">Guide – Company Address</a>
                        </li>  
                        <!-- <ul class="dropdown-menu p-2 rounded-3 border-0 bg-white dropdown-submenu">
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url;?>register-company.php">Register a Company Name in the UK </a>
                            </li> 
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url;?>#">GCC Nationals Company</a>
                            </li>
                            
                        </ul> --> 
                    </ul> 
                </li>         
                <li class="nav-item dropdown ms-xxl-5 ms-3">
                    <a href="<?php echo $base_url;?>about.php" class="nav-link">
                        Locations
                    </a>  
                </li>         
                <li class="nav-item dropdown ms-xxl-5 ms-3"> 
                    <a href="./blog/" class="nav-link">
                        Blogs
                    </a>  
                </li>      
                <li class="nav-item dropdown ms-xxl-5 ms-3"> 
                    <a href="./blog/" class="nav-link">
                        Resources
                    </a>  
                </li>      
                <li class="nav-item ms-xxl-5 ms-3"> 
                    <a href="<?php echo $base_url;?>contact.php" class="nav-link">
                        Contact Us
                    </a>  
                </li>     
                  
            </ul>  
            <div class="d-inline-flex align-items-center">

                
                
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler rounded p-2 ms-3" type="button"><span></span><span></span><span></span></button>   
            </div>
            <!-- <button onclick="openSideMenu()" class="navbar-toggler d-xl-none" type="button"><span></span><span></span><span></span></button>   -->
        </div>
    </nav> 
    <!-- navigation end --> 

   

    <div class="offcanvas offcanvas-end sideNav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <!-- <p class="offcanvas-title lead-sm fw-semibold text-primary mb-0" id="offcanvasExampleLabel">Kerala Cruises</p> -->
            <a href="<?php echo $base_url;?>" class="navbar-brand p-0 m-0 d-inline-block" aria-label="UBCL">
                <img src="<?php echo $base_url;?>assets/images/main-logo.svg" width="100" height="40" alt="UBCL">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
        <ul class="links__list">
                <li><a href="<?php echo $base_url;?>">Home</a></li>
                <li><a href="<?php echo $base_url;?>about.php">About Us</a></li>
                <li>  
                    <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                        Services
                    </a>
                    <ul class="collapse" id="collapse1">  
                        <li>
                            <a href="<?php echo $base_url;?>how-register-uk-company.php">How to Register a UK Company</a>
                        </li>  
                        <li>
                            <a href="<?php echo $base_url;?>how-reserve-company-name.php" >How to Reserve a Company Name in the UK</a>
                        </li> 
                        <li>
                            <a href="<?php echo $base_url;?>register-company.php">Register a Company Name in the UK</a>
                        </li>   
                    </ul>
                </li>   
                <li><a href="#">Locations</a></li>  
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div><!--.//off-canvas-->
   
      <!-- Whatsapp chat link  -->
    <a href="https://wa.me/+610432710422" target="_blank" class="whatsapp position-fixed rounded-circle d-flex justify-content-center align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
    </a>