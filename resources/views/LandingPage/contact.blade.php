@extends('layouts.app')

@section('content')
    <div class="breadcrumbs-area bg-overlay-dark bg-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-text text-left">
                        <h2>CONTACT US</h2>
                        <div class="breadcrumbs-bar">
                            <ul class="breadcrumbs">
                                <li><a href="index.html">HOME</a></li>
                                <li>CONTACT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form-area fix pb-120">
        <div class="container">
            <div class="contact-form-left">
                <h4 class="details-title text-center mt-4">Leave a Message</h4>
                <form id="contact-form" action="#" method="post">
                    <input type="text" name="name" placeholder="Your name">
                    <input type="text" name="email" placeholder="Email here">
                    <textarea name="message" cols="30" rows="10" placeholder="Write here"></textarea>
                    <div class="w-100 fix">
                        <button type="submit" class="default-button submit-btn">SUBMIT</button>
                    </div>
                    <p class="form-messege"></p>
                </form>
            </div>
            <div class="contact-form-right">
                <div class="single-sidebar-widget fix bg-8">
                    <div class="sidebar-contact-info">
                        <h4>Need Any Help?</h4>
                        <p>Financo consectetur adipiscing elitsed do eiud tempor incididnt in the nto sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua enim </p>
                        <a href="{{ route('Welcome.Contact.Us') }}" class="default-button">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Contact Form Area-->
    <!--Start of Client area-->
    <div class="client-area ptb-40 bg-light">
        <div class="container">
            <div class="client-carousel">
                <div class="col-12">
                    <div class="single-client block">
                        <a href="#" class="block">
                            <span class="p-images"><img src="{{ asset('assets/img/client/1.png') }}" alt=""></span>
                            <span class="s-images"><img src="{{ asset('assets/img/client/1-hover.png') }}" alt=""></span>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-client block">
                        <a href="#" class="block">
                            <span class="p-images"><img src="{{ asset('assets/img/client/2.png') }}" alt=""></span>
                            <span class="s-images"><img src="{{ asset('assets/img/client/2-hover.png') }}" alt=""></span>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-client block">
                        <a href="#" class="block">
                            <span class="p-images"><img src="{{ asset('assets/img/client/3.png') }}" alt=""></span>
                            <span class="s-images"><img src="{{ asset('assets/img/client/3-hover.png') }}" alt=""></span>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-client block">
                        <a href="#" class="block">
                            <span class="p-images"><img src="{{ asset('assets/img/client/4.png') }}" alt=""></span>
                            <span class="s-images"><img src="{{ asset('assets/img/client/4-hover.png') }}" alt=""></span>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-client block">
                        <a href="#" class="block">
                            <span class="p-images"><img src="{{ asset('assets/img/client/5.png') }}" alt=""></span>
                            <span class="s-images"><img src="{{ asset('assets/img/client/5-hover.png') }}" alt=""></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Client area-->
    <!--Start of Footer Widget-area-->
    <div class="footer-widget-area bg-4 overlay-blue pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-md-1 order-1">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo/footer-logo.png') }}" alt="FINANCO"></a>
                        </div>
                        <p>Lorem must explain to you how all this mistaolt cing pleasure and praising ain wasnad I will give
                            you a complete pain was prexplain to you lorem</p>
                        <form action="#" id="mc-form" class="mc-form fix">
                            <div class="subscribe-form">
                                <input id="mc-email" type="email" name="email" placeholder="Email for Newsletter">
                                <button id="mc-submit" type="submit"><i class="fa fa-send"></i></button>
                            </div>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre fix text-small">
                            <div class="mailchimp-submitting"></div>
                            <!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div>
                            <!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div>
                            <!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-md-3 order-2">
                    <div class="single-footer-widget mt-sm-30">
                        <h3>POPULAR POST</h3>
                        <div class="footer-widget-content">
                            <h5>Duplex Villa Design</h5>
                            <span>Lorem ipsum dolor sit amet, tur<br>acinglit sed do eius </span>
                        </div>
                        <div class="footer-widget-content">
                            <h5>Real Estate Fest</h5>
                            <span>Lorem ipsum dolor sit amet, tur<br>acinglit sed do eius </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-md-2 order-3">
                    <div class="single-footer-widget">
                        <h3>QUICK LINK</h3>
                        <ul class="footer-list">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">CASES</a></li>
                            <li><a href="#">From Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-md-4 order-4">
                    <div class="single-footer-widget mt-sm-30">
                        <h3>CONTACT US</h3>
                        <div class="footer-contact-info">
                            <img src="img/icons/f-map.png" alt="">
                            <span class="block">256, 1st AVE, Manchester<br>
                                125 , Noth England</span>
                        </div>
                        <div class="footer-contact-info">
                            <img src="img/icons/f-phone.png" alt="">
                            <span class="block">Telephone : {{ env('APP_NUM') }}<br>
                                Telephone : {{ env('APP_NUM') }}</span>
                        </div>
                        <div class="footer-contact-info">
                            <img src="img/icons/f-globe.png" alt="">
                            <span class="block">Email : {{ env('APP_EMAIL') }}<br>
                                Web : www.devitems.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
