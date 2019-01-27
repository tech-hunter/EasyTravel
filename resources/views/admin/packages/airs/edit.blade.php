@extends('layouts.backend')

@section('page_title', '| airs edit')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    generate airs
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.air.update', ['id' => $air->id]) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">from</label>
                            </div>
                            <select class="custom-select" name="from" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($states as $state)
                                <option value="{{ $state->id }}" @if($air->from == $state->id) selected @endif>{{ $state->name }}</option>                                      
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">to</label>
                            </div>
                            <select class="custom-select" name="to" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($states as $state)
                                <option value="{{ $state->id }}" @if($air->to == $state->id) selected @endif>{{ $state->name }}</option>                                      
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">ticket type</label>
                            </div>
                            <select class="custom-select" name="tclass_id" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($ticketClasses as $ticketClass)
                                <option value="{{ $ticketClass->id }}" @if($air->tclass_id == $ticketClass->id) selected @endif>{{ $ticketClass->name }}</option>                                      
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="cost" placeholder="input cost" value="{{ $air->cost }}">
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