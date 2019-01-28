@extends('layouts.frontend')

@section('page_title', '| TREATMENT')

@section('stylesheet')
    {{--  External CSS  --}}
    <link href="{{ asset('frontend/css/datepicker.css') }}" rel="stylesheet"> 
    
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Our Treatment Package</h1>
                            <p>Have a Tour With Us</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    {{-- Tour Registration Page --}}
    <section class="tour-register">
        <div class="container">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group date" data-provide="datepicker">
                            <label for="tourBirthDay">Birthday</label>
                            <input id="tourBirthDay" name="tourBirthDay" type="text" class="datepicker form-control clickable input-md" placeholder="Check-In">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="passport_number">Passport No.</label>
                            <input type="text" name="passport_number" class="form-control" id="passport_number" placeholder="Passport No." required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{-- <label for="blood_group">Blood Group</label>
                            <input type="text" name="blood_group" class="form-control" id="blood_group" placeholder="Blood Group" required> --}}
                            <label for="blood_group">Blood Group</label>
                            <select class="form-control" name="blood_group" id="blood_group" placeholder="Blood Group" required>
                                <option selected></option>
                                <option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="3">B+</option>
                                <option value="4">B-</option>
                                <option value="5">AB+</option>
                                <option value="6">AB-</option>
                                <option value="7">O+</option>
                                <option value="8">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="traveler_number">Total Traveler</label>
                            <input type="text" name="traveler_number" class="form-control" id="traveler_number" placeholder="Total Traveler" required>
                        </div>
                    </div>
                    {{-- <div class="col-md-3">
                        <div class="form-group" >
                            <label for="from">Travel From</label>
                            <select class="form-control" name="from" id="from">
                                <option selected>Select</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >
                            <label for="to">Travel To</label>
                            <select class="form-control" name="to" id="to">
                                <option selected>Select</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="treatmentWhichPlace">Which Place?</label>
                            <select class="form-control" name="treatmentWhichPlace" id="treatmentWhichPlace">
                                <option selected>Choose...</option>
                                <option value="chennai">Chennai</option>
                                <option value="kolkata">Kolkata</option>
                                <option value="mumbai">Mumbai</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group hospitals" id="chennai">
                            <label for="treatmentHospital">Hospitals</label>
                            <select class="form-control" name="treatmentHospital" id="treatmentHospital">
                                <option selected>Choose...</option>
                                <option value="cah">Apollo Hospitals, Chennai</option>
                                <option value="cdkmh">Dr. Kamakshi Memorial Hospital, Chennai</option>
                                <option value="cdmh">Dr. Mehtas Hospital, Chennai</option>
                                <option value="cfmh">Fortis Malar Hospital, Chennai</option>
                                <option value="chcc">HCG Cancer Centre, Chennai</option>
                                <option value="cnioss">Nithra Institute of Sleep Sciences, Chennai</option>
                            </select>
                        </div>
                        <div class="form-group hospitals" id="kolkata">
                            <label for="treatmentHospitalse">Hospitals</label>
                            <select class="form-control" name="treatmentHospitalse" id="treatmentHospitalse">
                                <option selected>Choose...</option>
                                <option value="krgh">Ruby General Hospital, Kolkata</option>
                                <option value="kamc">AMRI MEDICAL CENTER, Kolkata</option>
                                <option value="kfm">Fortis Hospital - Anandapur,Kolkata</option>
                                <option value="kagh">Apollo Gleneagles Hospitals</option>
                            </select>
                        </div>
                        <div class="form-group hospitals" id="mumbai">
                            <label for="treatmentHospitalse">Hospitals</label>
                            <select class="form-control" name="treatmentHospitalse" id="treatmentHospitalse">
                                <option selected>Choose...</option>
                                <option value="msh">SevenHills Hospital, Mumbai</option>
                                <option value="mpdhh">P.D Hinduja Hospital</option>
                                <option value="mkdahmrc">Kokilaben Dhirubhai Ambani Hospital and Medical Research Center</option>
                                <option value="mdlhhh">Dr.LH Hiranandani Hospital</option>
                                <option value="mbsh">Breach Candy Hospital</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="treatmentMedicalDepartment">Medical Department</label>
                            <select class="form-control" name="treatmentMedicalDepartment" id="treatmentMedicalDepartment">
                                <option selected>Choose...</option>
                                <option value="msh">Accident and emergency (A&E)</option>
                                <option value="mpdhh">Anaesthetics</option>
                                <option value="mkdahmrc">Cardiology</option>
                                <option value="mdlhhh">Ear nose and throat (ENT)</option>
                                <option value="mbsh">Gastroenterology</option>
                                <option value="msh">Gynaecology</option>
                                <option value="mpdhh">Nephrology</option>
                                <option value="mkdahmrc">Neurology</option>
                                <option value="mdlhhh">Oncology</option>
                                <option value="mbsh">Urology</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="treatmentPreferableDoctor">Preferable Doctor</label>
                                <select class="form-control" name="treatmentPreferableDoctor" id="treatmentPreferableDoctor">
                                    <option selected>Choose...</option>
                                    <option value="msh">Accident and emergency (A&E)</option>
                                    <option value="mpdhh">Anaesthetics</option>
                                    <option value="mkdahmrc">Cardiology</option>
                                    <option value="mdlhhh">Ear nose and throat (ENT)</option>
                                    <option value="mbsh">Gastroenterology</option>
                                    <option value="msh">Gynaecology</option>
                                    <option value="mpdhh">Nephrology</option>
                                    <option value="mkdahmrc">Neurology</option>
                                    <option value="mdlhhh">Oncology</option>
                                    <option value="mbsh">Urology</option>
                                </select>
                        </div>
                    </div>
                    {{-- <div class="col-md-3">
                        <div class="form-group">
                            <label for="at_number">Air Ticket No.</label>
                            <input type="text" name="at_number" class="form-control" id="at_number" placeholder="Air Ticket No." required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="at_class">Air Ticket Class</label>
                            <input type="text" name="at_class" class="form-control" id="at_class" placeholder="Air Ticket Class" required>
                        </div>
                    </div> 
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tt_number">Train Ticket No.</label>
                            <input type="text" name="tt_number" class="form-control" id="tt_number" placeholder="Train Ticket No." required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tt_class">Train Ticket Class</label>
                            <input type="text" name="tt_class" class="form-control" id="tt_class" placeholder="Train Ticket Class" required>
                        </div>
                    </div> --}}

                    <div class="col-md-12">
                        <div class="form-group" >
                            <label for="tourAirTicketNeed">Do you need Air ticket?</label>
                            <select class="form-control" name="tourairticketneed" id="tourAirTicketNeed" required>
                                <option selected></option>
                                <option value="tourAirTicketYes">Yes</option>
                                <option value="tourAirTicketNo">No</option>
                            </select>
                        </div>
                    </div>
                    <div id="tourAirTicketYes" class="tourairticketdemo" style="display:none">
                        <div class="col-md-3">
                            <div class="form-group" >
                                <label for="from">Travel From</label>
                                <select class="form-control" name="from" id="from">
                                    <option selected>Select</option>
                                    {{-- @foreach($states as $state)
                                        <option id="t_from" value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <label for="to">Travel To</label>
                                <select class="form-control" name="to" id="to">
                                    <option selected>Select</option>
                                    {{-- @foreach($states as $state)
                                        <option id="t_to" value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="at_number">Total Air Ticket</label>
                                <input type="number" name="at_number" class="form-control" id="at_number" placeholder="Total Air Ticket" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="at_class">Air Ticket Class</label>
                                <select class="form-control" name="at_class" id="at_class">
                                    <option selected>Select Class</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="tourAirTicketNo" class="tourairticketdemo" style="display:none">
                    </div>

                    <div class="col-md-12">
                        <div class="form-group" >
                            <label for="tourTrainTicketNeed">Do you need Train ticket?</label>
                            <select class="form-control" name="tourtrainticketneed" id="tourTrainTicketNeed">
                                <option selected></option>
                                <option value="tourTrainTicketYes">Yes</option>
                                <option value="tourTrainTicketNo">No</option>
                            </select>
                        </div>
                    </div>
                    <div id="tourTrainTicketYes" class="tourtrainticketdemo" style="display:none">
                        <div class="col-md-3">
                            <div class="form-group" >
                                <label for="from">Travel From</label>
                                <select class="form-control" name="from" id="from">
                                    <option selected>Select</option>
                                    {{-- @foreach($states as $state)
                                        <option id="t_from" value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <label for="to">Travel To</label>
                                <select class="form-control" name="to" id="to">
                                    <option selected>Select</option>
                                    {{-- @foreach($states as $state)
                                        <option id="t_to" value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tt_number">Total Train Ticket</label>
                                <input type="number" name="tt_number" class="form-control" id="tt_number" placeholder="Total Train Ticket" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tt_class">Train Ticket Class</label>
                                <select class="form-control" name="tt_class" id="tt_class">
                                    <option selected>Select Class</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="tourTrainTicketNo" class="tourtrainticketdemo" style="display:none">
                    </div>

                    
                    <div class="col-md-4">
                        <div class="form-group" >
                            <label for="roomtype">Room Type</label>
                            <select class="form-control" name="roomtype" id="roomtype">
                                <option selected>Select Room</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" >
                            <label for="hotel_id">Hotel Name</label>
                            <select class="form-control" name="hotel_id" id="hotel_id">
                                <option selected>Select Room</option>
                                <option value="Rose View">Rose View</option>
                                <option value="City Hotel">City Hotel</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="needed_room">Needed Room</label>
                            <input type="text" name="needed_room" class="form-control" id="needed_room" placeholder="Train Ticket No." required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group date" data-provide="datepicker">
                            <label for="check_in">Check In Date</label>
                            <input id="check_in" name="check_in" type="text" class="datepicker form-control clickable input-md" placeholder="Check-In">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group date" data-provide="datepicker">
                            <label for="check_out">Check Out Date</label>
                            <input id="check_out" name="check_out" type="text" class="datepicker form-control clickable input-md" placeholder="Check-Out">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="present_address">Present Address</label>
                            <textarea name="present_address" id="present_address" required="required" class="form-control" rows="3" placeholder="Present Address"></textarea>
                        </div> 
                    </div>
                </div>
                <div class="tourbtnsubmit text-center">
                    <button type="submit" class="btn btn-submit hvr-outline-out"><span>Submit</span></button>
                </div>
            </form>
        </div>
    </section>
    
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    <!-- Datepicker -->
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
        }).on('changeDate', function (ev) {
            $(this).datepicker('hide');
        });
    </script>

    <script>
        var date = new Date();
        document.getElementById("cu_date").innerHTML = date.toDateString();

        $(function() {
            $('.tourairticketdemo').hide();
            $('#tourAirTicketNeed').change(function() {
                $('.tourairticketdemo').hide();
                $('#' + $(this).val()).show();
            });

            $('.tourtrainticketdemo').hide();
            $('#tourTrainTicketNeed').change(function() {
                $('.tourtrainticketdemo').hide();
                $('#' + $(this).val()).show();
            });

            $('.tourhotelneeddemo').hide();
            $('#tourHotelNeed').change(function() {
                $('.tourhotelneeddemo').hide();
                $('#' + $(this).val()).show();
            });
        });


        $(function() {
            $('.treatmentairticketdemo').hide();
            $('#treatmentAirTicketNeed').change(function() {
                $('.treatmentairticketdemo').hide();
                $('#' + $(this).val()).show();
            });

            $('.treatmenttrainticketdemo').hide();
            $('#treatmentTrainTicketNeed').change(function() {
                $('.treatmenttrainticketdemo').hide();
                $('#' + $(this).val()).show();
            });

            $('.treatmenthotelneeddemo').hide();
            $('#treatmentHotelNeed').change(function() {
                $('.treatmenthotelneeddemo').hide();
                $('#' + $(this).val()).show();
            });
        });

        // Hospitals option
        $(function() {
            $('.hospitals').hide();
            $('#treatmentWhichPlace').change(function(){
            $('.hospitals').hide();
            $('#' + $(this).val()).show();
            });
        });
    </script>
@endsection