@extends('layouts.backend')

@section('page_title', '| hotel edit')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card text-center">
                <div class="card-header">
                   <h3><b>Edit Hotel</b></h3> 
                   <hr>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('admin.hotel.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Hotel Name</label>
                            </div>
                            <input type="text" class="form-control" name="name" value="{{ $hotel->name }}" placeholder="input Hotel name">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">State</label>
                            </div>
                            <select class="custom-select" name="state_id" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($states as $state)
                                <option value="{{ $state->id }}" @if($state->id == $hotel->state_id) selected @endif>{{ $state->name }}</option>                                      
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-default" type="submit">Submit</button>
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