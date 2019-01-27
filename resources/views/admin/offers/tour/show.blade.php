@extends('layouts.backend')

@section('page_title', '| AIRS')

@section('stylesheet')
    {{--  External CSS  --}}
    <style>
        td{
            padding-bottom: 5px !important;
            padding-top: 10px !important;
        }
        .priceValue{
            max-width: 30px;
            padding-top: 5px !important;
            padding-bottom: 2px;
        }
        .action{
            padding-top: 5px !important;
            max-width: 35px !important;
        }
        .priceValue input{
            border-color: #ffffff;
        }
        .form-control:disabled, .form-control[readonly] {
            background-color: #fbfbfb;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3><strong>Tour Package Details</strong></h3>
    
                    <div class="card-actions">
                        {{-- <a href="#" class="btn">
                            <i class="fa fa-pencil-alt"></i>
                        </a> --}}
    
                        <a href="{{Route('admin.air.create')}}" class="btn">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
    
                <div class="card-body">
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
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection