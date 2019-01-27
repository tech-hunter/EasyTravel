@extends('layouts.backend')

@section('page_title', '| hotelcosts edit')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-2">
            <form action="{{ route('admin.hotelcost.update',['id' => $cost->id]) }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    generate hotel costs
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="to">Journey To</label>
                                <select id="to" name="hotel_id" class="form-control">
                                    @foreach($hotels as $hotel)
                                    <option value="{{ $hotel->id }}" @if($hotel->id == $cost->hotel_id) selected @endif>{{ $hotel->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tclass_id">Ticket Class</label>
                                <select id="tclass_id" name="room_cat_id" class="form-control">
                                    @foreach($rooms as $room)
                                    <option value="{{ $room->id }}" @if($room->id == $cost->room_cat_id) selected @endif>{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price" class="form-control-label">Price <sup>( Per Person )</sup></label>
                                <input id="price" name="cost" value="{{ $cost->cost }}" class="form-control" placeholder="1200">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-light">
                    <button class="btn btn-outline-dark btn-sm float-right" type="submit">Add To List</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection