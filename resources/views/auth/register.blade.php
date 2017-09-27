@extends('layouts.insprme')

@section('content')
<template>
  <form-wizard id="register1" @on-complete="onComplete" 
                        shape="square"
                        color="#00a1ff" title="Signup form/Register form" subtitle="Welcome to InsprMe">
      <tab-content title="User details" icon="ti-user">
        <!---- Section Start ----->
		@include('auth.userdetails')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Profile" icon="ti-settings">
        <!---- Section Start ----->
		@include('auth.basicprofile')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Skills" icon="ti-settings">
        <!---- Section Start ----->
		@include('auth.skills')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Interests" icon="ti-settings">
        <!---- Section Start ----->
		@include('auth.interests')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Confirmation" icon="ti-check">
        Final Confirmation and user terms and conditions approval from this final step content here
        <br />
        Final Confirmation and user terms and conditions approval from this final step content here
        <br />
        Final Confirmation and user terms and conditions approval from this final step content here
        <br />
        Final Confirmation and user terms and conditions approval from this final step content here
        <br />
        Final Confirmation and user terms and conditions approval from this final step content here
        <br />
        Final Confirmation and user terms and conditions approval from this final step content here
        <br />
      </tab-content>
  </form-wizard>
</template>
<hr></hr>
<register1></register1>
<hr></hr>
<register2></register2>
<hr></hr>
<register3></register3>
<!-- <div class="container"> -->
<!--     <div class="row"> -->
<!--         <div class="col-md-8 col-md-offset-2"> -->
<!--             <div class="panel panel-default"> -->
<!--                 <div class="panel-heading">Register</div> -->
<!--                 <div class="panel-body"> -->
<!--                     <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('register') }}"> -->
<!--                         {{ csrf_field() }} -->

<!--                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> -->
<!--                             <label for="name" class="col-md-4 control-label">Name <span title="This field is required" class="bold text-danger">*</span></label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> -->

<!--                                 @if ($errors->has('name')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('name') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->
<!--                         <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}"> -->
<!--                             <label for="surname" class="col-md-4 control-label">Surname</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus> -->

<!--                                 @if ($errors->has('surname')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('surname') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> -->
<!--                             <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> -->

<!--                                 @if ($errors->has('email')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('email') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> -->
<!--                             <label for="password" class="col-md-4 control-label">Password</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="password" type="password" class="form-control" name="password" required> -->

<!--                                 @if ($errors->has('password')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('password') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group"> -->
<!--                             <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required> -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}"> -->
<!--                             <label for="photo" class="col-md-4 control-label">User Image</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="photo" type="file" class="form-control" name="photo" value="{{ old('photo') }}" autofocus> -->

<!--                                 @if ($errors->has('photo')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('photo') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('work_start_year') ? ' has-error' : '' }}"> -->
<!--                             <label for="work_start_year" class="col-md-4 control-label">Work start year</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="work_start_year" type="text" class="form-control" name="work_start_year" value="{{ old('work_start_year') }}" autofocus> -->

<!--                                 @if ($errors->has('work_start_year')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('work_start_year') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}"> -->
<!--                             <label for="birthdate" class="col-md-4 control-label">Birth date</label> -->

<!--                             <div class="col-md-6"> -->
<!-- 								<input id="birthdate" type="text" class="form-control" name="birthdate" value="{{ old('birthdate') }}" autofocus> -->

<!--                                 @if ($errors->has('birthdate')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('birthdate') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}"> -->
<!--                             <label for="country" class="col-md-4 control-label">Country</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" autofocus> -->

<!--                                 @if ($errors->has('country')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('country') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}"> -->
<!--                             <label for="city" class="col-md-4 control-label">City</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" autofocus> -->

<!--                                 @if ($errors->has('city')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('city') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('current_company') ? ' has-error' : '' }}"> -->
<!--                             <label for="current_company" class="col-md-4 control-label">Current Company</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="current_company" type="text" class="form-control" name="current_company" value="{{ old('current_company') }}" autofocus> -->

<!--                                 @if ($errors->has('current_company')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('current_company') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('user_personal_message') ? ' has-error' : '' }}"> -->
<!--                             <label for="user_personal_message" class="col-md-4 control-label">User personal message</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="user_personal_message" type="text" class="form-control" name="user_personal_message" value="{{ old('user_personal_message') }}" autofocus> -->

<!--                                 @if ($errors->has('user_personal_message')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('user_personal_message') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group"> -->
<!--                             <div class="col-md-6 col-md-offset-4"> -->
<!--                                 <button type="submit" class="btn btn-primary"> -->
<!--                                     Register -->
<!--                                 </button> -->
<!--                             </div> -->
<!--                         </div> -->
<!--                     </form> -->
<!--                 </div> -->
<!--             </div> -->
<!--         </div> -->
<!--     </div> -->
<!-- </div> -->
@endsection