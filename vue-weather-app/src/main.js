import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import { CityService } from './utils/CityService'
import { WeatherForecastService } from './utils/WeatherForecastService'

const app = createApp(App)

app.provide('apiBaseUrl', 'http://127.0.0.1:8000/api')
app.provide('weatherForecastPath', 'weather-forecast')

app.provide('cityService', new CityService)
app.provide('weatherForecastService', new WeatherForecastService)

app.use(router)

app.mount('#app')
