<template>
  <div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <button type="button" class="col-4 btn btn-primary p-2" @click="showRoughReport()">Rough</button>
            <button type="button" class="col-4 btn btn-primary p-2" @click="showPolishReport()">Polish</button>
        </div>

    </div>
    <rough-receipt-report v-if="showRough"></rough-receipt-report>
    <polish-receipt-report v-if="showPolish"></polish-receipt-report>
  </div>
</template>

<style scoped>

</style>

<script>
import RoughReceiptReport from './RoughReceiptReport.vue';
import PolishReceiptReport from './PolishReceiptReport.vue';
export default {
  name: "receipt-report",
  props: [],
  components: {
    RoughReceiptReport,
    PolishReceiptReport
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
