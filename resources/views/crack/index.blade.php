@extends('crack.layout.app')

@section('content')
<style>/* Hide the default spinner buttons */
.quantity::-webkit-outer-spin-button,
.quantity::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

</style>


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



@include('admin.layouts.message')


<section class="offer-area offer-area-four pt-20 pb-70">
    <h1 class="text-center mt-1 mb-3">Product List</h1>



    @foreach($allrecord as $machineservice) <!-- Iterate over each Machineservice model in the collection -->
    <div class="container">
        @if($machineservice->items->isNotEmpty()) <!-- Check if the items collection for this Machineservice is not empty -->
        <h2 style="background-color: #fa5f0b; color: #fff;" id="{{$machineservice->id}}"class="text-center">{{ $machineservice->title }}</h2> <!-- Access the title of the current Machineservice -->
        @endif
        <div class="row" >
            @foreach($machineservice->items as $item) <!-- Iterate over each item associated with the current Machineservice -->
            <div id="items" class="col-sm-12 col-md-12 col-lg-4 list" style="margin-bottom:10px;">
                <div class="item item1 col-lg-12 col-md-12 col-sm-12">
                    <div class="item-left">
                        <img src="{{ asset('public/images/' . $item->image) }}" alt="{{ $item->name }}" height="100px" width="100px">
                    </div>
                    <div class="item-mid">
                        <p id="itemid" style="display:none;">{{ $item->id }}</p>
                        <h6>{{ $item->name }}</h6>
                        <p>{{ $item->box }}</p>
                        <p id="pri">₹{{ $item->price }}/-</p>
                    </div>
                    <div class="item-right">
                        <div class="quantity-input">
                            <button class="btn btn-orange btn-sm quantity-btn" onclick="decrementQuantity( {{$item->id}} , {{$item->price}} )" style="display: flex; justify-content: center; align-items: center;">-</button>
                            <input type="text" class="quantity" id="quantity_{{ $item->id }}"  pattern="[0-9]*" inputmode="numeric" value="0">

                            <button class="btn btn-orange btn-sm quantity-btn" onclick="incrementQuantity({{ $item->id }}, {{ $item->price }})" style="display: flex; justify-content: center; align-items: center;">+</button>
                        </div>
                        <div class="total">
                            <span class="total-amount" id="total_amount_{{ $item->id }}">0.00</span>
                        </div>
                    </div>


                </div>
            </div>
            
            @endforeach
        </div>
    </div>
    @endforeach
    <button class="grant-total col-lg-3 col-md-12 col-sm-12 text-center" onclick="addToCart('{{ route('cart') }}')">
    <h5 class="text-light">Add Checkout Total : ₹<span id="total_amount">0.00</span></h5>
    
</button>






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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Execute the script when the document is ready
    $(document).ready(function() {
        console.log("Page is ready");

        // Get the machine ID from the query parameter in the URL
        var urlParams = new URLSearchParams(window.location.search);
        var machineId = urlParams.get('id');
        console.log("Machine ID:", machineId);

        // Scroll to the element with the corresponding ID
        if (machineId) {
            var element = $('#' + machineId);
            if (element.length) {
                $('html, body').animate({
                    scrollTop: element.offset().top
                }, 'slow');
            }
        }
    });
</script>





    @endpush