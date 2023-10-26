// useFormSubmit.js
import { ref } from 'vue';
import { useHttpMethods } from '@/composable/httpMethods';
import { toast } from 'vue3-toastify';
import { AxiosError } from 'axios';
import { useRouter } from "vue-router";

export default function useFormSubmit() {
  const isLoading = ref(false);
  const errors = ref({});
  const msg = ref("");
  const router = useRouter();

  const submitForm = async (url, payload, routeToRedirect ) => {
    isLoading.value = true;
    const { post } = useHttpMethods();
    

    try {
      let response = await post(url, payload);
      isLoading.value = false;
      msg.value = response.data.success;
     
         toast(response.data.success);
      
    if (routeToRedirect) {
  
         
          router.push({ path: '/recipe' })
       }

    } catch (err) {
      if (err instanceof AxiosError) {
        errors.value = err.response?.data.errors || {};
        toast(err.response?.data?.errors);
        // toast(err.response?.data.errors);
        console.error(err.response?.data.errors);

      } else {
        toast("Could not validate your request");
        console.error(err);
      }
    } finally {
      isLoading.value = false;
      console.log('finally');
    }
  };

 

  return { submitForm, isLoading, errors, msg };
}
