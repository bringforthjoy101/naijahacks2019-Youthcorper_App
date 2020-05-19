<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/styles/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    
    <title>Corper's Appartment</title>
</head>
<body>
    <header>
        <section class="container">
            <section class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-ligh">
                    <a class="navbar-brand a-text flex" href="/">
                        <div class="a">A</div>
                        <div class="pl-2"> CorpersApp</div>
                    </a>
                    <button class="navbar-toggler" style="color: lemonchiffon !important;" type="button"
                        data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
    
                        <ul class="navbar-nav my-2 my-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="/lodges">Apartment <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Corpers Trade</a>
                            </li>
                            @if (Route::has('login'))
                            @auth
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/profile') }}">My Profile</a>
                            </li>
                            <li class="nav-item active">
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @else
                            @if (Route::has('register'))
                            <li class="nav-item active" >
                                <a class="nav-link" data-toggle="modal" data-target="#signup" >Sign Up</a>
                            </li>
                           
                            <li><a data-toggle="modal" data-target="#login">
                                <button class="btn btn-success my-2 my-sm-0" type="button" 
                                   >Login</button>
                                </a>
                            </li>
                            @endif
                            @endauth
                            @endif
                        </ul>
    
                    </div>
                </nav>
            </section>
           
    </header>
<section class="pt-5"></section>

@yield('content')

<section class="stay-connected">
    <h2>Want to get more information on Apartments</h2>
    <p>Signup and stay in the know</p>

    <form>
        <input type="email" placeholder="Email">
        <button>Signup</button>
    </form>
</section>

<section class="top-footer-wrapper">
    <div>
        <div class="logo-wrapper">
            <h3 class="logo">A</h3>
            <h3>CorpersApp</h3>
        </div>
        <p>Corpers Apartments is an initiative to ease the life of corpers in Nigeria</p>
    </div>

    <div>
        <h3>Popular Apartments</h3>
        <ul>
            <li><a href="#">3 Bedroom Flat at Shomolu</a></li>
            <li><a href="#">Self Contained at Gbagada</a></li>
            <li><a href="#">2 Duplex at Magodo</a></li>
            <li><a href="#">4 Bedroom Flat at Surulere</a></li>
            <li><a href="#">Ensuite 2 Bedroom at Ikeja</a></li>
        </ul>
    </div>

    <div>
        <h3>Popular States</h3>
        <ul>
            <li><a href="#">Lagos(234)</a></li>
            <li><a href="#">Ibadan(142)</a></li>
            <li><a href="#">Portharcourt(223)</a></li>
            <li><a href="#">Enugu(832)</a></li>
            <li><a href="#">Abuja(192)</a></li>
        </ul>
    </div>

    <div class="contact-us">
        <h3>Contact us</h3>
        <p><span>Zone Tech Park</span><br>Plot 9 Gbagada Industrial<br>Scheme, Beside UPS,<br>Gbagada Expressway,<br>Lagos State.</p>

        <a href="#">hello@corperapp.com</a>
    </div>
</section>

<footer>
    <div class="footer-contents">
        <p>&copy; 2020 Corpersapartment</p>

        <div>
            <p>Follow us</p>
        </div>
    </div>
</footer>


<!-- Modal login page -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
            @csrf
                <h3 class="green h5">Login to Corpers Apartment</h3>

                <!-- to error: add class "has-danger" -->
                <div class="form-group">
                    <label for="exampleInputEmail1" class="h3">Username or Email</label>
                    <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="adewalechukwuka@example.com" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="email" autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="h3">Password</label>
                    <a href="#" style="float:right;font-size:12px;" class="green">Forgot password?</a>
                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="**********" id="exampleInputPassword1" name="password" required autocomplete="current-password">
                </div>
                <input type="submit" name="signin" id="signin" class="btn btn-success btn-block btn-lg" value="Login" />
                <div class="or pt-2">or sign in with your social network</div>
                <div class="flex flex-wrap center">
                    <div class="p-1">
                        <a href="#" class="btn-floating btn-outline-secondary btn-lg gg" type="button" role="button"><i class="fa fa-google"></i>Google</a>
                    </div>
                    <div href="#" class="p-1">
                        <a href="#"  class="btn-floating btn-lg btn-fb fb" type="button" role="button"><i class="fa fa-facebook"></i> Facebook</a>
                    
                    </div>

                        <div class="p-1">
                            <a href="#" class="btn-floating btn-lg btn-tw twt" type="button" role="button"><i class="fa fa-twitter"></i>Twitter</a>
                        </div>
                    
                </div>
                <div class="sign-up" style="font-size: 12px;">
                    Don't have an account? <a href="#" class="green">Create One</a>
                </div>
            </form>
        </div>
    
    </div>
    </div>
</div>
<!--end of login modal-->


<!-- Modal signuppage -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
            @csrf
                <h3 class="text-center green log h5">Create an account</h3>
    
                <!-- to error: add class "has-danger" -->
                <div class="form-group" >
                    <label for="fullname" class="h4">Name</label>
                    <input type="text" name="full_name" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Full Name" id="fullname" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
                </div>
                <div class="form-group">
                    <label for="username" class="h4">Username</label>
                    <input type="text" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="adewalechukwuka@example.com" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('username') }}" required autocomplete="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="h4">Email</label>
                    <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="adewalechukwuka@example.com" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" required autocomplete="email">
                </div>
                <div class="form-group">
                    <label for="state_code" class="h4">State Code</label>
                    <input type="text" name="state_code" class="form-control form-control-lg @error('state_code') is-invalid @enderror" placeholder="A1029984900" id="state_code" value="{{ old('state_code') }}"  required autocomplete="state_code">
                </div>
                <div class="form-group">
                    <label for="callup" class="h4">Call-up Number</label>
                    <input type="text" name="call_up" class="form-control form-control-lg @error('call_up') is-invalid @enderror" placeholder="A1029984900" id="callup"  value="{{ old('call_up') }}" required autocomplete="call_up">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="h4">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="**********" id="exampleInputPassword1" value="{{ old('password') }}" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="h4">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="**********" id="password_confirmation" required autocomplete="new-password">
                </div>
                <input type="submit" name="signup" id="signup" class="btn btn-success btn-block btn-lg" value="Signup" />
                
                <div class="or pt-2">or signup with your social network</div>
                <div class="flex flex-wrap center">
                    <div class="p-1">
                        <a href="#" class="btn-floating btn-outline-secondary btn-lg gg" type="button" role="button"><i class="fa fa-google"></i>Google</a>
                    </div>
                    <div href="#" class="p-1">
                        <a href="#"  class="btn-floating btn-lg btn-fb fb" type="button" role="button"><i class="fa fa-facebook"></i> Facebook</a>
                    
                    </div>

                        <div class="p-1">
                            <a href="#" class="btn-floating btn-lg btn-tw twt" type="button" role="button"><i class="fa fa-twitter"></i>Twitter</a>
                        </div>
                    
                </div>
                <div class="sign-up" style="font-size: 12px;">
                    Have an account? <a href="login.html" class="green">sign in</a>
                </div>
            </form>
        </div>
    
    </div>
    </div>
</div>


      

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>