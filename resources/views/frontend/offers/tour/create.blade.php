@extends('layouts.frontend')

@section('page_title', '| HOME')

@section('stylesheet')
    {{--  External CSS  
    <link href="{{ asset('frontend/css/datepicker.css') }}" rel="stylesheet"> --}}
    
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Your Tour Package Details</h1>
                            <p>Have a Tour With Us</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    {{-- Tour Registration Page --}}
    <section class="tourdetails">
        <div class="container">
            <div class="row tourdetailsrow">
                <div class="col-md-4 offset-md-8">
                    <div class="row  animated bounceInLeft delay-2s">
                        <div class="col-md-2">
                            <div class="edit-button">
                                <button type="edit" class="btn btn-submit">Edit</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="create-button">
                                <button type="create" class="btn btn-submit">Registration</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12  animated bounceInRight delay-2s">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tourdetails_info">
                                <p class="user_name">
                                    <b>Name: </b>
                                    <span class="user_input_name"></span>
                                </p>
                                <p class="user_birthday">
                                    <b>Birthday: </b>
                                    <span class="user_input_birthday"></span>
                                </p>
                                <p class="user_email">
                                    <b>Email: </b>
                                    <span class="user_input_email"></span>
                                </p>
                                <p class="user_mobileno">
                                    <b>Mobile No: </b>
                                    <span class="user_input_mobileno"></span>
                                </p>
                                <p class="user_bloodgroup">
                                    <b>Blood Group: </b>
                                    <span class="user_input_bloodgroup"></span>
                                </p>
                                <p class="user_presentaddress">
                                    <b>Present Address: </b>
                                    <span class="user_input_presentaddress"></span>
                                </p>
                                <p class="user_personnumber">
                                    <b>No of Traveler: </b>
                                    <span class="user_input_personnumber"></span>
                                </p>
                                <p class="user_passportno">
                                    <b>Passport No: </b>
                                    <span class="user_input_passportno"></span>
                                </p>
                                <p class="user_travelfrom">
                                    <b>Travel From: </b>
                                    <span class="user_input_travelfrom"></span>
                                </p>
                                <p class="user_travelto">
                                    <b>Travel To: </b>
                                    <span class="user_input_travelto"></span>
                                </p>
                                <p class="user_airticket_need">
                                    <b>Do you need air ticket?: </b>
                                    <span class="user_airticket_needresult"></span>
                                </p>
                                <p class="user_airticketfrom">
                                    <b>Air Ticket From: </b>
                                    <span class="user_input_airticketfrom"></span>
                                </p>
                                <p class="user_airticketto">
                                    <b>Air Ticket To: </b>
                                    <span class="user_input_airticketto"></span>
                                </p>
                                <p class="user_airticketno">
                                    <b>How many air ticket?: </b>
                                    <span class="user_input_airticketno"></span>
                                </p>
                                <p class="user_airticketclass">
                                    <b>Air Ticket Class: </b>
                                    <span class="user_input_airticketclass"></span>
                                </p>
                                <p class="user_trainticket_need">
                                    <b>Do you need train ticket?: </b>
                                    <span class="user_trainticket_needresult"></span>
                                </p>
                                <p class="user_trainticketfrom">
                                    <b>Train Ticket From: </b>
                                    <span class="user_input_trainticketfrom"></span>
                                </p>
                                <p class="user_trainticketto">
                                    <b>Train Ticket To: </b>
                                    <span class="user_input_trainticketto"></span>
                                </p>
                                <p class="user_trainticketno">
                                    <b>How many train ticket?: </b>
                                    <span class="user_input_trainticketno"></span>
                                </p>
                                <p class="user_trainticketclass">
                                    <b>Train Ticket Class: </b>
                                    <span class="user_input_trainticketclass"></span>
                                </p>
                                <p class="user_hotelneed">
                                    <b>Do you need Hotel Booking?: </b>
                                    <span class="user_input_hotelneed"></span>
                                </p>
                                <p class="user_hotelroomselect">
                                    <b>Selected Room: </b>
                                    <span class="user_input_hotelroomselect"></span>
                                </p>
                                <p class="user_whichhotel">
                                    <b>Which Hotel?: </b>
                                    <span class="user_input_whichhotel"></span>
                                </p>
                                <p class="user_hotelcheckin">
                                    <b>Hotel Check In: </b>
                                    <span class="user_input_hotelcheckin"></span>
                                </p>
                                <p class="user_hotelcheckout">
                                    <b>Hotel Check Out: </b>
                                    <span class="user_input_hotelcheckout"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="final-next-button text-center">
                                <button type="submit" class="btn hvr-outline-out">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
