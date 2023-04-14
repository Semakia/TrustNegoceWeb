@extends('layouts.app1')

@section('title')
    <title>Trust Negoce  Trading Comapny  Ltd - Services</title>
@endsection

@section('navlink')
    <a href="/" class="nav-item nav-link ">Home</a>
    <a href="/about" class="nav-item nav-link">About</a>
    <a href="/services" class="nav-item nav-link active">Services</a>

    <a href="/contact" class="nav-item nav-link">Contact</a>
@endsection

@section('contenu')


    <!-- Page Header Start -->
    <div class="container-fluid page-header1 py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.35s">
                <h6 class="text-yellow text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>

            <div class="text-center wow fadeInUp" data-wow-delay="0.35s">
                <h3 class="mb-5" style="background-color: #d8c9f1">Trading services</h3>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/orders.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Sourcing </h4>
                        <p class="wow fadeInUp">We understand that supply chain management is crucial to the success of any business, which is why we have developed a comprehensive solution to help our customers manage their supply chain effectively.
                        </p>
                        <p class="wow fadeInUp">Our sourcing team is made up of experienced experts who work closely with our customers to understand their specific needs. We offer a full range of sourcing services, including raw material purchasing, inventory and warehouse management, freight transportation and delivery.</p>
                        <p class="wow fadeInUp">We work with trusted suppliers to ensure our customers have access to the materials and products they need for their business. We ensure that inventory is managed efficiently to avoid overstocking or stockouts. Our transport fleet is also available for fast and reliable deliveries. Contact us today to learn more about our sourcing services and how we can help you achieve your business goals.</p>
                        <a class="btn-slide mt-2" href="/contact"><i class="fa fa-arrow-right"></i><span>Contact us</span></a>
                    </div>
                </div>
               
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/casque1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Assisting & guiding</h4>
                        <p class="wow fadeInUp">Our logistics and transport company is proud to offer a highly efficient assistance service for our customers. We understand that the unexpected can happen at any time, and that's why we have a dedicated support team in place to resolve any issues quickly.</p>
                        <p class="wow fadeInUp">Our help desk is available 24 hours a day, 7 days a week to answer all your questions and concerns. Whether you need an update on the status of your shipment or are having difficulty with the delivery route, our team is here to help.  </p>
                        
                        <p class="wow fadeInUp">Our support team is made up of experienced and dedicated professionals who are trained to resolve issues quickly and respond to all inquiries with professionalism and courtesy. We are confident that you will be fully satisfied with our support service and that you will continue to trust our company for your logistics and transportation needs.</p>
                        <p class="wow fadeInUp">Get started with us now in the easiest way!</p>
                        <a class="btn-slide mt-2" href="/contact"><i class="fa fa-arrow-right"></i><span>Contact us</span></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/negotiate.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Negociation & Follow ups</h4>
                        <p class="wow fadeInUp">Being aware that the negotiation process can be complex and tedious, we have put in place a team of highly qualified professionals to handle these tasks on your behalf. </p>
                        <p class="wow fadeInUp">Our negotiation service consists of working with our transport partners to obtain the best rates and the best times for your shipments. We are committed to providing you with superior service at competitive prices to help you save money while ensuring your goods are delivered on time.</p>
                        <p class="wow fadeInUp">Our tracking team rigorously monitors your shipment from start to finish to give you complete peace of mind. We work closely with our transportation partners to provide you with real-time updates on the status of your shipment, including route details, transit times and expected delivery times. </p>
                        
                        <a class="btn-slide mt-2" href="/contact"><i class="fa fa-arrow-right"></i><span>Contact us</span></a>
                    </div>
                </div>

                
                <div class="text-center wow fadeInUp" data-wow-delay="0.35s">
                    <h3 class="mb-5" style="background-color: #d8c9f1">Logistics and transport services</h3>
                    <p>Take advantage of our wide range of transport services to meet all your needs !</p>
                </div>

                
                
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/traitement.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Handling orders</h4>
                        <p class="wow fadeInUp">Take advantage of our full range of order processing services to meet all of our customers' needs, including order receipt, order verification, order preparation and order shipping. We use state-of-the-art technologies to ensure accurate and fast order processing.</p>
                        <p class="wow fadeInUp">Our order processing team is made up of experienced experts who work closely with our customers to understand their specific needs. We offer personalized services to meet each customer's unique requirements and to ensure that orders are processed in a timely and accurate manner. We work with trusted carriers to ensure our customers' orders are shipped safely and on time.</p>
                        
                        <p class="wow fadeInUp">Contact us today to learn more about our order fulfillment services and how we can help you manage your supply chain effectively.</p>
                        <a class="btn-slide mt-2" href="/contact"><i class="fa fa-arrow-right"></i><span>Contact us</span></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/qualite1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Products quality control</h4>
                        <p class="wow fadeInUp">In order to guarantee you the perfect quality of our products, rigorous quality control processes are carried out.</p>
                        <p class="wow fadeInUp">Our product quality control department is designed to ensure that your products are accurately and thoroughly inspected and tested at every stage of the shipping process. We work closely with our transport partners to carry out thorough inspections of products before shipment, in order to detect any defects or non-conformities.</p>
                        <p class="wow fadeInUp">Our quality control team uses state-of-the-art equipment and technology to assess the quality of your products, including extensive lab testing to detect any potential issues. We pride ourselves on our ability to quickly identify any faults and quickly resolve issues to ensure your products are shipped on time and in perfect condition.</p>
                        <a class="btn-slide mt-2" href="/contact"><i class="fa fa-arrow-right"></i><span>Contact us</span></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/livraisons.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Shipping</h4>
                        <p class="wow fadeInUp"> Our shipments are made by different routes (sea, air, rail) depending on volumes and destination.</p>
                        <p class="mb-0 wow fadeInUp">We offer a full range of delivery services to meet all of our customers' needs, including local, national and international deliveries. We work with trusted carriers to ensure that our customers' goods are delivered safely and on time. 
We use state-of-the-art technology to track deliveries in real time and to update our customers on the status of their shipments.</p>
                        <p class="wow fadeInUp"> We are committed to providing fast, reliable and cost-effective service for our customers, allowing them to focus on their core business knowing that their goods are in good hands.</p>
                        <p class="wow fadeInUp"> Contact us today to learn more about our delivery services and how we can help meet your business delivery needs.</p>
                        <a class="btn-slide mt-2" href="/contact"><i class="fa fa-arrow-right"></i><span>Contact us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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

