@extends('layouts.backend')

@section('page_title', '| state')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    Generate States
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.state.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="state" placeholder="input state name">
                        </div>
                        <button class="btn btn-info" type="submit">submit</button>
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
                    <strong>Generated States</strong>
    
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
                                    <th>No</th>
                                    <th>State Name</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($states as $key => $state)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $state->name }}</td>
                                        <td class="action">
                                            <a href="{{ Route( 'admin.state.edit',['id'=>$state->id] ) }}" class="btn">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                        
                                            <a href="{{ Route( 'admin.state.destroy',['id'=>$state->id] ) }}" onclick="return confirm('Delete! Are you sure?')" class="btn">
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