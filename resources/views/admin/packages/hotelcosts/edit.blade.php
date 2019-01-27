@extends('layouts.backend')

@section('page_title', '| hotelcosts edit')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    generate hotel costs
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.hotelcost.update', ['id' => $cost->id] ) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">hotel name</label>
                            </div>
                            <select class="custom-select" name="hotel_id" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($hotels as $hotel)
                                <option value="{{ $hotel->id }}" @if($hotel->id == $cost->hotel_id) selected @endif>{{ $hotel->name }}</option>                                      
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">room category</label>
                            </div>
                            <select class="custom-select" name="room_cat_id" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($rooms as $room)
                                <option value="{{ $room->id }}" @if($room->id == $cost->room_cat_id) selected @endif >{{ $room->name }}</option>                                      
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">costs</label>
                            </div>
                            <input type="number" class="form-control" name="cost" value="{{ $cost->cost }}" placeholder="Input Room cost per day">
                        </div>



                        <button class="btn btn-info" type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection