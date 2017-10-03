@extends('layouts.insprme')

@section('content')
<div id="register_user">
<template>
  <form-wizard id="register1" @on-complete="onComplete" 
                        shape="square"
                        color="#00a1ff" title="Signup form/Register form" subtitle="Welcome to InsprMe">
      <tab-content title="Signup details" icon="ti-unlock">
        <!---- Section Start ----->
		@include('auth.userdetails')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Profile" icon="ti-user">
        <!---- Section Start ----->
		@include('auth.basicprofile')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Skills" icon="ti-thumb-up">
<!-- ti-star -->
<!-- ti-shine -->
<!-- ti-settings -->
<!-- ti-id-badge -->
        <!---- Section Start ----->
		@include('auth.skills')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Interests" icon="ti-thought">
        <!---- Section Start ----->
		@include('auth.interests')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Complete" icon="ti-check">
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
</div>
@endsection