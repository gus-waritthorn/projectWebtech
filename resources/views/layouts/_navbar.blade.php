<nav class="navbar navbar-default navbar-static-top navbar-fixed-top" style="">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img alt="Brand" id="home-icon" src="http://icons.iconarchive.com/icons/icons8/windows-8/512/Music-Piano-icon.png">
                    </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    <li>                <a href="{{ url('/') }}" style="font-family: 'Acme', sans-serif;font-size: 25px;color: black;margin-left: 3rem;"> Music School</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            <li class="divider-vertical"></li>
                            <li><a href="{{ url('courses') }}"> All Course</a></li>
                            <li class="divider-vertical"></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            @if(Auth::user()->role == 'admin')
                                <li><a href="{{ url('admin') }}"> Admin Control</a></li>
                            @else
                            <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            <li class="divider-vertical"></li>
                            <li><a data-popup-open="popup-checkin" href="#"><span>Check-in</span></a><li>
                            <li class="divider-vertical"></li>
                            <li><a href="{{ url('courses') }}"> All Course</a></li>
                            @endif
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('my_profile') }}" > My Profile</a></li>
                                    @if(Auth::user()->role == 'std')
                                    <li><a href="{{ url('my_course') }}"> My Courses</a></li>
                                    <li><a href="{{ url('mypoint') }}">My Point</a></li>
                                    <li><a href="{{ url('my_voucher') }}">My Voucher</a></li>
                                    @endif
                                    <hr>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
        <script type="text/javascript">
        $(function() {
        //----- OPEN
            $('[data-popup-open]').on('click', function(e)  {
                var targeted_popup_class = jQuery(this).attr('data-popup-open');
                $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

                e.preventDefault();
            });

            //----- CLOSE
            $('[data-popup-close]').on('click', function(e)  {
                var targeted_popup_class = jQuery(this).attr('data-popup-close');
                $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

                e.preventDefault();
            });

        });
    </script>
    <style>
    /*pop-up*/
/* Outer */
.popup {
    width:100%;
    height:100%;
    display:none;
    position:fixed;
    top:0px;
    left:0px;
    background:rgba(0,0,0,0.75);
}

/* Inner */
.popup-inner {
    text-align:center;
    max-width:500px;
    height: 300px;
    width:80%;
    padding:15px;
    position:absolute;
    top:40%;
    left:50%;
    -webkit-transform:translate(-50%, -50%);
    transform:translate(-50%, -50%);
    box-shadow:0px 2px 6px rgba(0,0,0,1);
    border-radius:3px;
    background:#fff;
}

/* Close Button */
.popup-close {
    width:30px;
    height:30px;
    padding-top:4px;
    display:inline-block;
    position:absolute;
    top:0px;
    right:0px;
    transition:ease 0.25s all;
    -webkit-transform:translate(50%, -50%);
    transform:translate(50%, -50%);
    border-radius:1000px;
    background:rgba(0,0,0,0.8);
    font-family:Arial, Sans-Serif;
    font-size:20px;
    text-align:center;
    line-height:100%;
    color:#fff;
}

.popup-close:hover {
    -webkit-transform:translate(50%, -50%) rotate(180deg);
    transform:translate(50%, -50%) rotate(180deg);
    background:rgba(0,0,0,1);
    text-decoration:none;
}
.input-checkin{
    height: 60px;
}
    </style>
}
