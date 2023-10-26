<template>
  <base-layout>

      <section>
        <div v-if="isLoading" class="row">
          <div class="col-md-12" > Please wait</div>
     </div>
      
      <div v-else class="row">
          <div class="col-md-12 m-4">
            <h4>Availabe Recipe</h4>
          </div>
      
              <div class="card" v-for="(product, index) in products" :key="index">
                 <div class="row">
                    <div class="col-md-5 col-sm-5 col-5">
                      <img class="img-fluid" src="@/assets/fruit.jpg" alt="Car Image">   
                    </div>
                    <div class="col-md-7 col-sm-7 col-7 pt-2">
                         <h4>Recipe Name: {{ product.name }} </h4>
                        <div class="d-flex p-2">
                            <h5>Calorie Count: {{ product.calories_count }}</h5>
                            <h5 class="mr-3">Cost: {{ product.cost }}</h5>
                        </div>
                        
                         <h5 class = "text-center">Instruction</h5>
                         <p>{{ product.instruction }}</p>
                    </div>
                  </div>
              </div>
               
       </div>
      </section>
      
  </base-layout>
   

</template>
<script setup>
   
   import { ref, onMounted  } from "vue";
   import { useHttpMethods } from '@/composable/httpMethods';
   import { AxiosError } from 'axios';
 
  const { get } = useHttpMethods();
const products = ref([]);
const isLoading = ref(true);
const errors = ref({});

onMounted( async () => {
  
  try{
      let response=await get('/recipes');
      console.log(response.data.data);
      products.value =response.data.data;
     
    }
    catch (err) { 

      if (err instanceof AxiosError) {
        errors.value = err.response?.data.errors || {};
        console.error(err.response?.data);
      
      }else{
        console.error(err)
      }

    }finally{

      isLoading.value = false;
      console.log('finally')
     
      
    }
 
});


</script>
<style>


div{
  margin:0;
  padding:0;
 }
.card{
  padding:0;
  margin: 0;
  border-style:solid;
  width:49%; 
  margin:0.5%
}
h5:nth-child(2){
  margin-left:auto;
}
@media (max-width: 768px) {
  .card{
    border-style:solid;
    width:99%; 
    margin:0.5%
 }
}
@media (max-width: 768px) {
 

}
</style>
