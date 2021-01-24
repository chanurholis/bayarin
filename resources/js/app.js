require('./bootstrap');

// Stisla
require('../stisla/js/stisla');
require('../stisla/js/scripts');
require('../stisla/js/custom');

window.Vue = require('vue');

import iosAlertView from 'vue-ios-alertview';
Vue.use(iosAlertView);

import UsersComponent from '../components/UsersComponent';

Vue.component('users-component', UsersComponent);
