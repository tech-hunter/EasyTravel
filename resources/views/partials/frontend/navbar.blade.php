<header id="header">      
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
               <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fab fa-dribbble"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fas fa-calendar-alt"></i>  <span id="cu_date"> </span></a></li>
                    </ul>
                </div> 
            </div>
         </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <h1><img src="{{ asset('frontend/images/logo.png') }}" alt="logo"></h1>
                </a>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ Route('home') }}">Home</a></li>
                    <li><a href="{{ Route('about') }}">About</a></li>
                    <li class="dropdown"><a href="">Offers <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="{{ Route('tour') }}">Tour</a></li>
                            <li><a href="{{ Route('treatment') }}">Treatment</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ Route('news') }}">News</a></li>                    
                    <li><a href="{{ Route('contact') }}">Contact</a></li>                    
                    <li class="dropdown"><a href="">My Name<i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="">My Name</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>                    
                </ul>
            </div>
            {{-- <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
            </div> --}}
        </div>
    </div>
</header>
<!--/#header-->