<template>
  <div>
    <HeaderImage />
    <PopularDestination />
    

    <section class="main-weather">
      <div class="main-weather__container">
        <h1>The Japan Weather</h1>
        <ul class="city-weather">
          <ol class="active">Tokyo</ol>
          <ol>Yokohama</ol>
          <ol>Kyoto</ol>
          <ol>Osaka</ol>
          <ol>Sapporo</ol>
          <ol>Nagoya</ol>
        </ul>
        <div class="week-weather-report">
          <div class="weather-small-card">
            <div class="weather-header">
              <label class="weather-header__temperature">18&deg;</label>
              <img src="https://openweathermap.org/img/wn/04d.png" class="weather-icon"  alt="weather icon">
            </div>
            <div class="weather-description">
              <label class="weather-description__description">overcast clouds</label>
              <label class="weather-description__day">Friday  05/14</label>
            </div>
          </div>

          <div class="weather-small-card">
            <div class="weather-header">
              <label class="weather-header__temperature">25&deg;</label>
              <img src="https://openweathermap.org/img/wn/10d.png" class="weather-icon"  alt="weather icon">
            </div>
            <div class="weather-description">
              <label class="weather-description__description">light rain</label>
              <label class="weather-description__day">Saturday 05/15</label>
            </div>
          </div>

          <div class="weather-small-card">
            <div class="weather-header">
              <label class="weather-header__temperature">32&deg;</label>
              <img src="https://openweathermap.org/img/wn/11d.png" class="weather-icon"  alt="weather icon">
            </div>
            <div class="weather-description">
              <label class="weather-description__description">storm</label>
              <label class="weather-description__day">Sunday 05/16</label>
            </div>
          </div>

          <div class="weather-small-card">
            <div class="weather-header">
              <label class="weather-header__temperature">21&deg;</label>
              <img src="https://openweathermap.org/img/wn/03d.png" class="weather-icon"  alt="weather icon">
            </div>
            <div class="weather-description">
              <label class="weather-description__description">scattered clouds</label>
              <label class="weather-description__day">Monday 05/17</label>
            </div>
          </div>

          <div class="weather-small-card">
            <div class="weather-header">
              <label class="weather-header__temperature">19&deg;</label>
              <img src="https://openweathermap.org/img/wn/04n.png" class="weather-icon"  alt="weather icon">
            </div>
            <div class="weather-description">
              <label class="weather-description__description">overcast clouds</label>
              <label class="weather-description__day">Tuesday 05/18</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>


<script setup>
  import HeaderImage from '../components/HeaderImage.vue'
  import PopularDestination from '../components/PopularDestination.vue'

</script>