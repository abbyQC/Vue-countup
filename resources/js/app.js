require('./bootstrap');
import Vue from 'vue';
import count from './components/Count.vue';
Window.Vue = require('vue');
Vue.component('count', count);

var app = new Vue({
    el: '#app',
})