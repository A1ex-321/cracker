@extends('crack.layout.app')

@section('content')
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>Contact Us</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    Contact Us
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact -->
        <section class="contact-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-item contact-left">
                            <h3>Our Located Place</h3>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis velit libero vero, aliquid magnam sed, quidem labore unde aspernatur esse iusto quo quas, dolorum atque dignissimos asperiores. Ab, est accusantium.</p>-->
                            <ul>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    Address: <br>
                                    <div class="address"  style="padding-left: 27px;">
                                        67, F-1, Bus stand Backside, <br>
                                    Gandhi Rd, Deivanai Nagar, <br>
                                    Parapatti, Sivakasi, <br>
                                    Tamil Nadu 626123
                                    </div>
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <a href="info@yanaicrackers.com">
                                        info@yanaicrackers.com
                                    </a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:+918098144662">
                                        Phone: +91 80981 44662
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-item contact-right">
                            <h3>Get In Touch</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="number" name="phone" id="email" class="form-control" required data-error="Please enter your email" placeholder="Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

            
                                    
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea name="msg" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12 col-lg-12">
                                        <button type="submit" class="contact-btn btn">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Map -->
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.721936889139!2d77.79896177363749!3d9.445764482328856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cee63071812b%3A0xac6d98321020a1a2!2sGandhi%20Rd%2C%20Parapatti%2C%20Sivakasi%2C%20Tamil%20Nadu%20626123!5e0!3m2!1sen!2sin!4v1693839515893!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Map -->
@endsection

@push('scripts')
<script>

</script>
<script>

</script>

</script>

@endpush