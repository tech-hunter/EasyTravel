@extends('layouts.backend')

@section('page_title', '| LOGIN')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card p-4">
                <div class="card-header text-center text-uppercase h4 font-weight-light">
                    Register
                </div>

                <div class="card-body py-5">
                    <div class="form-group">
                        <label class="form-control-label">Name</label>
                        <input type="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Password</label>
                        <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-block">Create Account</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection