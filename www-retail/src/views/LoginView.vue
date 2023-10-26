<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 bg"><!-- Background content --></div>
      <div class="col-md-4">
        <div class="box">
          <logoComponent/>
          <h4 class="m-3 text-center">Sign in to your account</h4>
          <span v-if="isLoading" >Verifying users detail</span>
        <form  @submit.prevent="handleSubmit">
          
           <div>
              
               <ReusableForm :fields="formFields"/>
              
              <div class="d-flex">
                <button type="submit" class="btn btn-primary mt-3">Login</button>
               
                <span> <router-link to="/" class="btn btn-warning mt-3">Register</router-link></span>
              </div> 
            </div>  
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import ReusableForm from "@/components/ReusableForm.vue";
import logoComponent from '@/components/LogoComponent.vue';
import { ref } from 'vue';
import useFormSubmit from '@/composable/useSubmitForm';


const { submitForm, isLoading, errors, msg } = useFormSubmit();

const handleSubmit = async () => {
  const payLoad = {}; 
  const url = '/login';  
  const routeToRedirect = 'recipe'; 
  formFields.value.forEach(field => {
     payLoad[field.databaseField] = field.value;
  })
  submitForm(url, payLoad, routeToRedirect);
 
};
  
  
const formFields = ref([
 
  { type: 'email', label: 'Email', databaseField: 'email', required: true },
  { type: 'password', label: 'Password', databaseField: 'password', required: true },
]);

</script>

<style scoped>
h4{
  color:orange;
}
.container-fluid{
  background: #FAFAFA;
}
.bg {
  background-image: url("@/assets/auth_bg.jpg");
  height: 100vh;
}
span{
  color:orange;
}
.spacing{
  padding:0.4em;
}
.box{
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
  padding:2em; 
  background:white;
  height:100vh;
}
span{
  margin-left:auto;
  
}
@media (max-width: 768px) {
  .bg {
    display: none;
  }
}
</style>
