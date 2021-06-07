require('./bootstrap');

import Vue from 'vue'
import VueCompositionAPI from '@vue/composition-api'
import { showAt } from "vue-breakpoints";
import PaymentReport from './components/Payment/PaymentReport.vue';
import ReceiptReport from './components/Receipt/ReceiptReport.vue';
import StockReport from './components/Stock/StockReport.vue';


Vue.filter('fixed2', function (value) {
  return parseFloat(value).toFixed(2)
})

Vue.filter('date', function (date) {
  let dateTimeParts = date.split(/[- :]/)
  dateTimeParts[1]--
  let datejs = new Date(...dateTimeParts)

  var options = { year: 'numeric', month: 'numeric', day: 'numeric' };
  return datejs.toLocaleDateString("en-IN", options)
})

Vue.use(VueCompositionAPI)
var app = new Vue({
  el: '#app',
  components: {
    PaymentReport,
    ReceiptReport,
    StockReport,
    showAt
  },
  data: {
    message: 'Hello Vue!'
  }
})

