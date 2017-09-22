@extends('layouts.insprme')

@section('content')
<!---- Section Start ----->
<section>
    <div class="container">
        <div class="coman-inner">
        	<h1>Reset Password</h1>
            <div class="login-center">
                {{ Form::open(array('url' => route('password.change'))) }}
                    {{ Form::hidden('token', $token) }}
                    <div class="login-form">
                        <ul>
                            <li class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <strong> 
                                    @include('partials.errors')
                                    @include('partials.status')
                                </strong>
                            </li>
                            <li class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {{ Form::label('email', 'E-Mail Address:') }}
                                <div class="form-fild">
                                    <i class="fa fa-envelope-o">&#xf003;</i>
                                    {{ Form::email('email', old('email'), ['placeholder' =>'Email Address', 'id'=>'email', 'class' => 'form-control', 'required', 'autofocus']) }}
                                </div>
                            </li>
                            <li class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                {{ Form::label('password', 'New Password') }}
                                <div class="form-fild">
                                    <i class="fa fa-lock">&#xf023;</i>
                                    <input placeholder="New Password" id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                                </div>
                            </li>
                            <li class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                {{ Form::label('password_confirmation', 'Confirm Password') }}
                                <div class="form-fild">
                                    <i class="fa fa-lock">&#xf023;</i>
                                    <input placeholder="Confirm Password" id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                                </div>
                            </li>
                            <li class="form-group">
                                <button value="login" type="submit">Reset Password<img src="{{ asset('images/send-icon.png') }}"/>
                                </button>
                            </li>
                        </ul>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
<!---- Section End ----->
@endsection