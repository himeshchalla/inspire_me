<template>
  <form-wizard @on-complete="onComplete" 
                        shape="square"
                        color="#3498db">
      <tab-content title="User details"
                   icon="ti-user">
        My first tab content
      </tab-content>
      <tab-content title="Basic Profile"
                   icon="ti-settings">
        My second tab content
      </tab-content>
      <tab-content title="Skills"
                   icon="ti-settings">
        My second tab content
      </tab-content>
      <tab-content title="Interests"
                   icon="ti-settings">
        My second tab content
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
      }
  }
</script>