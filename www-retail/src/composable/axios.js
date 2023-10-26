import axios from 'axios';



// const appURL ="https://mds-dev-01.azurewebsites.net/api/v1"
const appURL = 'http://localhost:8000/api/v1'
const http = axios.create({
  baseURL: appURL,
    headers: {
      "Content-Type": "application/json",
      Accept: "application/json"
    }
  });

  

const token = localStorage.getItem("token");
http.defaults.headers.common.Authorization = token ? `Bearer ${token}` : null;

export {http, appURL};