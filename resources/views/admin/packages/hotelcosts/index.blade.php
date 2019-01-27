@extends('layouts.backend')

@section('page_title', '| HOTELS')

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
            max-width: 45px !important;
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
                    <strong>Hotel Prices / 24 hours</strong>
    
                    <div class="card-actions">
                        {{-- <a href="#" class="btn">
                            <i class="fa fa-pencil-alt"></i>
                        </a> --}}
    
                        <a href="{{Route('admin.hotelcost.create')}}" class="btn">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
    
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Hotel Name</th>
                                    <th>Hotel State</th>
                                    <th>Room Category</th>
                                    <th>Price</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($costs as $cost)
                                <tr>
                                    <td>{{ \App\Models\Hotel\Hotel::find($cost->hotel_id)->name }}</td>
                                    <td>{{ \App\Models\State\State::find($cost->hotel_id)->name }}</td>
                                    <td>{{ \App\Models\RoomCategory\RoomCategory::find($cost->room_cat_id)->name }}</td>
                                    <td>{{ $cost->cost }}</td>
                                    <td class="action">
                                        <a href="{{ route('admin.hotelcost.edit', ['id' => $cost->id]) }}" class="btn">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                    
                                        <a href="{{ route('admin.hotelcost.destroy', ['id' => $cost->id]) }}" onclick="return confirm('Delete! Are you sure?')" class="btn">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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