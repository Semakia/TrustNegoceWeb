@extends('layouts.app1')

@section('title')
    <title>Trust Negoce Comapny Ltd - Contact</title>
@endsection

@section('navlink')
    <a href="/" class="nav-item nav-link">Home</a>
    <a href="/about" class="nav-item nav-link">About</a>
    <a href="/services" class="nav-item nav-link">Services</a>

    <a href="/contact" class="nav-item nav-link active">Contact</a>
@endsection

@section('contenu')


<!-- Page Header Start -->
<div class="container-fluid page-header2 py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container contact-page py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                <h6 class="text-yellow text-uppercase">Get In Touch</h6>
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
<!-- Contact End -->
@endsection
