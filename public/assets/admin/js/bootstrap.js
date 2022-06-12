require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component',require('./components/ExampleComponents.vue'));

const app = new Vue({
    el: '#app'
});

