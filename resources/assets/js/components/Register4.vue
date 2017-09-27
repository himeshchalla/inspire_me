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
<style>
span.error{
  color:#e74c3c;
  font-size:20px;
  display:flex;
  justify-content:center;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0
}
</style>
<script>
//global registration
import VueFormWizard from 'vue-form-wizard';
import 'vue-form-wizard/dist/vue-form-wizard.min.css';
  Vue.use(VueFormWizard)
  export default {
     methods: {
      onComplete: function(){
          alert('Yay. Done!');
       }
      }
  }
</script>