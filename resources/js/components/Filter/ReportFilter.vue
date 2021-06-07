<template>
  <div class="container my-3">
    <form class="row">
      <button class="col-1 btn" type="button" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false"><i class="fa fa-filter" aria-hidden="true"></i></button>
      <div class="col">
        <input type="search" v-model="searchTerm" @input="$emit('change', searchTerm)" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </div>
    </form>
    <!-- <div class="row collapse multi-collapse" id="filterCollapse">
        <div class="card card-body">
        </div>
    </div> -->
  </div>
</template>

<style scoped>

</style>

<script>
export default {
  name: "report-filter",
  props: [],
  components: {
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
    
  },
};
</script>
