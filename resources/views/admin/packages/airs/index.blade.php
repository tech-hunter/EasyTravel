@extends('layouts.backend')

@section('page_title', '| airs')

@section('stylesheet')
    {{--  External CSS  --}}
    <style>
        .priceValue{
            max-width: 30px;
            padding-top: 5px;
            padding-bottom: 2px;
        }
        .action{
            max-width: 35px;
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
                        <a href="#" class="btn">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
    
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
                                <tr>
                                    <td>Sylhet</td>
                                    <td>Dhaka</td>
                                    <td>AC</td>
                                    <td class="priceValue">
                                        <input id="price" class="form-control" value="1200" disabled>
                                    </td>
                                    <td class="action">
                                        <a href="#" class="btn">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                    
                                        <a href="#" class="btn">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
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