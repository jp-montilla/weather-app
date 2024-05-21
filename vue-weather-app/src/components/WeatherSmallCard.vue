<template>
  <div class='weather-small-card'>
    <div class='weather-header'>
      <label class='weather-header__temperature'>18&deg;</label>
      <Image class='weather-icon' :imageObject=imageObject />
    </div>
    <div class='weather-description'>
      <label class='weather-description__description'>overcast clouds</label>
      <label class='weather-description__day'>Friday  05/14</label>
    </div>
  </div>
</template>

<script setup>
  import Image from './Image.vue'

  const imageObject = {
    'source': 'https://openweathermap.org/img/wn/04d.png',
    'alt': 'weather icon'
  }
</script>
