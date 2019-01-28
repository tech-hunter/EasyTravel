
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>
    <link rel="stylesheet" href="{{asset('backend/js/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/js/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
</head>
<body class="login-body">
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 login-card">

                <div class="login-logo text-center">
                    <div class="img-container">
                        <img src="{{ asset('backend/images/logo.png') }}" alt="">
                    </div>
                </div>

                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        User Registration
                    </div>
                    <form action="{{Route('register')}}" method="POST">
                        @csrf
                        <div class="card-body ">
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="name" name="name" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-envelope-open"></i></div>
                                    </div>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label">Mobile No</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                                    </div>
                                    <input type="text" name="mobile" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label">Country</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-flag"></i></div>
                                    </div>
                                    <input type="text" name="country" class="form-control">
                                </div>
                                
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-keycdn"></i></div>
                                    </div>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-keycdn"></i></div>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer register-btn">
                            <button type="submit" class="btn btn-info btn-block">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="{{asset('backend/js/vendor/jquery/jquery.min.js')}}">
<link rel="stylesheet" href="{{asset('backend/js/vendor/popper.js/popper.min.js')}}">
<link rel="stylesheet" href="{{asset('backend/js/vendor/bootstrap/js/bootstrap.min.js')}}">
<link rel="stylesheet" href="{{asset('backend/js/vendor/chart.js/chart.min.js')}}">
<link rel="stylesheet" href="{{asset('backend/js/carbon.js')}}">
<link rel="stylesheet" href="{{asset('backend/js/demo.js')}}">
<link rel="stylesheet" href="{{asset('backend/js/script.js')}}">
</body>
</html>
