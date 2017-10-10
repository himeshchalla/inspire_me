@extends('layouts.insprme')

@section('content')
<div id="register_user">
<template>
  <form-wizard id="register1" @on-complete="onComplete"
                        shape="square"
                        color="#00a1ff" title="Signup form/Register form" subtitle="Welcome to InsprMe">
<!--       <template slot="step" scope="props"> -->
<!--         <slot name="step" v-for="(tab, index) in tabs" -->
<!--               :tab="tab" -->
<!--               :index="index" -->
<!--               :navigate-to-tab="navigateToTab" -->
<!--               :step-size="stepSize" -->
<!--               :transition="transition"> -->
<!--           <wizard-step :tab="tab" -->
<!--                        :step-size="stepSize" -->
<!--                        @click.native="navigateToTab(index)" -->
<!--                        @keyup.enter.native="navigateToTab(index)" -->
<!--                        :transition="transition" -->
<!--                        :index="index"> -->
<!--           </wizard-step> -->
<!--         </slot> -->
<!--        </template> -->
      <tab-content title="Signup details" icon="ti-unlock">
        <!---- Section Start ----->
        @include('auth.userdetails')
<!--         <el-button type="primary" slot="prev">testBack</el-button> -->
<!--         <el-button type="primary" slot="next">testNext</el-button> -->
<!--         <el-button type="primary" slot="finish">testFinish</el-button> -->
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Profile" icon="ti-user">
        <!---- Section Start ----->
		@include('auth.basicprofile')
        <!---- Section End ----->
      </tab-content>
      <tab-content title="Skills" icon="ti-thumb-up">
        <!-- These icons can also considered for skills ti-star, ti-shine, ti-settings, ti-id-badge -->
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
      <template slot="footer" scope="props">
        <div class=wizard-footer-left>
            <wizard-button  v-if="props.activeTabIndex > 0 && !props.isLastStep" @click.native="props.prevTab()" :style="props.fillButtonStyle">Go Previous</wizard-button>
         </div>
         <div class="wizard-footer-right">
           <wizard-button v-if="!props.isLastStep"@click.native="props.nextTab()" class="wizard-footer-right" :style="props.fillButtonStyle">Go Next</wizard-button>

           <wizard-button v-else @click.native="alert('Done')" class="wizard-footer-right finish-button" :style="props.fillButtonStyle">{{props.isLastStep ? 'Done' : 'Go Next'}}</wizard-button>
         </div>
       </template>
  </form-wizard>
</template>
</div>
@endsection