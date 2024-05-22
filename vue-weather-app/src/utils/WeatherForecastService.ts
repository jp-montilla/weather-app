import { WeatherForecastServiceInterface } from "@/interfaces/WeatherForecastServiceInterface";
import { PostApiCallService } from "./PostApiCallService";

import { inject } from 'vue'

export class WeatherForecastService extends PostApiCallService implements WeatherForecastServiceInterface {
  async getWeatherForecast (solo = 1) {
    const path = inject('weatherForecastPath')
    const parameters = {
      city: 'tokyo',
      solo: solo,
    }

    let forecast = super.getApiCall(path, parameters)

    return forecast
  }
}
