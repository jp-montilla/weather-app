<template>
  <img :src=imageObject.source :alt=imageObject.alt v-bind="$attrs">
</template>

<script setup>
  
  const props = defineProps({
    imageObject: {
      type: Object,
      required: true,
    }
  })

</script>