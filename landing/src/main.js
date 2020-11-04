import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';

import "bootstrap/dist/css/bootstrap.css";
import "./assets/css/main.css";
import "toastr/build/toastr.css";
import "@fortawesome/fontawesome-free/css/all.min.css";

import 'jquery/dist/jquery';
import "popper.js/dist/popper"
import "bootstrap/dist/js/bootstrap"

import axios from 'axios';
import toastr from 'toastr/toastr';
import moment from 'moment';

moment.locale('es');

window.axios = axios;
window.toastr = toastr;
window.moment = moment;
//window.JQuery = jquery;
//window.$ = jquery;

createApp(App).use(store).use(router).mount('#app')
