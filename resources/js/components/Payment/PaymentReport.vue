<template>
  <div>
    <report-filter @change="updateSearch"></report-filter>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <button type="button" class="col-4 btn btn-primary p-2" @click="showRoughReport()">Rough</button>
            <button type="button" class="col-4 btn btn-primary p-2" @click="showPolishReport()">Polish</button>
        </div>

    </div>
    <rough-payment-report v-if="showRough" :searchTerm="searchTerm"></rough-payment-report>
    <polish-payment-report v-if="showPolish" :searchTerm="searchTerm"></polish-payment-report>
  </div>
</template>

<style scoped>

</style>

<script>
import ReportFilter from '../Filter/ReportFilter.vue';
import RoughPaymentReport from './RoughPaymentReport.vue';
import PolishPaymentReport from './PolishPaymentReport.vue';
export default {
  name: "payment-report",
  props: [],
  components: {
    ReportFilter,
    RoughPaymentReport,
    PolishPaymentReport
  },
  data() {
    return {
      showRough: true,
      showPolish: false,
      searchTerm: ""
    };
  },
  mounted() {
  },
  computed: {
  },
  methods: {
    showRoughReport() {
      this.showRough = true
      this.showPolish = false
    },
    showPolishReport() {
      this.showRough = false
      this.showPolish = true
    },
    updateSearch(searchTerm) {
      this.searchTerm = searchTerm
    }
  },
};
</script>
