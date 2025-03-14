<template>
  <ul class='city-weather'>
    <ol :class="{ 'active': activeCity == city.city }" 
        v-for='city in cities' :key='city'
        @click="$parent.$emit('setActiveCity', city.city)"
    >
      {{ city.city }}
    </ol>
  </ul>
</template>

<script setup>
  const props = defineProps({
    cities: {
      type: Object,
      required: true,
    },
    activeCity: {
      type: String,
      required: true,
    },
  })

</script>
