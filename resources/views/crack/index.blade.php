@extends('crack.layout.app')

@section('content')
<a href="cart.html">
            <div class="grant-total col-lg-3 col-md-12 col-sm-12 text-center">
                <h5 class="text-light">Total Amount : ₹0.00</h5>
            </div>
        </a>


        <!-- Banner -->
        <div class="banner-area banner-img-one">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h1>"Discover Bold Flavors, Ignite Your Taste with Yanai Crackers Sparks!"</h1>
                            
                            <a class="cmn-btn" href="{{ route('about') }}">
                                Discover More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->
        

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
                                <a class="cmn-btn" style="background-color: #fa5f0b; color: #fff;" href="{{ route('about') }}">
                                    Know More
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
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

       

    

        <section class="offer-area offer-area-four pt-100 pb-70">
            <h1 class="text-center mt-1 mb-3">Product List</h1>
            <div class="container">
                <br>
                <h2 style="background-color: #fa5f0b; color: #fff;" class="text-center">Lakshmi</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                            <img src="{{ asset('public/crack/img/Products/4 Deluxe.jpeg') }}" alt="" height="100px" width="100px">

                            </div>
                            <div class="item-mid">
                                <h6>4 Deluxe</h6>
                                <p>1 - Box</p>
                                <p>₹16/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                            <img src="{{ asset('public/crack/img/Products/2.75 Kuruvi.jpeg') }}" alt="" height="100px" width="100px">

                            </div>
                            <div class="item-mid">
                                <h6>2.75 Kuruvi</h6>
                                <p>1 - Box</p>
                                <p>₹6</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                        <div class="item-left">
    <img src="{{ asset('public/crack/img/Products/5 Deluxe.webp') }}" alt="" height="100px" width="100px">
