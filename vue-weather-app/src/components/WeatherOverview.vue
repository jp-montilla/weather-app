<template>
  <section class='main-weather'>
    <div class='main-weather__container'>
      <h1>The Japan Weather</h1>

      <WeatherList :cities=cities :activeCity=activeCity />

      <div class='week-weather-report'>
        <div class='weather-small-card' v-for="forecast in weatherForecast" :key="forecast.date">
          <WeatherSmallCard :forecast=forecast />
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
  import WeatherList from './WeatherList.vue'
  import WeatherSmallCard from './WeatherSmallCard.vue'
  
  const props = defineProps({
    cities: {
      type: Object,
      required: true,
    },
    activeCity: {
      type: String,
      required: true,
    },
    weatherForecast: {
      type: Object,
      required: true,
    },
  })

</script>
