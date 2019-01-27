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
                    <h3><strong>Treatment Package Details</strong></h3>
    
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
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection