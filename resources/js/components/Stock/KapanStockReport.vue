<template>
  <div class="container-fluid mt-2">
    <div class="row row-cols-1" 
    v-for="(row, index) in data"
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
                  <div class="col-6">
                    {{row.CurrCarats}} x {{row.Rate | fixed2}}
                  </div>
                  <div class="col-6">
                    ₹{{row.Amount | fixed2}}
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    {{row.TableDate | date}}
                  </div>
                  <div class="col-6">
                    {{row.TblDayDiff}}
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    {{row.RoughDate | date}}
                  </div>
                  <div class="col-6">
                    {{row.RoughCarats}}
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

export default {
  name: "kapan-stock-report",
  props: [],
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
  },
  methods: {
    getDataString(columns) {
      var str = "";
      columns.forEach((column) => {
        if (!this.isBlank(column)) {
          str = str + " " + column;
        }
      });
      return str.trim();
    },
    fetchData() {
      axios.post('api/report/kapanStock').then(response => {
        this.data = response.data
      });
    },
  },
};
</script>
