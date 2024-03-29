@extends('machine.layout.app')

@section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url('{{ asset('public/machine/images/banner1.png') }}');"
>
	<div class="container text-center">
		<h1>Contact Us</h1>
	</div>
</section>
<!--End breadcrumb area-->




            @include('machine.layout.message')
<!--Start contact form area-->
<section class="contact-form-area sec-padd-top">
    <div class="container">
        <div class="section-title">
            <h2>get in <span class="thm-color">touch</span></h2>
            <p>Sometimes you want to go where everybody knows your name. And they're always glad you <br> came. Straight nin' the hills Someday the mountain will.</p>
        </div>
        
        <div class="row">
           
            <div class="col-md-8">
        
                <div class="contact-form">
                <form id="" name="" class="default-form" action="{{ route('contact.store') }}" method="post">
                @csrf

    <div class="row">
        <div class="col-md-6">
            <input type="text" name="name" value="" placeholder="Your Name*" required="">
        </div>
        <div class="col-md-6">
            <input type="text" name="phone" value="" placeholder="Phone" required> <!-- Change name to 'phone' -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <textarea name="msg" placeholder="Your Message.." value="" required></textarea> <!-- Change name to 'message' -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            
            <input style="width:100%;"class="thm-btn bg-clr1" value="Send Message"type="submit" ></input> <!-- Adjust button text for consistency -->
        </div>
    </div>
</form>

                    </form>  
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="footer-contact-info">
                    <div class="title">
                        <h4>Quick Contact</h4>
                        <p>If you are passionate about helping people: through education, or preventing then you </p>
                    </div>
                    <ul class="clearfix" id="contactDetails">
    <li>
        <div class="iocn-holder">
            <span class="fa fa-home"></span>
        </div>
        <div class="text-holder">
            <h6 id="addressLine">321, North Street,</h6>
        </div>
    </li>
    <li>
        <div class="iocn-holder">
            <span class="icon-technology-1"></span>
        </div>
        <div class="text-holder">
            <h6>Call Us On</h6>
            <p id="phoneNumber"></p>
        </div>
    </li>
    <li>
        <div class="iocn-holder">
            <span class="icon-letter-1"></span>
        </div>
        <div class="text-holder">
            <h6>Mail Us @</h6>
            <a href="#" id="emailLink"><p id="email1"></p></a>
        </div>
    </li>
</ul>

                </div>

            </div>
                
        </div>
    </div>
</section>
<!--End contact form area-->



<section class="home-google-map">
    <div>
    <iframe src="https://www.google.com/maps/d/embed?mid=1JcCldOwiT3cwfS9DiFei46obpBY&ehbc=2E312F" width="100%" height="480"></iframe>
    </div>

</section>

<!-- <div class="call-out2">
    <div class="container">
        <div class="clearfix">
            <div class="float_left">
                <h4>Have any question or need any business consultation?</h4>
            </div>
            <div class="float_right">
                <a href="contact.html" class="thm-btn bg-clr2">Contact Us</a>
            </div>
        </div>
                
    </div>
</div> -->
@endsection

@push('scripts')
<script>

</script>
@endpush
