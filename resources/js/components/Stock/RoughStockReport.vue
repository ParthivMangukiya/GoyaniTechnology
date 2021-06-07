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
                    {{row.StockName}}
                  </div>
                  <div class="fw-bold col-6">
                    {{row.KapanName}}
                  </div>
                </div>
                <div class="row">
                  <div class="col-6" :class="{ 'text-danger': row.DayDiff > 0 }">
                    {{row.CurrCarats}} x {{row.Rate | fixed2}}
                  </div>
                  <div class="col-6">
                    ₹{{row.Amount | fixed2}}
                  </div>
                </div>
                <div class="row">
                  <div class="col-6" :class="{ 'text-danger': row.DayDiff > 0 }">
                    {{row.RoughDate | date}}
                  </div>
                  <div class="col-6">
                    {{row.RoughCarats}}, {{row.PacketType}}
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
  name: "rough-stock-report",
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
      return this.filterData(this.searchTerm, this.data, ['StockName', 'KapanName'])
    }
  },
  methods: {
    fetchData() {
      axios.post('api/report/roughStock').then(response => {
        this.data = response.data
      });
    },
  },
};
</script>
