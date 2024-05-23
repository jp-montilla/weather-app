<template>
  <div>
    <HeaderImage />
    <PopularDestination :cities=cities />
    <WeatherOverview :cities=cities 
        :activeCity=activeCity
        :weatherForecast=weatherForecast
        @setActiveCity=setActiveCity 
    />
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
  
  const weatherForecastApiUrl = inject('apiBaseUrl') + '/' + inject('weatherForecastPath')

  onMounted(() => {
    cityService.getCities().then(data => cities.value = data.data)
    updateWeatherList()
  })

  function setActiveCity(city) {
    activeCity.value = city
    updateWeatherList()
  }

  function updateWeatherList() {
    weatherForecastService.getWeatherForecast(weatherForecastApiUrl, activeCity.value).then(data => weatherForecast.value = data.data)
  }

</script>
