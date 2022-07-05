require('./bootstrap');

window.Vue = require('vue').default;


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('app-component', require('./components/App.vue').default);

Vue.component('mainbody-component', require('./components/MainBody.vue').default);
 

const app = new Vue({
    el: '#app',
});
