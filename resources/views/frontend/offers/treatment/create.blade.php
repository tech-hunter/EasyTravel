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
                            <h1 class="title">Your Treatment Package Details</h1>
                            <p>Have a Tour With Us</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    {{-- treatment Registration Details --}}
    <section class="tourdetails">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-md-8">
                    <div class="row  animated bounceInLeft delay-2s">
                        <div class="col-2">
                            <div class="edit-button">
                                <button type="edit" class="btn hvr-outline-out">Edit</button>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="create-button">
                                <button type="create" class="btn hvr-outline-out">Registration</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col  animated bounceInRight delay-2s">
                    <div class="row">
                        <div class="col">
                            <div class="tourdetails_info">
                                <p class="treatment_user_name">
                                    <b>Name: </b>
                                    <span class="treatment_user_input_name"></span>
                                </p>
                                <p class="treatment_user_birthday">
                                    <b>Birthday: </b>
                                    <span class="treatment_user_input_birthday"></span>
                                </p>
                                <p class="treatment_user_email">
                                    <b>Email: </b>
                                    <span class="treatment_user_input_email"></span>
                                </p>
                                <p class="treatment_user_mobileno">
                                    <b>Mobile No: </b>
                                    <span class="treatment_user_input_mobileno"></span>
                                </p>
                                <p class="treatment_user_bloodgroup">
                                    <b>Blood Group: </b>
                                    <span class="treatment_user_input_bloodgroup"></span>
                                </p>
                                <p class="treatment_user_presentaddress">
                                    <b>Present Address: </b>
                                    <span class="treatment_user_input_presentaddress"></span>
                                </p>
                                <p class="treatment_user_personnumber">
                                    <b>No of Traveler: </b>
                                    <span class="treatment_user_input_personnumber"></span>
                                </p>
                                <p class="treatment_user_passportno">
                                    <b>Passport No: </b>
                                    <span class="treatment_user_input_passportno"></span>
                                </p>
                                <p class="treatment_user_whichplace">
                                    <b>Which Place? : </b>
                                    <span class="treatment_user_input_whichplace"></span>
                                </p>
                                <p class="treatment_user_hospital">
                                    <b>Hospital: </b>
                                    <span class="treatment_user_input_hospital"></span>
                                </p>
                                <p class="treatment_user_medicaldepartment">
                                    <b>Medical Department: </b>
                                    <span class="treatment_user_input_medicaldepartment"></span>
                                </p>
                                <p class="treatment_user_preferabledoctor">
                                    <b>Preferable Doctor: </b>
                                    <span class="treatment_user_input_preferabledoctor"></span>
                                </p>
                                <p class="treatment_user_airticket_need">
                                    <b>Do you need air ticket?: </b>
                                    <span class="treatment_user_airticket_needresult"></span>
                                </p>
                                <p class="treatment_user_airticketfrom">
                                    <b>Air Ticket From: </b>
                                    <span class="treatment_user_input_airticketfrom"></span>
                                </p>
                                <p class="treatment_user_airticketto">
                                    <b>Air Ticket To: </b>
                                    <span class="treatment_user_input_airticketto"></span>
                                </p>
                                <p class="treatment_user_airticketno">
                                    <b>How many air ticket?: </b>
                                    <span class="treatment_user_input_airticketno"></span>
                                </p>
                                <p class="treatment_user_airticketclass">
                                    <b>Air Ticket Class: </b>
                                    <span class="treatment_user_input_airticketclass"></span>
                                </p>
                                <p class="treatment_user_trainticket_need">
                                    <b>Do you need train ticket?: </b>
                                    <span class="treatment_user_trainticket_needresult"></span>
                                </p>
                                <p class="treatment_user_trainticketfrom">
                                    <b>Train Ticket From: </b>
                                    <span class="treatment_user_input_trainticketfrom"></span>
                                </p>
                                <p class="treatment_user_trainticketto">
                                    <b>Train Ticket To: </b>
                                    <span class="treatment_user_input_trainticketto"></span>
                                </p>
                                <p class="treatment_user_trainticketno">
                                    <b>How many train ticket?: </b>
                                    <span class="treatment_user_input_trainticketno"></span>
                                </p>
                                <p class="treatment_user_trainticketclass">
                                    <b>Train Ticket Class: </b>
                                    <span class="treatment_user_input_trainticketclass"></span>
                                </p>
                                <p class="treatment_user_hotelneed">
                                    <b>Do you need Hotel Booking?: </b>
                                    <span class="treatment_user_input_hotelneed"></span>
                                </p>
                                <p class="treatment_user_hotelroomselect">
                                    <b>Selected Room: </b>
                                    <span class="treatment_user_input_hotelroomselect"></span>
                                </p>
                                <p class="treatment_user_whichhotel">
                                    <b>Which Hotel?: </b>
                                    <span class="treatment_user_input_whichhotel"></span>
                                </p>
                                <p class="treatment_user_hotelcheckin">
                                    <b>Hotel Check In: </b>
                                    <span class="treatment_user_input_hotelcheckin"></span>
                                </p>
                                <p class="treatment_user_hotelcheckout">
                                    <b>Hotel Check Out: </b>
                                    <span class="treatment_user_input_hotelcheckout"></span>
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
