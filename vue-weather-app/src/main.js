import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import { CityService } from './utils/CityService'

const app = createApp(App)

app.provide('apiBaseUrl', 'http://127.0.0.1:8000/api')
app.provide('cityService', new CityService)

app.use(router)

app.mount('#app')
