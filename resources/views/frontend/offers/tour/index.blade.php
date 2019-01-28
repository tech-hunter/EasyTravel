@extends('layouts.frontend')

@section('page_title', '| TOUR')

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
            <form action="{{ route('tour.store') }}" method="POST">
            @csrf
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
                            <input id="tourBirthDay" name="birthday" type="text" class="datepicker form-control clickable input-md" placeholder="Check-In">
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
                                @foreach($states as $state)
                                    <option id="t_from" value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >
                            <label for="to">Travel To</label>
                            <select class="form-control" name="to" id="to">
                                <option selected>Select</option>
                                @foreach($states as $state)
                                    <option id="t_to" value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-12">
                        <div class="form-group" >
                            <label for="transportation">Transportation Type</label>
                            <select class="form-control" name="transportation" id="transportation">
                                <option selected>Select Transport</option>
                                <option value="Air">Air</option>
                                <option value="Train">Train</option>
                            </select>
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
                                    @foreach($states as $state)
                                        <option id="t_from" value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <label for="to">Travel To</label>
                                <select class="form-control" name="to" id="to">
                                    <option selected>Select</option>
                                    @foreach($states as $state)
                                        <option id="t_to" value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
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

                    {{-- <div class="col-md-6">
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
                            </select>
                        </div>
                    </div>--}}

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
                                    @foreach($states as $state)
                                        <option id="t_from" value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <label for="to">Travel To</label>
                                <select class="form-control" name="to" id="to">
                                    <option selected>Select</option>
                                    @foreach($states as $state)
                                        <option id="t_to" value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
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
                                @foreach($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" >
                            <label for="hotel_id">Hotel Name</label>
                            <select class="form-control" name="hotel_id" id="hotel_id">
                                <option selected>Select Room</option>
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
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-submit hvr-outline-out" id="submit"><strong>Submit</strong></button>
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

    <script>
        $(document).ready(function(){

            $("#to").change(function() {
                var from = $("#from").val();
                var to = $("#to").val();
                var op = "";

                $.ajax({
                    type:"GET",
                    url:'{!! URL::to('offers/tour/airselection') !!}'+"/"+from+"/"+to,
                    data:{
                        'from':from,
                        'to': to,
                        },
                    dataType:"JSON",
                    success:function(data){
                        var array = ['Business', 'Normal', 'AC', 'Non-AC', 'Standing'];
                        for(var i=0; i< data.length; i++){
                            
                            op+='<option value="'+data[i].tclass_id+'">'+array[data[i].tclass_id-1]+'</option>';
                        } 
                        
                        $('#at_class').append(op);
                    },
                    error:function(){
                        alert('Data Not Found');
                    }
                });

                $.ajax({
                    type:"GET",
                    url:'{!! URL::to('offers/tour/trainselection') !!}'+"/"+from+"/"+to,
                    data:{
                        'from':from,
                        'to': to,
                        },
                    dataType:"JSON",
                    success:function(data){
                        var array = ['Business', 'Normal', 'AC', 'Non-AC', 'Standing'];
                        for(var i=0; i< data.length; i++){
                            
                            op+='<option value="'+data[i].tclass_id+'">'+array[data[i].tclass_id-1]+'</option>';
                        } 
                        
                        $('#tt_class').append(op);
                    },
                    error:function(){
                        alert('Data Not Found');
                    }
                });
            });

        });

    </script>

    <script>
        $(document).ready(function(){

$("#roomtype").change(function() {
    var id = $("#roomtype").val();
    var op = "";

    $.ajax({
        type:"GET",
        url:'{!! URL::to('offers/tour/hotels') !!}'+"/"+id,
        data:{
            'id':id
            },
        dataType:"JSON",
        success:function(data){
            
            for(var i=0; i< data.length; i++){
                var id = data[i].hotel_id;
                $.ajax({
                    type:"GET",
                    url:'{!! URL::to('offers/tour/gethotel') !!}'+"/"+id,
                    data:{
                        'id':id
                        },
                    dataType:"JSON",
                    success:function(data){
                        op+='<option value="'+data.id+'">'+data.name+'</option>';
                        $('#hotel_id').append(op);
                        
                    },
                    error:function(){
                        alert('Data Not Found');
                    }
                });
            }
            
        },
        error:function(){
            alert('Data Not Found');
        }
    });

});

});
    </script>
@endsection