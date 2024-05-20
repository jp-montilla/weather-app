<template>
  <div>
    <section class="header-background">
      <h1>A Glimpse into the heart of <span>Japan</span></h1>
    </section>

    <section class="popular-destination">
      <h2>Popular Destinations</h2>

      <div class="destinations">
        <RouterLink to="/city">
        <div class="card">
          <img src="https://wallpapers.com/images/featured/tokyo-dxva6ho3h8x6m3xb.jpg" alt="placeholder image">
          <p><span class="action">Explore</span> Tokyo</p>
        </div>
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