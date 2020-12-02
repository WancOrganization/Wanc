<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/wancimages/wancLogo.svg')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Wanc Studios</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{asset('Main/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('Main/css/style.css')}}" rel="stylesheet">
</head>

<body class="background-black">


<!-- Body Inner -->
<div class="body-inner" style="background-color: #121212;">

    <header id="header" data-transparent="true" class="dark">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo">
                    <img src="{{asset('Main/images/wancimages/wancLogo.svg')}}" alt="">
                    <span class="wanc"
                          style="color: #fdc022; font-family: Square721 BT; font-weight: 100; font-size: 20px;">WANC</span>
                    <span class="wanc"
                          style="color: #f5832d; font-family: Square721 BT; font-weight: 100; font-size: 20px;">_</span>
                    <span class="studio"
                          style="color: #e02013; font-family: Square721 BT; font-weight: 100; font-size: 20px;">STUDIOS</span>
                    </a>
                </div>
                <!--End: Logo-->
                <!--Navigation-->
                <div id="mainMenu" class="menu-one-page">
                    <div class="container">
                        <nav>
                            <!--Left Menu-->
                            <ul>
                                <li><a href="#slider"><span>Home</span></a></li>
                                <li><a href="#wancstudios"><span>About US</span></a></li>
                                <li><a href="#services"><span>Services</span></a></li>
                                <li><a href="#portfolio"><span>Portfolio</span></a></li>
                                <li><a href="#feature"><span>Feature work</span></a></li>
                                <li><a href="#contactus"><span>Contact Us</span></a></li>
                                @if($feedbacks->count()>0)
                                <li><a href="#testimonials"><span>Testimonials</span></a></li>
                                @endif
                                <li><a href="#feedback"><span>Feedback</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->
                <nav id="dotsMenu">
                    <ul>
                        <li><a href="#slider"><span>Home</span></a></li>
                        <li><a href="#wancstudios"><span>About US</span></a></li>
                        <li><a href="#services"><span>Services</span></a></li>
                        <li><a href="#portfolio"><span>Portfolio</span></a></li>
                        <li><a href="#feature"><span>Feature work</span></a></li>
                        <li><a href="#contactus"><span>Contact Us</span></a></li>
                        @if($feedbacks->count()>0)
                        <li><a href="#testimonials"><span>Testimonials</span></a></li>
                        @endif
                        <li><a href="#feedback"><span>Feedback</span></a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- end: Header -->


    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen mb-2">

        <!-- Slide 1 -->
        <div class="slide" style="background-image:url({{asset('Main/images/wancimages/wancbg4.png')}});">
            <div class="container-wide">
                <div id="particles-stars" class="particles"></div>
                <div class="text-center">
                    <img src="{{asset('Main/images/wancimages/wancLogo.svg')}}" alt="" width="25%">
                    <div class="">
                        <h4><span style="color: #fdc022; font-family: Square721 BT; font-weight: 100; font-size: 20px;">WANC</span>
                            <span style="color: #f5832d; font-family: Square721 BT; font-weight: 100; font-size: 20px;">_</span>
                            <span style="color: #e02013; font-family: Square721 BT; font-weight: 100; font-size: 20px;">STUDIOS</span>
                        </h4>
                    </div>

                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->
    </div>
    <!--end: Inspiro Slider -->


    <!-- SECTION DARK -->
    <section id="wancstudios" class="" style="background-color: #1a1a1a;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="heading-text heading-section text-left text-light mt-5">
                        <h1 class="text-medium" style="font-weight: 400;">Wanc Studios</h1>
                    </div>
                    <div class="text-light p-r-100" style="font-weight: 400;">
                        <p class="p-r-50" style="font-size: 16px;"> We are creative firm that design your dreams
                            into innovations. Your dream design is about to get real.
                            Your ideas with our innovation will result in unique outcomes. Unlike your friend we
                            will be always on time.
                            Just Like you value our commitments, We value your trust.
                        </p>
                    </div>


                </div>
                <div class="col-lg-5"><img alt="" src="{{asset('Main/images/wancimages/featureimage.png')}}"
                                           width="70%"></div>

            </div>
        </div>
    </section>
    <!-- end: SECTION DARK -->


    <!-- SERVICES -->
    <section id="services" class="text-light" style="background-color: #121212;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pt-5 mt-5 pr-5">

                    <div class="pt-5">
                        <img src="{{asset('Main/images/wancimages/serviceimage.png')}}" alt="" style="width: 80%;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="heading-text heading-section">
                            <h1 class="text-medium ">Best Services Around</h1>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon-box effect small clean">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-desktop"></i></a>
                                </div>
                                <h3>Website Design</h3>
                                <p>Great Web Design is needed to convert website visitors to customers. </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon-box effect small clean">
                                <div class="icon">
                                    <a href="#"><i class="fab fa-android"></i></a>
                                </div>
                                <h3>Mobile Apps</h3>
                                <p>Mobile Applications extend the capabilities of existing systems, We develop
                                    native applications for Android devices.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon-box effect small clean">
                                <div class="icon">
                                    <i class="fab fa-superpowers"></i></a>
                                </div>
                                <h3>Branding &amp; Identity</h3>
                                <p>A Brand design represents you. We create something you can stand behind.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="icon-box effect small clean">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-gamepad"></i></a>
                                </div>
                                <h3>Game Design</h3>
                                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum
                                    porttitor cursumus.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon-box effect small clean">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-trophy"></i></a>
                                </div>
                                <h3>Graphics Design</h3>
                                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum
                                    porttitor cursumus.</p>
                            </div>
                        </div>
                        <div class="col-lg-6  flipInY delay-4s">
                            <div class="icon-box effect small clean ">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-thumbs-up"></i></a>
                                </div>
                                <h3>E-Commerce Development</h3>
                                <p>E-Commerce customers must trust your store and expect ease of use. We got this.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SERVICES -->


    <!-- Portfolio -->
    <section id="portfolio" style="background-color: #1a1a1a;">

        <div class="portfolio">
            <div class="text-light text-center pb-5">
                <h1 class="text-uppercase">OUR WORK</h1>
            </div>
            <!-- Portfolio Items -->
            <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="0">

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="{{asset('Main/images/portfolio/carshield.png')}}" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <h3>Website Design</h3><br>
                            <a href="https://windshieldcare.in/" target="_blank"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->


                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="{{asset('Main/images/portfolio/WCVisitingCard.png')}}" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <h3>Branding & Identity</h3>
                            <span>Visiting Card</span>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->

                <!-- portfolio item -->
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="{{asset('Main/images/portfolio/65.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- end: portfolio item -->


            </div>
            <!-- end: Portfolio Items -->

        </div>
    </section>
    <!-- end: Portfolio -->


    <section id="feature" class="no-padding equalize" data-equalize-item=".text-box">
        <div class="row col-no-margin">
            <!--Box 1-->
            <div class="col-lg-3" style="background-color: #2F2F2F;">
                <div class="text-box">
                    <a href="#">
                        <i class="fa fa-paper-plane"></i>
                        <h3>Tags &amp; Models </h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <!--End: Box 1-->
            <!--Box 2-->
            <div class="col-lg-3" style="background-color: #383838;">
                <div class="text-box">
                    <a href="#">
                        <i class="fas fa-chart-pie"></i>
                        <h3>Our charts </h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <!--End: Box 2-->
            <!--Box 3-->
            <div class="col-lg-3" style="background-color: #313131;">
                <div class="text-box">
                    <a href="#">
                        <i class="far fa-lightbulb"></i>
                        <h3>Light &amp; Dark</h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <!--End: Box 3-->
            <!--Box 4-->
            <div class="col-lg-3" style="background-color: #383838;">
                <div class="text-box">
                    <a href="#">
                        <i class="fa fa-language"></i>
                        <h3>RTL Support</h3>
                        <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                    </a>
                </div>
            </div>
            <!--End: Box 4-->
        </div>
    </section>




    <!-- CONTENT -->
    <section id="contactus" class=" text-light" style="background-color: #121212;">
        <div class="container"
             style="background-image: url({{asset('Main/homepages/branding/images/background-4.png')}});">
            <div class="row mb-5">
                <div class="text-center col-md-3 p-r-50">
                    <img src="{{asset('Main/images/wancimages/Getintouchleft.svg')}}" alt="" width="80%">
                </div>
                <div class="text-center col-md-6 p-t-60">
                    <h1 class="text-uppercase">Let’s Talk Business</h1>
                </div>
                <div class="text-center col-md-3 p-l-50">
                    <img src="{{asset('Main/images/wancimages/Getintouchright.png')}}" alt="" width="80%">
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-6 mt-5">
                    <div class="mb-4">
                        <h4><i class="fa mr-4 fa-phone"></i>Phone : +91 91670 07538</h4>

                    </div>
                    <div class="mt-4">
                        <h4><i class="fa mr-4 fa-envelope"></i>Email : wancstudios@gmail.com</h4>

                    </div>
                    <div
                        class="col-m mt-4 social-icons social-icons-medium social-icons-border social-icons-colored-hover">
                        <ul>
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-dribbble"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-xing"><a href="#"><i class="fa fa-play"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="m-t-30">
                        <form class="widget-contact-form" novalidate action="" role="form"
                              method="post" id="get-in-touch-form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="name" required
                                           class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Phone">Phone</label>
                                    <input type="tel" aria-required="true" name="mobile_number"
                                           required class="form-control required phone"
                                           placeholder="Enter your phone number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="subject" required
                                           class="form-control required" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="message" required rows="5"
                                          class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>

                            <button class="btn border-dark background-grey text-dark" type="submit"
                                    id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section> <!-- end: Content -->


    @if($feedbacks->count()>0)
    <!-- Testimonial -->
    <section id="testimonials" class="" style="background-color: #1a1a1a;">
            <div class="text-light text-center pb-5">
                <h1 class="text-uppercase">Testimonials</h1>
            </div>
            <div class="container">
                <!-- Testimonials -->
                <div class="row">
                    <div class="col-md-9">
                        <div class="carousel arrows-visibile testimonial testimonial-single" data-items="1" data-loop="true"
                            data-autoplay="true" data-autoplay="3500" data-arrows="false">

                            <!-- Testimonials item -->
                            @foreach($feedbacks as $f)
                                <div class="testimonial-item">
                                    <p>{{$f->description}}</p>
                                    <span>{{$f->name}}</span>
                                    <span>{{$f->designation}}</span>
                                </div>
                        @endforeach
                        <!-- end: Testimonials item-->


                        </div>
                    </div>
                    <div class="col-md-3 pt-5">
                        <img src="{{asset('Main/images/wancimages/testimonials.png')}}" alt="" width="90%">
                    </div>


                </div>

                <!-- end: Testimonials -->
            </div>
        </section>
        <!-- end: Testimonial -->
        @endif


 <!-- FeedBack -->
 <section id="feedback" class=" text-light" style="background-color: #121212;">
        <div class="container"
             style="background-image: url({{asset('Main/homepages/branding/images/background-4.png')}});">
            <div class="row mb-5">

                <div class="text-center col-md-6 p-t-60">
                    <h1 class="text-uppercase">FEEDBACK</h1>
                </div>

            </div>

            <div class="row ">
                <div class="col-lg-6">
                    <div class="m-t-30">
                        <form class="widget-contact-form" novalidate action="" role="form"
                              method="post" id="feedback-form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="name" required
                                           class="form-control required name" placeholder="Enter your Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Designation</label>
                                    <input type="text" aria-required="true" name="designation" required
                                           class="form-control required name" placeholder="Enter your Designation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Feedback</label>
                                <textarea type="text" name="description" required rows="5"
                                          class="form-control required" placeholder="Enter your Feedback"></textarea>
                            </div>

                            <button class="btn border-dark background-grey text-dark" type="submit"
                                    id="feedback-form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send Feedback
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5">
                    <div class="">
                        <img src="{{asset('Main/images/wancimages/feedback.png')}}" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 m-t-100 text-center">
            <img src="{{asset('Main/images/wancimages/contact.png')}}" alt="" width="100%">
        </div>
        </div>

    </section> <!-- end: FeedBack -->






    <!-- Footer -->
    <footer id="footer">
        <div class="pt-4 pb-4 text-light" style="background-color: #121212;">
            <div class="container">
                <div class="copyright-text text-center">
                    <h4>&copy; 2020 Wanc Studios
                        <img class="pb-2" src="{{asset('Main/images/wancimages/wancLogo.svg')}}" alt="">
                        All Rights Reserved.
                    </h4>
                </div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->


    <div class="modal fade" id="get-in-touch-success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Thank you. we will contact you soon.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="feedback-success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Thank you. your feedback has been submitted with us.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end: Body Inner -->

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="{{asset('Main/js/jquery.js')}}"></script>
<script src="{{asset('Main/js/plugins.js')}}"></script>

