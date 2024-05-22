<template>
  <div>
    <HeaderImage />
    <PopularDestination :cities=cities />
    <WeatherOverview :cities=cities :activeCity=activeCity @setActiveCity=setActiveCity />
  </div>
</template>

<script setup>
  import HeaderImage from '../components/HeaderImage.vue'
  import PopularDestination from '../components/PopularDestination.vue'
  import WeatherOverview from '../components/WeatherOverview.vue'

  import { ref, inject, onMounted } from 'vue'

  const cities = ref(null)

  const activeCity = ref('Tokyo')
  
  const weatherForecast = ref(null) 
  
  const cityService = inject('cityService')

  const weatherForecastService = inject('weatherForecastService')

  onMounted(() => {
    cityService.getCities().then(data => cities.value = data.data)
    weatherForecastService.getWeatherForecast().then(data => weatherForecast.value = data.data)
  })

  function setActiveCity(city) {
    activeCity.value = city
  }

</script>
