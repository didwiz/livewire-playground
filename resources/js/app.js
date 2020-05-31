
window.Vue = require("vue");

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require("./bootstrap");

Vue.prototype.$event = window.event;
Vue.prototype.$user = window.user || null;

/**
  * component registration: listed alphabetically
**/
Vue.component('flash-message', require('./components/utilities/FlashMessage.vue').default);
Vue.component('login', require('./components/auth/Login.vue').default);
Vue.component('sign-up', require('./components/auth/SignUp.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//dynamic components in blade files: https://stackoverflow.com/questions/41539961/vuejs-js-for-multiple-pages-not-for-a-single-page-application

const app = new Vue({
  el: "#app",
});
