@extends('layouts.frontend')

@section('page_title', '| HOME')

@section('stylesheet')
    
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Our Offers</h1>
                            <p>Find your offers</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    {{-- Offers Page --}}
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".itour">Tour</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".itreatment">Treatment</a></li>
                </ul><!--/#portfolio-filter-->
                
                <div class="portfolio-items">
                    <div class="col-sm-6 portfolio-item itreatment">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                <a href="#">
                                        <img src="{{ asset('frontend/images/offer/air.jpg') }}" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{Route('treatment')}}"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/18.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Air Tickets</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 portfolio-item itour">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <a href="#"><img src="{{ asset('frontend/images/offer/hospital2.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{Route('tour')}}"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/18.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Hospital Booking</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 portfolio-item itreatment">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <a href="#"><img src="{{ asset('frontend/images/offer/doctors.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{Route('treatment')}}"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/19.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Preferable Doctor</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 portfolio-item itour">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <a href="#"><img src="{{ asset('frontend/images/offer/hotel.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{Route('tour')}}"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/20.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Hotel Booking</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 portfolio-item itour">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <a href="#"><img src="{{ asset('frontend/images/offer/train.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{Route('treatment')}}"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/21.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Train Booking</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 portfolio-item itreatment">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <a ><img src="{{ asset('frontend/images/offer/hote2.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{Route('treatment')}}"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/22.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Hotel Booking </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 portfolio-item itour">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <a href="#"><img src="{{ asset('frontend/images/offer/t2.jpg') }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{Route('tour')}}"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/23.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Train</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li class="active"><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection