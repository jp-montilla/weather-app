import { inject } from 'vue'

export class PostApiCallService {
  async getApiCall(path, parameters = {}) {
    const apiBaseUrl = inject('apiBaseUrl')

    try {
      const requestOptions = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(parameters)
      }

      let response = await fetch(apiBaseUrl + '/' + path, requestOptions)
  
      return  await response.json()
    } catch (error) {
      throw Error(error)
    }
  }
}
