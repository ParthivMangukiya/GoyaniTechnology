<template>
  <div class="container-fluid mt-2">
    <div class="row row-cols-1" 
    v-for="(row, index) in filteredData"
    :key="index">
      <div class="col p-2">
          <div class="card">
            <div class="card-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="fw-bold col-6">
                    {{row.StockName}}, {{row.ShadeName}}
                  </div>
                  <div class="fw-bold col-6">
                    {{row.SizeName}}, {{row.NumberName}}
                  </div>
                </div>
                <div class="row">
                  <div class="col-6" :class="{ 'text-danger': row.DayDiff > 0 }">
                    {{row.CurrCarats | fixed2}} x {{row.Rate | fixed2}}
                  </div>
                  <div class="col-6">
                    ₹{{row.Amount | fixed2}}
                  </div>
                </div>
                <div class="row">
                  <div class="col-12" :class="{ 'text-danger': row.DayDiff > 0 }">
                    {{row.Note}}
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>

<script>
import {utilityMixin} from '../../utility.js';
export default {
  name: "shape-stock-report",
  props: ['searchTerm'],
  mixins: [utilityMixin],
  components: {
  },
  data() {
    return {
      data: {},
    };
  },
  mounted() {
    this.fetchData()
  },
  computed: {
    filteredData() {
      return this.filterData(this.searchTerm, this.data, ['StockName', 'ShadeName', 'SizeName', 'NumberName'])
    }
  },
  methods: {
    fetchData() {
      axios.post('api/report/polishStock').then(response => {
        this.data = response.data
      });
    },
  },
};
</script>
