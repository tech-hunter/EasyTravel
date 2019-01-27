@extends('layouts.backend')

@section('page_title', '| AIRS')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST">
            @csrf
                <div class="card">
                    <div class="card-header bg-light">
                        <strong>Generate New Price</strong>
        
                        <div class="card-actions">
                            <a onclick="history.back()" class="btn">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="from">Journey From</label>
                                    <select id="from" class="form-control">
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Dhaka">Dhaka</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">Journey To</label>
                                    <select id="to" class="form-control">
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Dhaka">Dhaka</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tclass_id">Ticket Class</label>
                                    <select id="tclass_id" class="form-control">
                                        <option value="AC">AC</option>
                                        <option value="Non-AC">Non-AC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price" class="form-control-label">Price <sup>( Per Person )</sup></label>
                                    <input id="price" class="form-control" placeholder="1200">
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