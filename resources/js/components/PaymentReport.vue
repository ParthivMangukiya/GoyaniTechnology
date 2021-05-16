<template>
  <div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <button type="button" class="col-4 btn btn-primary p-2" @click="showRoughReport()">Rough</button>
            <button type="button" class="col-4 btn btn-primary p-2" @click="showPolishReport()">Polish</button>
        </div>

    </div>
    <rough-payment-report v-if="showRough"></rough-payment-report>
    <polish-payment-report v-if="showPolish"></polish-payment-report>
  </div>
</template>

<style scoped>

</style>

<script>
import RoughPaymentReport from './RoughPaymentReport.vue';
import PolishPaymentReport from './PolishPaymentReport.vue';
export default {
  name: "payment-report",
  props: [],
  components: {
    RoughPaymentReport,
    PolishPaymentReport
  },
  data() {
    return {
      showRough: true,
      showPolish: false
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
    }
  },
};
</script>
