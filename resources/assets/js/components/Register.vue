<template>

  <form-wizard id="register1" @on-complete="onComplete" 
                        shape="square"
                        color="#00a1ff" title="Signup form/Register form" subtitle="Welcome to InsprMe">
      <tab-content title="User details"
                   icon="ti-user">
        My first tab content
        <br />
        firstname, email, password, confirm password
      </tab-content>
      <tab-content title="Basic Profile"
                   icon="ti-settings">
        Basic Profile tab content here
        <br />
        basic profile
      </tab-content>
      <tab-content title="Skills"
                   icon="ti-settings">
        Skills tab content here
        <br />
        Skills
      </tab-content>
      <tab-content title="Interests"
                   icon="ti-settings">
        Interests tab content here
        <br />
        Interests
      </tab-content>
      <tab-content title="Confirmation"
                   icon="ti-check">
        Yuhuuu! This seems pretty damn simple
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
      },
  }
</script>