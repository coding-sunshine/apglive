<?php

use function Laravel\Folio\name;
name('contact');

?>
<x-frontend-layout>
    <!--============== Page Banner Start ==============-->
    <div class="page-banner-simple py-50" style="background-image: url(/assets/images/banner2.png); background-repeat: no-repeat; background-position: center center; background-size: cover; margin-top: 75px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="banner-title text-white">Contact Us</h3>
                    <span class="banner-tagline font-medium text-white">Your Partner in Building Wealth Through Property Investment</span>
                </div>
            </div>
        </div>
    </div>
    <!--============== Page Banner End ==============-->


    <!--============== Contact form Start ==============-->
    <div class="full-row">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <h4 class="down-line mb-4">Get In Touch</h4>
                    <p>Nullam vel enim risus.<br> Integer rhoncus hendrerit sem egestas porttitor.</p>
                    <div class="mb-3">
                        <ul>
                            <li class="mb-3">
                                <h6 class="mb-0">Office Address :</h6>  13, 2 Sydney 3000 Australia
                            </li>
                            <li class="mb-3">
                                <h6>Contact Number :</h6> (+61) 000 000 0000, (+61) 999 999 9999
                            </li>
                            <li class="mb-3">
                                <h6>Email Address :</h6> Info@gmail.com, support@gmail.com
                            </li>
                        </ul>
                    </div>
                    <h5 class="mb-2">Career Info</h5>
                    <p>If you’re interested in employment <br>opportunities at APG, please email us:<br> <a href="#">support@gmail.com</a></p>
                </div>
                <div class="col-md-7 order-md-1"  style="padding-right: 50px;">
                    <h4 class="down-line mb-4">Send Message</h4>
                    <div class="form-simple">
                        <form id="contact-form" action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <label class="mb-2">Full Name:</label>
                                    <input type="text" class="form-control bg-white" name="name" required="">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label class="mb-2">Your Email:</label>
                                    <input type="email" class="form-control bg-white" name="email" required="">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label class="mb-2">Subject:</label>
                                    <input type="text" class="form-control bg-white" name="subject" required="">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label class="mb-2">Message:</label>
                                    <textarea class="form-control bg-white" name="message" rows="8" required=""></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Contact form End ==============-->
</x-frontend-layout>
