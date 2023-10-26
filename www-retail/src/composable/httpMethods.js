
import { http } from "./axios";

export function useHttpMethods() {
 
   function post(route ,payload) {
      return  http.post(route, payload);
   }

  function get(route) {
    
      return http.get(route);
  }

  function del(route) {
    
      return http.delete(route);
  }

  function put(route, payload) {
    
    return http.put(route, payload);
     
  }

  return {
    //error,
    post,
    get,
    del,
    put,
  };
}

