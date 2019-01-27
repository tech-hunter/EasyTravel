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
                    generate states
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

    <div class="row">
        <div class="col-md-8 offset-2">

            <ul class="list-group">
                @foreach ($states as $key => $state)
                <li class="list-group-item disabled">{{ $key+1 }} name is {{ $state->name }}
                    <a href="{{ route('admin.state.edit', ['id' => $state->id]) }}">edit</a>
                    <a href="{{ route('admin.state.destroy', ['id' => $state->id]) }}">delete</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection