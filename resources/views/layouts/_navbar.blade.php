<nav class="navbar navbar-default navbar-fixed-top">
		    		<div class="navbar-header">
							<!-- Collapsed Hamburger -->
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
										<span class="sr-only">Toggle Navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>

		      			<a class="navbar-brand" href="{{ url('/') }}">
		        			<img alt="Brand" id="home-icon" src="http://www.novelsol.com/wp-content/uploads/2014/12/flaticon-grad.png">
									<div class=" navbar-nav  mslogo">
		                <a href="{{ url('/') }}" style="font-family: 'Acme', sans-serif;font-size: 25px;"> Music School</a>
		              </div>
		      			</a>
		      		</div>
							  <div class="collapse navbar-collapse" id="app-navbar-collapse">
		      <ul class="nav navbar-nav navbar-right top-right">
         @if (Route::has('login'))
             @if (Auth::check())
                 <li><a href=""> My Course</a></li>
                 <li class="divider-vertical"></li>
                 <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                	<li><a href="">My Profile</a></li>
                                	<li><a href="">My Point</a></li>
                                	<li><hr style="margin: 0"></li>
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
             @else
                 <li><a href="{{ url('/login') }}">Login</a></li>
                 <li><a href="{{ url('/register') }}">Register</a></li>
             @endif
        @endif
     </ul>
	 </div>

</nav>
<script src="{{ asset('js/app.js') }}"></script>
