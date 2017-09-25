<header>
	<div class="container">
    	<div class="logo"><a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a></div>
      <nav>
        	<ul>
            	<li><a href="/" @if (Route::current()->getName() == '') class="act" @endif >Home</a></li>
                <!-- Authentication Links -->
				@if (Auth::guest())
                    <li><a href="{{ route('login') }}" @if (Route::current()->getName() == 'login' || Route::current()->getName() == 'password.request' || Route::current()->getName() == 'password.reset') class="act" @endif  >Login</a></li>
                    <li><a href="{{ route('register') }}" @if (Route::current()->getName() == 'register') class="act" @endif >Register</a></li>
				@else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
    
                        <ul class="dropdown-menu" role="menu">
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
        </nav>
    </div>
</header>