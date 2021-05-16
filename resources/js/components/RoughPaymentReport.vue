<template>
  <div class="container-fluid mt-2">
    <div class="row row-cols-md-3 row-cols-1" 
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
                  ₹ {{getDouble(row.PND)}}
                </div>
              </div>
              <div class="row border-bottom">
                <div class="col-6">
                  {{row.BROKER}}
                </div>
                <div class="col-6">
                  {{getDouble(row.Carats)}}, ₹{{getDouble(row.Rate)}}
                </div>
              </div>
              <div class="collapse container-fluid p-0" :id="'collapseExample' + index" >
                <div class="row">
                  <div class="col-6">
                    {{formatDate(row.InvoiceDate)}}
                  </div>
                  <div class="col-6">
                    {{row.PurchaseDays}} days
                  </div>
                </div>
                <div class="row bottom-border">
                  <div class="col-6">
                    {{formatDate(row.DueDate)}}
                  </div>
                  <div class="col-6">
                    {{row.TransRsType}}, {{row.PayExchangeRate}}
                  </div>
                </div>
                <div class="row bottom-border">
                  <div class="col-6">
                    ₹ {{getDouble(row.PAID)}}
                  </div>
                  <div class="col-6">
                     ₹ {{getDouble(row.Total)}}
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
  name: "rough-payment-report",
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
      axios.post('api/report/roughPayment').then(response => {
        this.data = response.data
      });
    },
    filteredData(row) {
      var requiredData = {
        "PartyName": row.PartyName,
        "Broker": row.BROKER,
        "Carats": row.Carats,
        "Total": row.Total,
        // "Broker": this.data
      };
      return requiredData;
    },
    getDouble(data) {
      return parseFloat(data).toFixed(2)
    },
    formatDate(date) {
      let dateTimeParts = date.split(/[- :]/)
      dateTimeParts[1]--
      let datejs = new Date(...dateTimeParts)

      var options = { year: 'numeric', month: 'numeric', day: 'numeric' };
      return datejs.toLocaleDateString("en-IN", options)
    }
  },
};
</script>
