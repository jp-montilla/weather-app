<template>
    <div class='weather-header'>
      <label class='weather-header__temperature'>{{ forecast.temperature }}&deg;</label>
      <Image class='weather-icon' :source="forecast.icon" :alt="forecast.weather" />
    </div>
    <div class='weather-description'>
      <label class='weather-description__description'>{{ forecast.weather }}</label>
      <label class='weather-description__day'>{{ forecast.date }}</label>
    </div>
</template>

<script setup>
  import Image from './Image.vue'

  const props = defineProps({
    forecast: {
      type: Object,
      required: true,
    },
  })
</script>
