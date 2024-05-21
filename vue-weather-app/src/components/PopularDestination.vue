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
  import SpotlightCard from './SpotlightCard.vue'

  const props = defineProps({
    cities: {
      type: Object,
      required: true
    }
  })
</script>
