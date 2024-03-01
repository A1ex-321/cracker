@extends('crack.layout.app')

@section('content')
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>About Us</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    About Us
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- About -->
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-iems-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="sub-title">About Us</span>
                            <h2>Welcome to Yanai Crackers</h2>
                        </div>
                        <div class="about-content">
                            <p style="text-align: justify;">Your premier destination for the finest quality fireworks in Sivakasi! Nestled in the heart of the city, we take immense pride in being a leading crackers shop that caters to customers from all corners of India.

                                At Yanai Crackers, we have established ourselves as a trusted name in the industry, known for delivering top-notch, branded crackers that light up celebrations and bring joy to countless households. Our commitment to quality is unwavering, and we ensure that every product we offer meets the highest safety standards.
                                
                                What sets us apart is not just the remarkable quality of our crackers, but also our dedication to providing unbeatable prices. We believe that everyone deserves to celebrate with the best, without breaking the bank. That's why we offer our extensive range of crackers at competitive wholesale prices, making your festivities even more enjoyable and affordable.
                                
                                Our team at Yanai Crackers is driven by a passion for making your special moments truly memorable. We understand the significance of celebrations and take pride in being a part of your happiness. Whether it's Diwali, weddings, birthdays, or any other occasion, our crackers are sure to add a magical touch to your festivities.
                                
                                We invite you to explore our online store or visit our physical shop to witness the incredible array of crackers that we offer. It's our privilege to serve you with the best quality fireworks, exceptional pricing, and a commitment to safety that's second to none. Thank you for choosing Yanai Crackers as your trusted partner in celebration!</p>
                            <ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Manufacturers
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Whole-sale Suppliers
                                </li>
                            </ul>
                            <div class="partner-btn">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <div class="about-img-slider owl-theme owl-carousel">
                                <div class="about-img-item">
                                <img src="{{ asset('public/crack/img/home-one/about yanai.jpg') }}" alt="About" height="600" style="object-fit: cover;">

                                </div>
                                
                            </div>
                            <div class="about-shape">
                            <img src="{{ asset('public/crack/img/home-one/about2.png') }}" alt="About">
<img src="{{ asset('public/crack/img/home-one/about4.png') }}" alt="About">
<img src="{{ asset('public/crack/img/home-one/about5.png') }}" alt="About">

                            </div>
                            <div class="about-year">
                                <h2>35 <span>Years</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

       

        <!-- Counter -->
        <section class="counter-area pt-100">
            <div class="container">
                <div class="row align-iems-center">
                    <div class="col-lg-5">
                        <div class="counter-text">
                            <h2>We have Completed Bulk of Orders in South India</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-4 col-lg-4">
                                <div class="counter-item">
                                    <h3>
                                        <span class="odometer" data-count="1226">00</span> 
                                    </h3>
                                    <p>HAPPY CLIENTS</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="counter-item">
                                    <h3>
                                        <span class="odometer" data-count="1552">00</span> 
                                    </h3>
                                    <p>WORKERS</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="counter-item">
                                    <h3>
                                        <span class="odometer" data-count="1000">00</span> 
                                    </h3>
                                    <p>EXPERT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter -->

        <!-- Offer -->
        <section class="offer-area offer-area-three pb-100 mt-5">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Offers</span>
                    <h2>Yanai Crackers</h2>
                </div>
                <div class="" style="display: flex;">
                    <div class="offer-item col-lg-6">
                        <div class="offer-top">
                        <img src="{{ asset('public/crack/img/home-two/offer1.jpg') }}" alt="Offer">
                            <i class="flaticon-3d-print"></i>
                        </div>
                        <div class="offer-bottom">
                            <h3>
                                <a href="service.html">Diwali Offer</a>
                            </h3>
                            <p>Get Upto 20% Discount On Diwali Purchase</p>
                            <a class="offer-link" href="contact.html">Order Now
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                        <div class="offer-shape">
                        <img src="{{ asset('public/crack/img/home-two/offer-shape.png') }}" alt="Offer">
                        </div>
                    </div>
                    <div class="offer-item col-lg-6">
                        <div class="offer-top">
                        <img src="{{ asset('public/crack/img/home-two/offer2.jpg') }}" alt="Offer">
                            <i class="flaticon-robotic-arm"></i>
                        </div>
                        <div class="offer-bottom">
                            <h3>
                                <a href="service.html">Diwali Offer</a>
                            </h3>
                            <p>Get Upto 20% Discount On Diwali Purchase</p>
                            <a class="offer-link" href="contact.html">Order Now
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                        <div class="offer-shape">
                        <img src="{{ asset('public/crack/img/home-two/offer-shape.png') }}" alt="Offer">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Offer -->
 @endsection

@push('scripts')
<script>

</script>
<script>

</script>

</script>

@endpush