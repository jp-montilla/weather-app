import { CityServiceInterface } from "@/interfaces/CityServiceInterface";

import { inject } from 'vue'

export class CityService implements CityServiceInterface {
  async getCities () {
    const apiBaseUrl = inject('apiBaseUrl')
    
    try {
      let response = await fetch(apiBaseUrl + '/popular-destinations')
      let cities = await response.json()
      return cities
    } catch (error) {
      throw Error(error)
    }
  }
}
