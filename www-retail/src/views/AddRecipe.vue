<template>
   <base-layout>
    <div class="container-fluid">
      <div class="row text">
       
        <div class="col-md-7 offset-md-2">
          <div class="box">
          
            <h4 class="m-3 text-center">Add a recipe</h4>
            <span v-if="isLoading" >Please wait</span>
          <form  @submit.prevent="handleSubmit">
            
            <div>
                
                <ReusableForm :fields="formFields"/>
                
                <div class="d-flex">
                  <button type="submit" class="btn btn-primary mt-3">Add Recipe</button>
                
                 
                </div> 
              </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </base-layout>
</template>

<script setup>
import ReusableForm from "@/components/ReusableForm.vue";
import { ref } from 'vue';
import useFormSubmit from '@/composable/useSubmitForm';


const { submitForm, isLoading, errors, msg } = useFormSubmit();

const handleSubmit = async () => {
  const payLoad = {}; 
  const url = '/recipes'; 
  const routeToRedirect = 'recipe'; 
  formFields.value.forEach(field => {
     payLoad[field.databaseField] = field.value;
  })
  submitForm(url, payLoad, routeToRedirect);
 
};
  
  
const formFields = ref([
 
  { type: 'file', label: 'Image', databaseField: 'image', required: true, placeholder: '' },
  { type: 'text', label: 'Name', databaseField: 'name', required: true , placeholder: 'Enter name'},
  { type: 'number', label: 'Cost', databaseField: 'cost', required: true, placeholder: 'Enter cost e.g 400' },
  { type: 'number', label: 'Calories', databaseField: 'calories_count', required: true, placeholder: 'Enter calories' },
  { type: 'textarea', label: 'Instruction', databaseField: 'instruction', required: true, placeholder: 'Enter instruction' },
]);

</script>

<style scoped>
h4{
  color:orange;
}
.container-fluid{
  background: #FAFAFA;
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
  min-height:50vh;
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
