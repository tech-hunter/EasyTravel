@extends('layouts.backend')

@section('page_title', '| hotelcosts')

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
                    <form action="{{ route('admin.hotelcost.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">hotel name</label>
                            </div>
                            <select class="custom-select" name="hotel_id" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($hotels as $hotel)
                                <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>                                      
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
                                <option value="{{ $room->id }}">{{ $room->name }}</option>                                      
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">costs</label>
                            </div>
                            <input type="number" class="form-control" name="cost" placeholder="Input Room cost per day">
                        </div>



                        <button class="btn btn-info" type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-2">

            <table>
                <tr>
                    <th> sl. </th>
                    <th> hotel Name </th>
                    <th> room type </th>
                    <th> cost </th>
                    <th> action </th>
                </tr>
                @foreach ($costs as $key => $cost)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ \App\Models\Hotel\Hotel::find($cost->hotel_id)->name  }}</td>
                        <td>{{ \App\Models\RoomCategory\RoomCategory::find($cost->room_cat_id)->name  }}</td>
                        <td>{{ $cost->cost  }}</td>
                        <td>
                            <a href="{{ route('admin.hotelcost.edit', ['id' => $cost->id]) }}">edit</a>
                            <a href="{{ route('admin.hotelcost.destroy', ['id' => $cost->id]) }}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection