import { inject } from 'vue'

export class PostApiCallService {
  async getApiCall(apiUrl, parameters = {}) {
    console.log(apiUrl)
    try {
      const requestOptions = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(parameters)
      }

      let response = await fetch(apiUrl, requestOptions)
  
      return  await response.json()
    } catch (error) {
      throw Error(error)
    }
  }
}