<!--Template functions-->
<script src="{{asset('Main/js/functions.js')}}"></script>

<script src="{{asset('Main/plugins/particles/particles.js')}}" type="text/javascript"></script>
<!--Particles-->
<script src="{{asset('Main/plugins/particles/particles-dots.js')}}" type="text/javascript"></script>
<!--Particles stars-->
<script src="{{asset('Main/plugins/particles/particles-stars.js')}}" type="text/javascript"></script>
<!--Particles bubbles-->
<script src="{{asset('Main/plugins/particles/particles-bubble.js')}}" type="text/javascript"></script>
<!--Particles snow-->
<script src="{{asset('Main/plugins/particles/particles-snow.js')}}" type="text/javascript"></script>

<script>
    $('#form-submit').on("click", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '{{Route('main.get.in.touch.store')}}',
            data: $('#get-in-touch-form').serialize(),
            success: function (data) {
                $("#get-in-touch-form").trigger("reset");
                $('#get-in-touch-success-modal').modal('show');
            }
        });
    });

    $('#feedback-form-submit').on("click", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '{{Route('main.feedback.store')}}',
            data: $('#feedback-form').serialize(),
            success: function (data) {
                $("#feedback-form").trigger("reset");
                $('#feedback-success-modal').modal('show');
            }
        });
    });
</script>
</body>

</html>
