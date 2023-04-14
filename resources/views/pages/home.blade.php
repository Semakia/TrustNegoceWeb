@extends('layouts.app1')

@section('title')
    <title>Trust Negoce Comapny Ltd - Home</title>
@endsection

@section('navlink')
    <a href="/" class="nav-item nav-link active">Home</a>
    <a href="/about" class="nav-item nav-link">About</a>
    <a href="/services" class="nav-item nav-link">Services</a>

    <a href="/contact" class="nav-item nav-link">Contact</a>
@endsection

@section('contenu')

     <!-- Carousel Start -->
     <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/Acceuil.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                
                                <h1 class="display-3 text-white animated slideInDown mb-4">Easily source and import your products from China to any destination </h1>
                               
                                <a href="" class="btn btn-light py-md-3 px-md-5 me-3 animated slideInLeft"><span class="text-indigo ">Learn More</span></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{-- <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Transport</span> Solution</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/logo.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp about-font" data-wow-delay="0.3s">
                    <h2 class="text-yellow text-uppercase mb-3 about-font">Who are we ?</h2>
                    <h1 class="mb-5 about-font">Experienced and international</h1>
                    <p class="mb-5">We are an experienced international trade company dedicated to helping customers import supplies and purchases while ensuring safe and well-organized shipping.</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x mb-3" style="color: rgb(212, 181, 44);" ></i>
                            <h5>Worldwide service</h5>
                            <p class="m-0">
                                Our services and deliveries cover the entire globe.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-solid fa-award fa-3x   mb-3" style="color: rgb(212, 181, 44);"></i>
                            <h5>Professional awards</h5>
                            <p class="m-0">
                                Professional certificates attest to our experience and the quality of our services.</p>
                        </div>
                    </div>
                    <a href="/about" class="btn btn-yellow py-3 px-5"><span class="text-white ">More About us</span></a></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-yellow text-uppercase">A professional and trustworthy service</h6>
                
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/Livre.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Handling orders</h4>
                        
                        <a class="btn-slide  mt-2 "  href="/services"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/casque1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Assisting & guiding</h4>
                        <a class="btn-slide mt-2" href="/contact"><i class="fa fa-headphones " ></i><span>Contact Us</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/qualite.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Products quality control</h4>
                        <a class="btn-slide mt-2" href="/services"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/services-o.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Sourcing </h4>
                        
                        <a class="btn-slide mt-2" href="/services"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/negotiate.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Negociation & Follow ups</h4>
                        <a class="btn-slide mt-2" href="/services"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/Import.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Shipping</h4>
                       
                        <a class="btn-slide mt-2" href="/services"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-yellow mb-5">Step By step</h1>
                    <h4>Start with us in the best way !</h4>
                    <div class="d-flex mb-7 wow fadeInUp" data-wow-delay="0.3s">
                       <h6  class="text-yellow mb-5"><i class="fa fa-solid fa-sms fa-3x   mb-3" style="color: #4929d6;"></i></h6>
                        <div class="ms-4">
                            
                            <p class="mb-0">Submit your request telling us what you need. Our customer support will send you an email within a few hours, assigning you an agent.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">

                        <h6  class="text-yellow mb-5"><i class="fa fa-solid fa-cart-arrow-down fa-3x   mb-3" style="color: #4929d6;"></i></h6>
                        
                        <div class="ms-4">
                            <p class="mb-0">Start sourcing products from China. We will send you quotes in less than 2 working days. Then you can order product samples to confirm the quality. You can also do sample customization.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                        <h6  class="text-yellow mb-5"><i class="fa fa-solid fa-check fa-3x   mb-3" style="color: #4929d6;"></i></h6>
                        <div class="ms-4">    
                            <p class="mb-0">Confirm your products details before bulk order. We will coordinate with the factories, follow the production, check the products correctly.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                        <h6  class="text-yellow mb-5"><i class="fa fa-solid fa-hands-helping fa-3x   mb-3" style="color: #4929d6;"></i></h6>
                        <div class="ms-4">    
                            <p class="mb-0">We help you collect the products from our warehouse, inspect the quality and arrange shipment by courier, sea or air to any address in your country.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/who.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-yellow text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Qoute!</h1>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-yellow p-3 text-white " style="color: rgb(212, 181, 44);"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-yellow m-0">+8615626248024</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form action="mailto:fgroupworldwide@protonmail.com" method="post" enctype="text/plain">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                               
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Your mesage"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-yellow w-100 py-3" type="submit"><span class="text-white ">Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
    <!-- Quote End -->


 


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h1 class="mb-0">They trusted  us !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <h4 class="mb-3 " style="text-align: center" >Exprella Event</h4>
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/Exprella.jpg" alt="">
                    </div>
                    
                    
                </div>
                <div class="service-item p-4">
                    <h4 class="mb-3 " style="text-align: center" >APTIS</h4>
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/APTIS.jpg" alt="">
                    </div>
                   
                    
                </div>
                
                <div class="service-item p-4">
                    <h4 class="mb-3 " style="text-align: center">Architecture réseaux sydtème informatique</h4>
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/ARSI.jpg" alt="">
                    </div>
                    
                    
                </div>

                <div class="service-item p-4">
                    <h4 class="mb-3 " style="text-align: center">FASO TECH</h4>
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/FASO TECH.jpg" alt="">
                    </div>
                    
                    
                </div>

                <div class="service-item p-4">
                    <h4 class="mb-3 " style="text-align: center">ANAXAR</h4>
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/ANAXAR.jpg" alt="">
                    </div>
                    
                    
                </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    
@endsection


   