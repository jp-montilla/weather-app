import { ref, inject, onMounted } from 'vue'

export default function useLandingPage() {

  const cities = ref(null)

  const activeCity = ref('Tokyo')
  
  const weatherForecast = ref(null) 
  
  const cityService = inject('cityService')

  const weatherForecastService = inject('weatherForecastService')
  
  const weatherForecastApiUrl = inject('apiBaseUrl') + '/' + inject('weatherForecastPath')

  onMounted(() => {
    cityService.getCities().then(data => cities.value = data.data)
    updateWeatherList()
  })

  function setActiveCity(city) {
    activeCity.value = city
    updateWeatherList()
  }

  function updateWeatherList() {
    weatherForecastService.getWeatherForecast(weatherForecastApiUrl, activeCity.value).then(data => weatherForecast.value = data.data)
  }

  return {
    cities,
    activeCity,
    weatherForecast,
    setActiveCity,
  }
}