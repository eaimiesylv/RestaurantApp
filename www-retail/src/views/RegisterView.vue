<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 bg"><!-- Background content --></div>
      <div class="col-md-4">
        <div class="box">
          <logoComponent/>
          <h4 class="m-3 text-center"> User Registration</h4>
          <span v-if="isLoading" > Please wait</span>
          <span v-else class="msg"> {{ msg }}</span>
        <form  @submit.prevent="handleSubmit">
          
           <div>
              
               <ReusableForm :fields="formFields"/>
              
              <div class="d-flex">
                <button type="submit" class="btn btn-primary mt-3">Register</button>
               
                <span> <router-link to="/login" class="btn btn-warning mt-3">Login</router-link></span>
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
  const url = '/registers'; 
  const routeToRedirect = '/login'; 
  formFields.value.forEach(field => {
     payLoad[field.databaseField] = field.value;
  })
  submitForm(url, payLoad,routeToRedirect);
 
  resetForm();
};
  
  
  const resetForm = () => {
   
   
    errors.value = {};
    
  };
const formFields = ref([
  { type: 'text', label: 'Full Name', databaseField: 'fullname', required: true,placeholder: ''},
  { type: 'tel', label: 'Phone Number', databaseField: 'phone_number', required: true, placeholder: '' },
  { type: 'email', label: 'Email', databaseField: 'email', required: true, placeholder: '' },
  { type: 'password', label: 'Password', databaseField: 'password', required: true, placeholder: '' },
]);

</script>

<style scoped>
.container-fluid{
  background: #FAFAFA;
}
.bg {
  background-image: url("@/assets/auth_bg.jpg");
  height: 100vh;
}
.msg{
  color:green;
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
  color:orange;
  
}

@media (max-width: 768px) {
  .bg {
    display: none;
  }
}
</style>
