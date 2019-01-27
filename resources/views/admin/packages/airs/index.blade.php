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
                    <strong>Air Ticket Prices Per Person</strong>
    
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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Class</th>
                                    <th>Price</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($airs as $air)
                                <tr>
                                    <td>{{ \App\Models\State\State::find($air->from)->name }}</td>
                                    <td>{{ \App\Models\State\State::find($air->to)->name }}</td>
                                    <td>{{ \App\Models\TicketClass\TicketClass::find($air->tclass_id)->name }}</td>
                                    <td class="priceValue">
                                        <input id="price" class="form-control" value="{{ $air->cost }}" disabled>
                                    </td>
                                    <td class="action">
                                        <a href="{{ route('admin.air.edit', ['id' => $air->id]) }}" class="btn">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                    
                                        <a href="{{ route('admin.air.destroy', ['id' => $air->id]) }}" onclick="return confirm('Delete! Are you sure?')" class="btn">
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