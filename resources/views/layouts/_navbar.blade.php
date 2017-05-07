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
                        <img alt="Brand" id="home-icon" src="http://www.novelsol.com/wp-content/uploads/2014/12/flaticon-grad.png">
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
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            @if(Auth::user()->role == 'admin')
                                <li><a href="{{ url('admin') }}"> Admin Control</a></li>
                            @else
                            <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            <li class="divider-vertical"></li>
                            <li><a href=""> My Course</a></li>
                            @endif                            
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="" > My Profile</a></li>
                                    @if(Auth::user()->role == 'std')
                                    <li><a href="{{ url('mypoint') }}">My Point</a></li>
                                    @endif
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
        <script src="{{ asset('js/app.js') }}"></script>