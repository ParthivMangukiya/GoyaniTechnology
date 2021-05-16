require('./bootstrap');

import Vue from 'vue'
import VueCompositionAPI from '@vue/composition-api'
import { showAt } from "vue-breakpoints";
import PaymentReport from './components/PaymentReport.vue';

Vue.component('pagination', require('laravel-vue-pagination'));

Vue.use(VueCompositionAPI)
var app = new Vue({
  el: '#app',
  components: {
    PaymentReport,
    showAt
  },
  data: {
    message: 'Hello Vue!'
  }
})

