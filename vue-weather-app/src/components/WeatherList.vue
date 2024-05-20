<template>
  <ul class='city-weather'>
    <ol class='active' v-for='city in cities' :key='city'>{{ city }}</ol>
  </ul>
</template>

<script setup>

  const props = defineProps({
    cities: {
      type: Array,
      required: true
    }
  })

</script>