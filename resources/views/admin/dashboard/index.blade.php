@extends('layouts.backend')

@section('page_title', '| DASHBOARD')

@section('stylesheet')
    {{--  External CSS  --}}
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="h4 d-block font-weight-normal mb-2">54</span>
                        <span class="font-weight-light"><strong>TOTAL RESERVATION</strong></span>
                    </div>

                    <div class="h2 text-muted">
                        <i class="icon icon-envelope"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="h4 d-block font-weight-normal mb-2">89</span>
                        <span class="font-weight-light"><strong>TOTAL MAIL</strong></span>
                    </div>

                    <div class="h2 text-muted">
                        <i class="icon icon-envelope-open"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="h4 d-block font-weight-normal mb-2">900</span>
                        <span class="font-weight-light"><strong>TOTAL VISITOR</strong></span>
                    </div>

                    <div class="h2 text-muted">
                        <i class="icon icon-eyeglass"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Total Users
                </div>

                <div class="card-body p-0">
                    <div class="p-4">
                        <canvas id="line-chart" width="100%" height="20"></canvas>
                    </div>

                    <div class="justify-content-around mt-4 p-4 bg-light d-flex border-top d-md-down-none">
                        <div class="text-center">
                            <div class="text-muted small">Total Traffic</div>
                            <div>12,457 Users (40%)</div>
                        </div>

                        <div class="text-center">
                            <div class="text-muted small">Banned Users</div>
                            <div>95,333 Users (5%)</div>
                        </div>

                        <div class="text-center">
                            <div class="text-muted small">Page Views</div>
                            <div>957,565 Pages (50%)</div>
                        </div>

                        <div class="text-center">
                            <div class="text-muted small">Total Downloads</div>
                            <div>957,565 Files (100 TB)</div>
                        </div>
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