</div>

                            <div class="item-mid">
                                <h6>5 Deluxe</h6>
                                <p>1 - Box</p>
                                <p>₹22</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/3.5 lakshmi.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>3.5 Lakshmi</h6>
                                <p>1 - Box</p>
                                <p>₹8/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/4 dlx lakshmi.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>4 dlx lakshmi (10ply)</h6>
                                <p>1 - Box</p>
                                <p>₹20</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/4 dlx lakshmi 16ply.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>4 Mega dlx (16ply)</h6>
                                <p>1 - Box</p>
                                <p>₹30</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/4 Mega Jallikatu dlx (16ply).jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>4 Mega Jallikatu dlx (16ply)</h6>
                                <p>1 - Box</p>
                                <p>₹35/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/6 Inch Mega dlx.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>6 Inch Mega dlx</h6>
                                <p>1 - Box</p>
                                <p>₹30</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

            <div class="container">
                <br>
                <h2 style="background-color: #fa5f0b; color: #fff;" class="text-center">Sound Crackers</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/2 sound crackers.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>2 Sound Crackers</h6>
                                <p>1 - Box</p>
                                <p>₹30/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/3 sound crackers.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>3 Sound Crackers</h6>
                                <p>1 - Box</p>
                                <p>₹40</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container">
                <br>
                <h2 style="background-color: #fa5f0b; color: #fff;" class="text-center">Saravedi</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/28 chorsa.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>28 Chorsa</h6>
                                <p>1 - Box</p>
                                <p>₹9/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/28 gaint.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>28 Gaint</h6>
                                <p>1 - Box</p>
                                <p>₹15</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/56 gaint.webp') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>56 Gaint</h6>
                                <p>1 - Box</p>
                                <p>₹30</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/24 dlx.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>24 Deluxe</h6>
                                <p>1 - Box</p>
                                <p>₹32/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/50 dlx.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>50 Deluxe</h6>
                                <p>1 - Box</p>
                                <p>₹70</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
   //                             </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/100 dlx.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>100 Deluxe</h6>
                                <p>1 - Box</p>
                                <p>₹140</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/50 mega dlx.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>50 Mega Deluxe</h6>
                                <p>1 - Box</p>
                                <p>₹135/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/100 mega dlx.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>100 Mega Deluxe</h6>
                                <p>1 - Box</p>
                                <p>₹250</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/100 wala.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>100 Wala</h6>
                                <p>1 - Box</p>
                                <p>₹25</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/200 wala.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>200 Wala</h6>
                                <p>1 - Box</p>
                                <p>₹50/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/300 wala.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>300 Wala</h6>
                                <p>1 - Box</p>
                                <p>₹75</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/600 wala.webp') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>600 Wala</h6>
                                <p>1 - Box</p>
                                <p>₹100</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/1000 wala.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>1000 Wala</h6>
                                <p>1 - Box</p>
                                <p>₹180/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/2000 wala.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>2000 Wala</h6>
                                <p>1 - Box</p>
                                <p>₹360</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/10000 wala half.webp') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>10000 Wala (half)</h6>
                                <p>1 - Box</p>
                                <p>₹1100</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/10000 wala half.webp') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>5000 Wala (half)</h6>
                                <p>1 - Box</p>
                                <p>₹550/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/2000 wala.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>2000 Wala (half)</h6>
                                <p>1 - Box</p>
                                <p>₹220</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/2000 wala.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>1000 Wala (half)</h6>
                                <p>1 - Box</p>
                                <p>₹110</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/10000 wala half.webp') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>10000 Wala</h6>
                                <p>1 - Box</p>
                                <p>₹1800/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/10000 wala half.webp') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>5000 Wala</h6>
                                <p>1 - Box</p>
                                <p>₹900</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>




            <div class="container">
                <br>
                <h2 style="background-color: #fa5f0b; color: #fff;" class="text-center">Bomb</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Auto Bomb.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Auto Bomb</h6>
                                <p>1 - Box</p>
                                <p>₹30/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Hydro Bomb.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Hydro Bomb</h6>
                                <p>1 - Box</p>
                                <p>₹40</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/King Bomb.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>King Bomb</h6>
                                <p>1 - Box</p>
                                <p>₹55</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Agni Bomb.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Agni Bomb</h6>
                                <p>1 - Box</p>
                                <p>₹130/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Jug Mug Bomb.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Jug Mug</h6>
                                <p>1 - Box</p>
                                <p>₹85</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Digital Bomb.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Digital Bomb</h6>
                                <p>1 - Box</p>
                                <p>₹160</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>



            <div class="container">
                <br>
                <h2 style="background-color: #fa5f0b; color: #fff;" class="text-center">Bijili</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/gold bigili.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Gold Bijili</h6>
                                <p>1 - Pkt</p>
                                <p>₹17/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/red bijili.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Red Bijili</h6>
                                <p>1 - Pkt</p>
                                <p>₹9</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/gold bigili.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Stripped Bijili</h6>
                                <p>1 - Pkt</p>
                                <p>₹19</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>


            <div class="container">
                <br>
                <h2 style="background-color: #fa5f0b; color: #fff;" class="text-center">Chakker</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Chakker Dlx.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Chakker Deluxe</h6>
                                <p>1 - Box</p>
                                <p>₹85/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Chakker Special.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Chakker Special</h6>
                                <p>1 - Box</p>
                                <p>₹60</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Chakker Big 10pcs.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Chakker Big (10Pcs)</h6>
                                <p>1 - Box</p>
                                <p>₹25</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Chakker Big 10pcs.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Chakker Big (25Pcs)</h6>
                                <p>1 - Box</p>
                                <p>₹65/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Chakker Special.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Wire Chakker</h6>
                                <p>1 - Box</p>
                                <p>₹130</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Chakker Big 10pcs.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Spinner spl (Plastic Chakkars)</h6>
                                <p>1 - Box</p>
                                <p>₹145</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 list">
                        <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Spinner dlx.jpeg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Spinner Dlx (Plastic Chakkars)</h6>
                                <p>1 - Box</p>
                                <p>₹220/-</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Chakker Special.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Wire Chakker</h6>
                                <p>1 - Box</p>
                                <p>₹130</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item3 col-lg-12 col-md-12 col-sm-12">
                            <div class="item-left">
                                <img src="{{ asset('public/crack/img/Products/Chakker Big 10pcs.jpg') }}" alt="" height="100px" width="100px">
                            </div>
                            <div class="item-mid">
                                <h6>Spinner spl (Plastic Chakkars)</h6>
                                <p>1 - Box</p>
                                <p>₹145</p>
                            </div>
                            <div class="item-right">
                                <div class="quantity-input">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">-</button>
                                    <input type="number" class="quantity" value="0">
                                    <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity(this)" style="display: flex; justify-content: center; align-items: center;">+</button>
                                </div>
                                <div class="total">
                                    <span class="total-amount">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        

        

        <!-- Team 
        <section class="team-area">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Team</span>
                    <h2>Our Expert Team</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <img src="assets/img/home-one/team2.jpg" alt="Team">
                            <h3>Andres Pedlock</h3>
                            <span>CEO, Company</span>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <img src="assets/img/home-one/team3.jpg" alt="Team">
                            <h3>Adam Meir</h3>
                            <span>Lead Developer</span>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="team-item">
                            <img src="assets/img/home-one/team1.jpg" alt="Team">
                            <h3>Jack Farnes</h3>
                            <span>Manager of Company</span>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Team -->

        <!-- Benefit 
        <section class="benefit-area">
            <div class="container">
                <div class="benefit-content">
                    <div class="section-title">
                        <h2>Get Benefits of Using Latest <br> Mahi Salts.</h2>
                    </div>
                    <p>Unlock a world of advantages with the latest Mahi Salts. Elevate your culinary creations and industrial processes with our premium range of salt products. Enjoy enhanced flavor profiles, improved health benefits, and efficient performance. Whether in the kitchen or the production floor, experience the difference that Mahi Salts can bring to your endeavors.</p>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="benefit-inner">
                                <i class="flaticon-darts"></i>
                                <h4>Complete Health Partner</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="benefit-inner">
                                <i class="flaticon-customer"></i>
                                <h4>Backed By 100% Customer References</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="benefit-inner">
                                <i class="flaticon-security-purposes"></i>
                                <h4>Healthy & Energy</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="benefit-inner">
                                <i class="flaticon-artificial-intelligence"></i>
                                <h4>The Emerging Exparts</h4>
                            </div>
                        </div>
                    </div>
                    <a class="cmn-btn" href="about.html">
                        Know Details
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                    <div class="benefit-shape">
                        <img src="assets/img/home-one/benefit-shape.png" alt="Benefit">
                    </div>
                </div>
            </div>
        </section>
     End Benefit -->

        <!-- Partner -->
        <section class="partner-area pb-100">
            <div class="container">
                <div class="partner-wrap">
                    <div class="partner-shape">
                    <img src="{{ asset('public/crack/img/home-one/partner-shape.png') }}" alt="Partner">

                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="partner-content">
                                <div class="section-title">
                                    <h2>Want to <br> know more about us!</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="partner-btn">
                                <a class="cmn-btn" href="contact.html">
                                    Contact Us
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner -->
        @endsection

@push('scripts')
<script>

</script>
<script>

</script>

</script>

@endpush