@extends('layouts.insprme')

@section('content')
<!---- Section Start ----->
<section>
    <div class="container">
        <div class="coman-inner">
        	<h1>Reset Password</h1>
            <div class="login-center">
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="login-form">
                        <ul>
                            <li class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <strong> 
                                    @include('partials.errors')
                                    @include('partials.status')
                                </strong>
                            </li>
                            <li class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>E-Mail Address:</label>
                                <div class="form-fild">
                                    <i class="fa fa-envelope-o">&#xf003;</i>
                                    <input placeholder="Email Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                            </li>
                            <li class="form-group">
                                <button value="login" type="submit">Send Reset Password Link<img src="{{ asset('images/send-icon.png') }}"/>
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