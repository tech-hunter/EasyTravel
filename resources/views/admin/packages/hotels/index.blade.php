@extends('layouts.backend')

@section('page_title', '| hotels')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    Generate Hotels
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.hotel.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Hotel Name</label>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="input Hotel name">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">State</label>
                            </div>
                            <select class="custom-select" name="state_id" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>                                      
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-default" type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header bg-light">
                    <strong>Generated Hotels</strong>
    
                    <div class="card-actions">
                        {{-- <a href="#" class="btn">
                            <i class="fa fa-pencil-alt"></i>
                        </a> --}}
    
                        <a href="{{Route('admin.air.create')}}" class="btn">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
    
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>State</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($hotels as $key => $hotel)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $hotel->name}}</td>
                                    <td>{{ \App\Models\State\State::find($hotel->state_id)->name  }}</td>
                                    <td>
                                        <a href="{{ route('admin.hotel.edit', ['id' => $hotel->id]) }}">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                    <td>   
                                        <a href="{{ route('admin.hotel.destroy', ['id' => $hotel->id]) }}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
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