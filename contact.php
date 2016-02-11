<?php include ('header.php'); ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs 
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>-->
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.2001731519767!2d77.53088131442988!3d13.022921217274607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d1186313ca1%3A0xda8739d34cda92ee!2sKanteerava+Studio!5e0!3m2!1sen!2sin!4v1455190144617" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
                <div class="col-md-4">
                    <div class="contact_details">
                        <h3>Corporate Office</h3>
                        <p>#31/34, DDUTTL, Yeshwantpur,<br />
        Industrial Suburb <br />Opp. Kanteeveera studio, <br />
        Bangalore - 560022, India</p>
                        <p><i class="fa fa-phone"></i> 
                            <abbr title="Phone"></abbr>: 9916705001</p>
                        <p><i class="fa fa-envelope-o"></i> 
                            <abbr title="Email"></abbr>: <a href="mailto:name@example.com">packerzbaba@gmail.com</a>
                        </p>
                        <p><i class="fa fa-clock-o"></i> 
                            <abbr title="Hours"></abbr>: Monday - Saturday: 9:00 AM to 6:00 PM</p>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus-square fa-3x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <!-- /.row -->
</div>
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div id="contact" >
            <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0 text-center">
            <div class="form_section">
                <h3>Get in Touch</h3>
                <hr class="primary">
                <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
                
                <div class="col-lg-10 col-lg-offset-1 text-center">
                <form name="sentMessage" id="contactForm">
                    <div class="col-md-4">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label></label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name."  placeholder="Name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    </div>
                     <div class="col-md-4">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label></label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number."  placeholder="Phone">
                        </div>
                    </div>
                    </div>
                     <div class="col-md-4">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label></label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." placeholder="Email">
                        </div>
                    </div>
                    </div>
                   <div class="col-md-12"> 
                    <div class="control-group form-group">
                        <div class="controls">
                            <label></label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Your message here.."></textarea>
                        </div>
                    </div>
                    </div>
                        <div class="col-md-4 col-md-offset-4">
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Send Message</button>
                        </div>
                </form>
                </div>
            </div>
</div></div>
        </div>
        <!-- /.row -->
    </div>
    
    
  

    
    <!-- Footer -->
    <?php include ('footer.php'); ?> 
