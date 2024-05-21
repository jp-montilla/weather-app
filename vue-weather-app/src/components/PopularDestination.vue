<template>
  <section class='popular-destination'>
    <h2>Popular Destinations</h2>

    <div class='destinations'>
      <RouterLink to='/city' v-for="city in cities" :key="city.id">
        <SpotlightCard :city="city" />
      </RouterLink>
    </div>
  </section>
</template>

<script setup>
  import { onMounted, ref, inject } from 'vue';

  import SpotlightCard from './SpotlightCard.vue'

  const cities = ref(null);
  
  const popularDestinationService = inject('popularDestinationService')

  onMounted(() => {
    popularDestinationService.getPopularDestination().then(data => cities.value = data.data)
  })
</script>
