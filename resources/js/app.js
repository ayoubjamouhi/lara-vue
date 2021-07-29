require('./bootstrap');

import Vue from 'vue';
import App from './Vue/app';
import VModal from 'vue-js-modal';
import VueRouter from "vue-router";
import router from './Vue/Router';

Vue.use(VModal);
Vue.use(VueRouter);
const app = new Vue({
    el: '#app',
    components: { App },
    router: router
})

