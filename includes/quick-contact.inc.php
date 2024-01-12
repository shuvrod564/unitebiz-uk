<section class="contact__wrapper pb-5 pt-4 pt-lg-5">
        <div class="container mt-lg-3">
            <div class="row g-4 g-xxl-5 align-items-center">
                <div class="col-lg-5">
                    <img 
                        class="img-fluid w-100" 
                        width="624" height="841" 
                        src="assets/images/assist-life/managing-stress-durings.webp" 
                        srcset="assets/images/assist-life/managing-stress-durings-400.webp 575w
                            assets/images/assist-life/managing-stress-durings.webp  1200w
                        "
                        alt="Navigating Life’s"
                    >
                </div><!--//.col-->

                <div class="col-lg-7">
                    
                    <div class="col-lg-6 text-26 text-justify text-lg-start w-100">
                        <h1 class="h2 sm mb-3 text-start" style="color: #00272F;"><?php echo $title; ?></h1>
                        <p class="fs-15 text-gray mb-4">
                            <?php echo $description; ?> 
                        </p>
                         
                        <form action="<?php echo $base_url;?>submit-contact-form.php" id="contactForm" method="post" class="row g-4 contact__wrapper">
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                <div class="small text-danger error" id="name_error"></div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" id="phone" placeholder="Phone Number" class="form-control">
                                <div class="small text-danger error" id="phone_error"></div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                                <div class="small text-danger error" id="email_error"></div>
                            </div>
                            <div class="col-md-6">
                                <select name="service" id="service" class="form-select">
                                    <option value="Select Service" selected disabled>Select Service</option>
                                    <option value="Assistance with Life Stage, Transition">Assistance with Life Stage, Transition</option>
                                    <option value="Personal Care / Activities Assistance">Personal Care / Activities Assistance</option>
                                    <option value="Transport / Travel Assistance">Transport / Travel Assistance</option>
                                    <option value="Supported Daily Tasks / Shared Living">Supported Daily Tasks / Shared Living</option>
                                    <option value="Innovative Community Participation Initiatives">Innovative Community Participation Initiatives</option>
                                    <option value="Assistance in developing Life Skills">Assistance in developing Life Skills</option>
                                    <option value="Domestic Assistance">Domestic Assistance</option>
                                    <option value="Support Coordination">Support Coordination</option>
                                    <option value="Community Participation">Community Participation</option>
                                    <option value="Group / Centre Activities">Group / Centre Activities</option> 
                                </select>
                                <div class="small text-danger error" id="service_error"></div>
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" class="form-control p-4" cols="30" rows="4" placeholder="Any Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary height rounded-pill px-4 px-lg-5">Enquiry Now</button>
                            </div>
                        </form>
                    </div><!--.//col-->
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>