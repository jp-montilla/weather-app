<template>
  <section class='popular-destination'>
    <h2>Popular Destinations</h2>

    <div class='destinations'>
      <RouterLink to='/city'>
        <SpotlightCard>
          <Image :imageObject=imageObject />
          <p><span class='action'>Explore</span> Tokyo</p>
        </SpotlightCard>
      </RouterLink>
    </div>
  </section>
</template>

<script setup>
  import SpotlightCard from './SpotlightCard.vue'
  import Image from './Image.vue'

  const imageObject = {
    'source': 'https://wallpapers.com/images/featured/tokyo-dxva6ho3h8x6m3xb.jpg',
    'alt': 'Tokyo image'
  }

</script>