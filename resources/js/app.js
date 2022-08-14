//require('./bootstrap');

//window.Vue = require('vue').default;


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//Vue.component('app-component', require('./components/App.vue').default);
//Vue.component('nav-component', require('./components/navigations/TopNavbar.vue').default);

//Vue.component('mainbody-component', require('./components/MainBody.vue').default);
 

// const app = new Vue({
//     el: '#app',
// });


/********** */

require('./bootstrap')

import Vue from 'vue'
import VueRouter from 'vue-router';

import router from './Router/index'
import store from './Store/index';
import App from '../js/components/App.vue'


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('app-component', require('./components/App.vue').default);
//Vue.component('nav-component', require('./components/navigations/TopNavbar.vue').default);

//Vue.component('mainbody-component', require('./components/MainBody.vue').default);
 

Vue.use(VueRouter)

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {App}
});