<template>
  <div class='card' v-bind='$attrs'>
    <Image :source="city.image_url" :alt="city.image_alt" />
    <p>
      <span class='action'>{{ city.action }}</span>
        {{ city.city }}
    </p>
  </div>
</template>

<script setup>
import Image from './Image.vue'

const props = defineProps({
  city: {
    type: Object,
    required: true,
  }
})

</script>