import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import { PopularDestinationService } from './utils/PopularDestinationService'

const app = createApp(App)

app.provide('apiBaseUrl', 'http://127.0.0.1:8000/api')
app.provide('popularDestinationService', new PopularDestinationService)

app.use(router)

app.mount('#app')
