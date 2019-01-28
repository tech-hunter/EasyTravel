@extends('layouts.frontend')

@section('page_title', '| HOME')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="home-slider">
        <div class="container">
            <div class="main-slider">
                <div class="slide-text">
                    <h1>Easy Travel</h1>
                    <p><span class="upper">W</span>e are boudin doner frankfurter pig. Cow shank bresaola pork loin tri-tip tongue venison pork belly meatloaf short loin landjaeger biltong beef ribs shankle chicken andouille.</p>
                    @if( !Auth::check())
                    <a href="{{Route('login')}}" class="btn btn-common">LOG IN</a>
                @endif
                </div>
                <img src="{{ asset('frontend/images/home/slider/slide1/house.png') }}" class="img-responsive slider-house" alt="slider image">
                <img src="{{ asset('frontend/images/home/slider/slide1/circle1.png') }}" class="slider-circle1" alt="slider image">
                <img src="{{ asset('frontend/images/home/slider/slide1/circle2.png') }}" class="slider-circle2" alt="slider image">
                <img src="{{ asset('frontend/images/home/slider/slide1/cloud1.png') }}" class="slider-cloud1" alt="slider image">
                <img src="{{ asset('frontend/images/home/slider/slide1/cloud2.png') }}" class="slider-cloud2" alt="slider image">
                <img src="{{ asset('frontend/images/home/slider/slide1/cloud3.png') }}" class="slider-cloud3" alt="slider image">
                <img src="{{ asset('frontend/images/home/slider/slide1/sun.png') }}" class="slider-sun" alt="slider image">
                <img src="{{ asset('frontend/images/home/cycle.png') }}" class="slider-cycle" alt="">
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{ asset('frontend/images/flaticon/customer-support.png') }}" alt="">
                        </div>
                        <h2>24 Hour Service</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="{{ asset('frontend/images/flaticon/calculator.png') }}" alt="">
                        </div>
                        <h2>Reliable Costing</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="{{ asset('frontend/images/flaticon/globe.png') }}" alt="">
                        </div>
                        <h2>TravelNak</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">What We Offer</h1>
                            <p>We cover all your need regarding your travel &amp; care about your choice.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('frontend/images/offer/hotel.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Hotel Booking</h2>
                        <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Air Ticket Booking</h2>
                        <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('frontend/images/offer/air.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('frontend/images/offer/train.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Train Ticket Booking</h2>
                        <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Hospital Booking</h2>
                        <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('frontend/images/offer/hospital.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#features-->

     <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="{{ asset('frontend/images/home/clients.png') }}" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-slider">
                        <div id="myCarousel" class="carousel slide wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms data-ride="carousel">
                            
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>   
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="clients-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-left d-flex mr-3">
                                                    <img src="{{ asset('frontend/images/avatars/t-5.png') }}" alt="">                                      
                                                </div>
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Paula Wilson</b></div>
                                                        <div class="details">Media Analyst / SkyNet</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="clients-details">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-left d-flex mr-3">
                                                    <img src="{{ asset('frontend/images/avatars/t-1.jpg') }}" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Antonio Moreno</b></div>
                                                        <div class="details">Web Developer / SoftBee</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                                <div class="item carousel-item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="clients-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-left d-flex mr-3">
                                                    <img src="{{ asset('frontend/images/avatars/t-2.jpg') }}" alt="">                                      
                                                </div>
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Michael Holz</b></div>
                                                        <div class="details">Web Developer / DevCorp</div>                                          
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="clients-details">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-left d-flex mr-3">
                                                    <img src="{{ asset('frontend/images/avatars/t-2.jpg') }}" alt="">                                      
                                                </div>
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Mary Saveley</b></div>
                                                        <div class="details">Graphic Designer / MarsMedia</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                                <div class="item carousel-item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="clients-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-left d-flex mr-3">
                                                    <img src="{{ asset('frontend/images/avatars/t-3.jpg') }}" alt="">                                      
                                                </div>
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Martin Sommer</b></div>
                                                        <div class="details">SEO Analyst / RealSearch</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="clients-details">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-left d-flex mr-3">
                                                    <img src="{{ asset('frontend/images/avatars/t-4.png') }}" alt="">                                      
                                                </div>
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>John Williams</b></div>
                                                        <div class="details">Web Designer / UniqueDesign</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->

    <!-- Contact us -->
    <div class="contact">
        <div class="contact_background fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact_image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact_form_container" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="contact_title">get in touch</div>
                            <form action="#" id="contact_form" class="contact_form">
                                <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">

                                <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">

                                <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">

                                <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>



                                <button type="submit" id="" class="hvr-rectangle-out btn btn-default button">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Contact us -->
    
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection