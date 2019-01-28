@extends('layouts.frontend')

@section('page_title', '| HOME')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">About Us</h1>
                            <p>Why our Clients love to work with us.</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="{{ asset('frontend/images/flaticon/customer.png') }}" class="margin-bottom" alt="">
                    <h1 class="margin-bottom">About Easy Travel</h1>
                    <p>Pork chop duis eu pig, labore sausage venison. Shankle fugiat duis, filet mignon tri-tip venison beef shank ribeye<br /> aliqua cillum dolore sed do in.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('frontend/images/aboutus/aboutus.jpg') }}" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top">
                    <p>Shoulder bresaola sausage consequat ground round duis excepteur exercitation landjaeger sunt. Duis officia sed frankfurter dolore pastrami tenderloin.</p>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!--/#about-company-->
    
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
                            <h2>Easy Travel</h2>
                            <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#services-->

    <section id="action">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action count">
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="7000" data-speed="3000" data-from="0"></h1>   
                            <h3>Happy Clients</h3>
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="12" data-speed="3000" data-from="0"></h1>   
                            <h3>Years in Business</h3> 
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="432" data-speed="3000" data-from="0"></h1> 
                            <h3>Cups of Coffee</h3>
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="145" data-speed="3000" data-from="0"></h1> 
                            <h3>Total Project</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Meet our Team</h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="{{ asset('frontend/images/avatars/t-1.png') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Shakib Al Mamun</h2>
                                        <p>Team Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                                <img src="{{ asset('frontend/images/avatars/t-2.png') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Abdul Mumin Maher</h2>
                                        <p>Team Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                                <img src="{{ asset('frontend/images/avatars/t-3.png') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Shah Newaz Shawn</h2>
                                        <p>Team Member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                                <img src="{{ asset('frontend/images/avatars/t-4.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Modhurima Chowdhury Proma</h2>
                                        <p>Team Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                                <div class="col-sm-3 col-xs-6">
                                        <div class="team-single-wrapper">
                                            <div class="team-single">
                                                <div class="person-thumb">
                                                    <img src="{{ asset('frontend/images/avatars/t-1.png') }}" class="img-responsive" alt="">
                                                </div>
                                                <div class="social-profile">
                                                    <ul class="nav nav-pills">
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="person-info">
                                                <h2>Shakib Al Mamun</h2>
                                                <p>Team Member</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="team-single-wrapper">
                                            <div class="team-single">
                                                <div class="person-thumb">
                                                        <img src="{{ asset('frontend/images/avatars/t-2.png') }}" class="img-responsive" alt="">
                                                </div>
                                                <div class="social-profile">
                                                    <ul class="nav nav-pills">
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="person-info">
                                                <h2>Abdul Mumin Maher</h2>
                                                <p>Team Member</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="team-single-wrapper">
                                            <div class="team-single">
                                                <div class="person-thumb">
                                                        <img src="{{ asset('frontend/images/avatars/t-3.png') }}" class="img-responsive" alt="">
                                                </div>
                                                <div class="social-profile">
                                                    <ul class="nav nav-pills">
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="person-info">
                                                <h2>Shah Newaz Shawn</h2>
                                                <p>Team Member</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="team-single-wrapper">
                                            <div class="team-single">
                                                <div class="person-thumb">
                                                        <img src="{{ asset('frontend/images/avatars/t-4.jpg') }}" class="img-responsive" alt="">
                                                </div>
                                                <div class="social-profile">
                                                    <ul class="nav nav-pills">
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="person-info">
                                                <h2>Modhurima Chowdhury Proma</h2>
                                                <p>Team Member</p>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#team-->
    
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection