<template>
  <a class="list-group-item">
    <div class="flex-column">
      <div class="d-flex w-100 justify-content-between">
        <h5>{{ household.name }}</h5>
        <p>Last Visit: 11/4/2018</p>
      </div>
      <div class="d-flex w-100 justify-content-between">
        <small>{{ household.address }}</small>
        <small>{{ household.phone }}</small>
        <h5><span class="badge badge-primary badge-pill">RS</span></h5>
      </div>
    </div>
  </a>
</template>

<script>
    export default {
    	data() {
    		return {
    			households: []
    		}
    	},

        mounted() {
            axios.get('/households').then($response => this.households = response.data);
        }
    }
</script>