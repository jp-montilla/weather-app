<template>
  <div>
    <HeaderImage />
    <PopularDestination :cities=cities />
    <WeatherOverview />
  </div>
</template>

<script setup>
  import HeaderImage from '../components/HeaderImage.vue'
  import PopularDestination from '../components/PopularDestination.vue'
  import WeatherOverview from '../components/WeatherOverview.vue'

  import { ref, inject, onMounted } from 'vue';

  const cities = ref(null);
  
  const cityService = inject('cityService')

  onMounted(() => {
    cityService.getCities().then(data => cities.value = data.data)
  })
</script>
