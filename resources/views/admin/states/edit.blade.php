@extends('layouts.backend')

@section('page_title', '| state edit')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    generate states
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.state.update',['id' => $state->id]) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="state" placeholder="input state name" value="{{ $state->name }}">
                        </div>
                        <button class="success" type="submit">submit</button>
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