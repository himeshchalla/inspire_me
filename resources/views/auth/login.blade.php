@extends('layouts.insprme')

@section('content')
<!---- Section Start ----->
<section>
	<div class="container">        
        <div class="coman-inner">
        	<h1>Login</h1>
            <div class="login-center">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="login-form">
                        <ul>
                            <li class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email:</label>
                                <div class="form-fild">
                                    <i class="fa fa-envelope-o">&#xf003;</i>
                                    <input placeholder="Email Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block"> 
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </li>
                            <li class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Password:</label>
                                <div class="form-fild">
                                    <i class="fa fa-lock">&#xf023;</i>
                                    <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a>
                                </div>
                            </li>
                            <label for="rememberme" >Remember Me</label>
                            <input id="rememberme" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <li class="form-group">
                                <button value="Login" type="submit">Login<img src="images/send-icon.png"/>
                                </button>
                            </li>
                        </ul>
                    </div>
				</form>
            </div>
        </div>
    </div>
</section>
<!---- Section End ----->
@endsection