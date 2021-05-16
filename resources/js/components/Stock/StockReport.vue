<template>
  <div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <button type="button" class="col-auto btn btn-primary p-2" @click="showRoughReport()">Rough</button>
            <button type="button" class="col-auto btn btn-primary p-2" @click="showPolishReport()">Polish</button>
            <button type="button" class="col-auto btn btn-primary p-2" @click="showShapeReport()">Shape</button>
            <button type="button" class="col-auto btn btn-primary p-2" @click="showKapanReport()">Kapan</button>
            <button type="button" class="col-auto btn btn-primary p-2" @click="showPendingKapanReport()">PND Kapan</button>
        </div>

    </div>
    <rough-stock-report v-if="showRough"></rough-stock-report>
    <polish-stock-report v-if="showPolish"></polish-stock-report>
    <shape-stock-report v-if="showShape"></shape-stock-report>
    <kapan-stock-report v-if="showKapan"></kapan-stock-report>
    <pending-kapan-stock-report v-if="showPendingKapan"></pending-kapan-stock-report>
  </div>
</template>

<style scoped>

</style>

<script>
import RoughStockReport from './RoughStockReport.vue';
import PolishStockReport from './PolishStockReport.vue';
import ShapeStockReport from './ShapeStockReport.vue';
import KapanStockReport from './KapanStockReport.vue';
import PendingKapanStockReport from './PendingKapanStockReport.vue';
export default {
  name: "stock-report",
  props: [],
  components: {
    RoughStockReport,
    PolishStockReport,
    ShapeStockReport,
    KapanStockReport,
    PendingKapanStockReport,
  },
  data() {
    return {
      showRough: true,
      showPolish: false,
      showShape: false,
      showPendingKapan: false,
      showKapan: false
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
      this.showShape = false
      this.showPendingKapan = false
      this.showKapan = false
    },
    showPolishReport() {
      this.showRough = false
      this.showPolish = true
      this.showShape = false
      this.showPendingKapan = false
      this.showKapan = false
    },
    showShapeReport() {
      this.showRough = false
      this.showPolish = false
      this.showShape = true
      this.showPendingKapan = false
      this.showKapan = false
    },
    showPendingKapanReport() {
      this.showRough = false
      this.showPolish = false
      this.showShape = false
      this.showPendingKapan = true
      this.showKapan = false
    },
    showKapanReport() {
      this.showRough = false
      this.showPolish = false
      this.showShape = false
      this.showPendingKapan = false
      this.showKapan = true
    }
  },
};
</script>
