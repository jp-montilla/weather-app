<template>
  <section class="popular-destination">
    <h2>Popular Destinations</h2>

    <div class="destinations">
      <RouterLink to="/city">
        <SpotlightCard>
          <img src="https://wallpapers.com/images/featured/tokyo-dxva6ho3h8x6m3xb.jpg" alt="placeholder image">
          <p><span class="action">Explore</span> Tokyo</p>
        </SpotlightCard>
      </RouterLink>

      <RouterLink to="/city">
      <div class="card">
        <img src="https://images6.alphacoders.com/386/386844.jpg" alt="placeholder image">
        <p><span class="action">Uncover</span> Yokohama</p>
      </div>
      </RouterLink>

      <div class="card">
        <img src="https://4kwallpapers.com/images/walls/thumbs_3t/4319.jpg" alt="placeholder image">
        <p><span class="action">Discover</span> Kyoto</p>
      </div>

      <div class="card">
        <img src="https://images4.alphacoders.com/596/596229.jpg" alt="placeholder image">
        <p><span class="action">Relax</span> Osaka</p>
      </div>

      <div class="card">
        <img src="https://images6.alphacoders.com/107/1076870.jpg" alt="placeholder image">
        <p><span class="action">Wonder</span> Sapporo</p>
      </div>

      <div class="card">
        <img src="https://wallpapers.com/images/hd/nagoya-osawari-castle-3xqzwhxaautsss95.jpg" alt="placeholder image">
        <p><span class="action">Adventure</span> Nagoya</p>
      </div>
    </div>
  </section>
</template>

<script setup>
  import SpotlightCard from './SpotlightCard.vue'

</script>