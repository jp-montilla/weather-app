import { IPopularDestinationService } from "./IPopularDestinationService";

import { inject } from 'vue'

export class PopularDestinationService extends IPopularDestinationService {
  async getPopularDestination () {
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