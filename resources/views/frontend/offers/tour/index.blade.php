@extends('layouts.frontend')

@section('page_title', '| HOME')

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
                            <h1 class="title">Our Tour Package</h1>
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="blood_group">Blood Group</label>
                            <select class="form-control" name="blood_group" id="blood_group">
                                <option selected>Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="traveler_number">Total Traveler</label>
                            <input type="text" name="traveler_number" class="form-control" id="traveler_number" placeholder="Total Traveler" required>
                        </div>
                    </div>
                    <div class="col-md-3">
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
                    </div>
                    <div class="col-md-12">
                        <div class="form-group" >
                            <label for="transportation">Transportation Type</label>
                            <select class="form-control" name="transportation" id="transportation">
                                <option selected>Select Transport</option>
                                <option value="Air">Air</option>
                                <option value="Train">Train</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="at_number">Total Air Ticket</label>
                            <input type="number" name="at_number" class="form-control" id="at_number" placeholder="Total Air Ticket" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="at_class">Air Ticket Class</label>
                            <select class="form-control" name="at_class" id="at_class">
                                <option selected>Select Class</option>
                                <option value="AC">AC</option>
                                <option value="Non-AC">Non-AC</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tt_number">Total Train Ticket</label>
                            <input type="number" name="tt_number" class="form-control" id="tt_number" placeholder="Total Train Ticket" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tt_class">Train Ticket Class</label>
                            <select class="form-control" name="tt_class" id="tt_class">
                                <option selected>Select Class</option>
                                <option value="AC">AC</option>
                                <option value="Non-AC">Non-AC</option>
                            </select>
                        </div>
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
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-submit hvr-outline-out"><strong>Submit</strong></button>
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