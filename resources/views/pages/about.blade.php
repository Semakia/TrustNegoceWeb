@extends('layouts.app1')

@section('title')
    <title>Trust Negoce Comapny Ltd - About us</title>
@endsection

@section('navlink')
    <a href="/" class="nav-item nav-link ">Home</a>
    <a href="/about" class="nav-item nav-link active">About</a>
    <a href="/services" class="nav-item nav-link">Services</a>

    <a href="/contact" class="nav-item nav-link">Contact</a>
@endsection

@section('contenu')


 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <p class="about-paragraphe">Purchasing abroad can sometimes be complicated, especially when it comes to obtaining the right product quality and also importing or exporting these purchased products. TRUST NEGOCE TRADING COMPANY LTD , your solution to relieve you of these difficulties, specialized for 10 years in sourcing, we collaborate with large factories on the international level, our professionalism and our efficiency allows us to identify the interests of our customers, by adapting and evolving with them. Contact Us to start enjoying our services today.</p>
    
</div>
<!-- About End -->




<!-- Feature Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-yellow text-uppercase mb-3">Our Features</h6>
                <h1 class="mb-5">We Are Trusted Logistics and trading Company Since 2013</h1>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-globe fa-3x mb-3"></i>
                    <div class="ms-4">
                        <h5>Worldwide Service</h5>
                        <p class="mb-0">Our services and deliveries cover the entire globe.</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-shipping-fast  fa-3x flex-shrink-0" style="color: rgb(212, 181, 44);"></i>
                    <div class="ms-4">
                        <h5>On Time Delivery</h5>
                        <p class="mb-0">With our highly trained logistics team and network of experienced carriers, we can guarantee that your order will be delivered on time, every time.</p>
                    </div>
                </div>
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-headphones  fa-3x mb-3" style="color: rgb(212, 181, 44);"></i>
                    <div class="ms-4">
                        <h5>24/7 Telephone Support</h5>
                        <p class="mb-0">Always attentive to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-400 h-100" src="img/abt.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container contact-page py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                <h6 class="text-yellow text-uppercase">enjoy our services now !</h6>
                <h1 class="mb-4">Contact For Any Query</h1>
                
                <div class="bg-light p-4">
                    <form action="mailto:fgroupworldwide@protonmail.com" method="post" enctype="text/plain">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating" >
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-yellow w-100 py-3" type="submit"><span class="text-white ">Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDJ3fB8HRl1kBuO43VUJCIW8VqU1alNlPg &q=Chine, Guang Dong Sheng, Guang Zhou Shi, Li Wan Qu, 鹤洞路226号 邮政编码: 510375"
                    frameborder="0" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Team End -->

@endsection