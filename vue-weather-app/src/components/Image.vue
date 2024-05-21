<template>
  <img :src=source :alt=alt v-bind="$attrs">
</template>

<script setup>
  
  const props = defineProps({
    source: {
      type: String,
      required: true,
    },
    alt: {
      type: String,
      required: true,
    },
  })

</script>