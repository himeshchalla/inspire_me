
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('register', require('./components/Register.vue'));
Vue.component('register2', require('./components/Register2.vue'));
Vue.component('register3', require('./components/Register3.vue'));
Vue.component('register4', require('./components/Register4.vue'));

//const app = new Vue({
//    el: '#sitemain'
//});


window.onload = function () {
	const app = new Vue({
        el: '#register_user',
        data: {
        	message: 'home'
        },
        methods: {
            onComplete: function(){
            alert('Yay. Done!');
         }
        },
    });
}