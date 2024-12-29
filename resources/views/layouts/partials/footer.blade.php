<!--============== Footer Section Start ==============-->
<footer class="full-row footer-default-dark bg-footer" style="padding-bottom: 30px">
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1">
            <div class="col row-cols-4">
                <div class="footer-widget mb-4">
                    <div class="footer-logo mb-4">
                        <a href="#"><img src="/assets/images/lplogo.png" alt="Lewis Properties" /></a>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry.Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry.</p>
                </div>
                <div class="footer-widget media-widget mb-4">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col row-cols-4">
                <div class="footer-widget contact-widget mb-4">
                    <h3 class="widget-title mb-4">Contact Info</h3>
                    <ul>
                        <li>For any inquiries<br> please contact Support.</li>
                        <li>{{ config('settings.contact.phone') }}</li>
                        <li>{{ config('settings.contact.email') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col row-cols-4">
                <div class="footer-widget footer-nav mb-4">
                    <h3 class="widget-title mb-4">Quick Links</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('listings') }}">Prorperty Listing</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============== Footer Section End ==============-->

<!--============== Copyright Section Start ==============-->
<div class="copyright bg-footer text-default py-4">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-1">
            <div class="col">
                <span class="text-white">© {{ date("Y")}} Lewis Properties All right reserved</span>
            </div>
            <div class="col">
                <ul class="line-menu float-end list-color-gray">
                    <li><a href="{{ route('privacy') }}">Privacy & Policy </a></li>
                    <li>|</li>
                    <li><a href="{{ route('tnc') }}">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--============== Copyright Section End ==============-->

<!-- Scroll to top -->
<div class="scroll-top-vertical xs-mx-none" id="scroll">Go Top <i class="ms-2 fa-solid fa-arrow-right-long"></i>
</div>
<!-- End Scroll To top -->
