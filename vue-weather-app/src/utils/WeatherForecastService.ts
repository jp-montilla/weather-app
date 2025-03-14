import { WeatherForecastServiceInterface } from "@/interfaces/WeatherForecastServiceInterface";
import { PostApiCallService } from "./PostApiCallService";

import { inject } from 'vue'

export class WeatherForecastService extends PostApiCallService implements WeatherForecastServiceInterface{
  async getWeatherForecast (apiUrl='' , city = 'tokyo', solo = 1) {
    const parameters = {
      city: city,
      solo: solo,
    }

    let forecast = super.getApiCall(apiUrl, parameters)

    return forecast
  }
}
