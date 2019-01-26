
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{asset('backend/js/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/js/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
</head>
<body class="login-body">

<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 login-card">
                <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                    <div class="card p-4">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            <i class="fas fa-lock"></i> Admin Login
                        </div>

                        <div class="card-body py-5">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-envelope-open"></i></div>
                                    </div>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                {{-- <input type="email" name="email" class="form-control"> --}}
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                    </div>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                {{-- <input type="password" name="password" class="form-control"> --}}
                            </div>

                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="login">
                                <label class="custom-control-label" for="login">Remember Login</label>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-default px-5 btn-block hvr-outline-out">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('backend/js/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/popper.js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('backend/js/carbon.js')}}"></script>
<script src="{{asset('backend/js/demo.js')}}"></script>
<script src="{{asset('backend/js/script.js')}}"></script>
</body>
</html>
