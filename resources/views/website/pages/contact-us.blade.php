
@extends('website.layouts.main')


@section('content')
        <!-- End of header area -->
        
        <!--breadcumb area start -->
        <div class="breadcumb-area breadcumb-3 overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Contact Details</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        
        <!--map area start-->
        <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <!--map area end-->
        
        <!--contact info are start-->
        <div class="contact-info ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                         <div class="row">
                             <div class="col-lg-12">
                                 <form id="contact-form" class="row" action="https://whizthemes.com/mail-php/other/mail.php">
                                     <div class="col-md-6">
                                         <div class="input-box mb-20">
                                             <input name="con_name" class="info" placeholder="Name*" type="text">
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="input-box mb-20">
                                             <input name="con_email" class="info" placeholder="Email" type="email">
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="input-box mb-20">
                                             <input name="con_phone" class="info" placeholder="Phone" type="text">
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="input-box mb-20">
                                             <input name="con_country" class="info" placeholder="Country" type="text">
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="input-box mb-20">
                                             <textarea name="con_message" class="area-tex" placeholder="Your Message*"></textarea>
                                         </div>
                                     </div>
                                     <div class="col-12">
                                         <div class="input-box">
                                             <button name="submit" class="sbumit-btn" type="submit">Submit</button>
                                             <p class="form-messege"></p>
                                         </div>
                                     </div>
                                 
                                 </form>
                             </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-footer contact-us contact-us-2">
                            <div class="heading-title text-center mb-50">
                                <h5 class="uppercase">Contact Info</h5> 
                                </div>
                            <ul class="contact-info">
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                                    <div class="contact-text">
                                        <p><span>01234567890</span> <span>01234567890</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                                    <div class="contact-text">
                                        <p><span><a href="#">demo@example.com</a></span> <span><a href="#">info@example.com</a></span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                                    <div class="contact-text">
                                        <p><span>777, Seventh Streeth, Rampura,</span> <span>Dhaka, Bangladesh</span></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="social-icon-wraper mt-25">
                                <div class="social-icon socile-icon-style-1">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google-glass"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-blogger"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                       <div class="pos-rltv">
                            <div class="contact-des">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact info are end-->
        
        <!-- footer area start-->
      @endsection