 
<?php if(isset($pageType) && $pageType === 'contact') { ?>
    <section class="py-5">
        <div class="container py-sm-5">
            <div class="row g-4 gx-lg-5">
                <div class="col-lg-5">
                    <h2 class="h2 text-dark mb-4">
                        <span class=" sm d-block fw-normal">Contact and Engage</span>
                        Need a quote <span class="d-lg-block"> For a project ?</span>
                    </h2>

                    <p class="h2 text-primary">Get in Touch….</p>
                    <p class=" fw-medium">
                        Ready to turn your global business aspirations into reality? Contact Unitebiz today and embark on a journey destined for success.
                    </p>
                </div><!--./col-->
                <div class="col-lg-7">
                    <form action="<?php echo $base_url;?>submit-contact-form.php" method="post" id="contactForm" class="row g-4"> 
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            <small class="text-danger error" id="name_error"></small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                            <small class="text-danger error" id="phone_error"></small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                            <small class="text-danger error" id="email_error"></small>
                        </div>
                        <div class="col-md-6">
                            <select name="service" id="service" class="form-select">
                                <option value="Service" selected disabled>Service</option>
                                <option value="Business & Start-Ups Consultancy">Business & Start-Ups Consultancy</option>
                                <option value="Company Registration Consultancy">Company Registration Consultancy</option>
                                <option value="Global Investment & Visas Consultancy">Global Investment & Visas Consultancy</option>
                                <option value="Buy-Sell Business Consultancy">Buy-Sell Business Consultancy</option>
                                <option value="Accounting and Bookkeeping Services">Accounting and Bookkeeping Services</option>
                                <option value="BPO and Back Office Services">BPO and Back Office Services</option>
                                <option value="Finance & Loans Consultancy">Finance & Loans Consultancy</option> 
                                <option value="Digital Design Consultancy Services">Digital Design Consultancy Services</option> 
                            </select>
                            <small class="text-danger error" id="service_error"></small>
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="" cols="30" rows="4" class="form-control" placeholder="Any Message"></textarea>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary height text-uppercase px-4">Submit</button>
                        </div>
                    </form>
                </div><!--./col-->
            </div><!--.//row-->
        </div><!--.//container-->
    </section>

<?php } else { ?>
    <section class="py-5 bg-dark" id="contact">
        <div class="container py-sm-5">
            <div class="row g-4 gx-lg-5">
                <div class="col-lg-5">
                    <h2 class="h2 text-white mb-4">
                        <span class="text-white sm d-block fw-normal">Contact and Engage</span>
                        Need a quote <span class="d-lg-block"> For a project ?</span>
                    </h2>
                    <p class="h2 text-primary">Get in Touch….</p>
                    <p class="text-white fw-medium">
                        Ready to turn your global business aspirations into reality? Contact Unitebiz today and embark on a journey destined for success.
                    </p>
                </div><!--./col-->
                <div class="col-lg-7">
                    <form action="<?php echo $base_url;?>submit-contact-form.php" method="post" id="contactForm" class="row g-4"> 
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            <small class="text-danger error" id="name_error"></small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                            <small class="text-danger error" id="phone_error"></small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                            <small class="text-danger error" id="email_error"></small>
                        </div>
                        <div class="col-md-6">
                            <select name="service" id="service" class="form-select">
                                <option value="Service" selected disabled>Service</option>
                                <option value="Business & Start-Ups Consultancy">Business & Start-Ups Consultancy</option>
                                <option value="Company Registration Consultancy">Company Registration Consultancy</option>
                                <option value="Global Investment & Visas Consultancy">Global Investment & Visas Consultancy</option>
                                <option value="Buy-Sell Business Consultancy">Buy-Sell Business Consultancy</option>
                                <option value="Accounting and Bookkeeping Services">Accounting and Bookkeeping Services</option>
                                <option value="BPO and Back Office Services">BPO and Back Office Services</option>
                                <option value="Finance & Loans Consultancy">Finance & Loans Consultancy</option> 
                                <option value="Digital Design Consultancy Services">Digital Design Consultancy Services</option> 
                            </select>
                            <small class="text-danger error" id="service_error"></small>
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="" cols="30" rows="4" class="form-control" placeholder="Any Message"></textarea>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary height text-uppercase px-4">Submit</button>
                        </div>
                    </form>
                </div><!--./col-->
            </div><!--.//row-->
        </div><!--.//container-->
    </section>
<?php } ?>