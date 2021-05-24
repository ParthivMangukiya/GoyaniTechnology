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
                  {{row.PartyName}}
                </div>
                <div class="fw-bold col-6">
                  ₹ {{row.PND | fixed2}}
                </div>
              </div>
              <div class="row border-bottom">
                <div class="col-6" :class="{ 'text-danger': row.DayDiff > 0 }">
                  {{row.DayDiff}} days
                </div>
                <div class="col-6">
                  {{row.Carats | fixed2}}, ₹{{row.Rate | fixed2}}
                </div>
              </div>
              <div class="collapse container-fluid p-0" :id="'collapseExample' + index" >
                <div class="row bottom-border">
                  <div class="col-6">
                    {{row.Broker}}
                  </div>
                  <div class="col-6">
                    {{row.BrkPer | fixed2}}%
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    {{row.InvoiceDate | date}}
                  </div>
                  <div class="col-6">
                    {{row.PurchaseDays}} days
                  </div>
                </div>
                <div class="row bottom-border">
                  <div class="col-6">
                    {{row.DueDate | date}}
                  </div>
                  <div class="col-6">
                    {{row.TransRsType}}, {{row.RcvExchangeRate}}
                  </div>
                </div>
                <div class="row bottom-border">
                  <div class="col-6">
                    ₹ {{row.REC | fixed2}}
                  </div>
                  <div class="col-6">
                     ₹ {{row.Total | fixed2}}
                  </div>
                </div>
              </div>
              <div class="row">
                <button class="btn" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapseExample'+index" aria-expanded="false" :aria-controls="'#collapseExample'+index">
                  <i class="fa fa-angle-double-down"></i>
                </button>
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
  name: "polish-receipt-report",
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
      axios.post('api/report/polishReceipt').then(response => {
        this.data = response.data
      });
    },
  },
};
</script>
