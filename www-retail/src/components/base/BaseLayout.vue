<template>
  <div id="container">
    <aside class="sidebar" v-show="asideVisible">
      <!-- Your sidebar content -->
   
      <img src="@/assets/milan.png" alt="milanDigitalMedicsLogo" class="img-fluid" />
      <ul class="nav flex-column">
            <li class="nav-item">
              <router-link to="/recipe" class="btn btn-warning mt-3">Recipe</router-link>
             
            </li>
            <li class="nav-item">
              <router-link to="/add-recipe" class="btn btn-warning mt-3">Add Recipe</router-link>

            </li>
           
          
          
          </ul>
     
    </aside>

    <main>
      <header>
        
        <headerComponent :toggle="toggle"/>
      </header>

      <section>
          <slot></slot>
      </section>
      
      <footer>
       


      </footer>
    </main>

   
  </div>
</template>
<script setup>
   import headerComponent from '@/components/HeaderComponent.vue';
   import { ref, onMounted, onBeforeUnmount } from "vue";
   import { useHttpMethods } from '@/composable/httpMethods';
  const asideVisible = ref(true);
 
  const toggle= ()=>{
    asideVisible.value = !asideVisible.value;
  }
  const handleResize = () => {
  asideVisible.value = window.innerWidth > 768;
};


onMounted( async () => {
  
  handleResize(); 
  window.addEventListener('resize', handleResize);
});

onBeforeUnmount(() => {
  window.removeEventListener('resize', handleResize);
});
</script>
<style>

#container {
  display: flex;
  padding:1em 0;
}

aside {
  width:min-content;
  height:100vh;
  padding:1em
}

main {
  flex-grow:1;
  
 
}
header{
  display:flex;
}
section{
  min-height:90vh;
  background:#FAFAFA;
  padding:1em;
}
footer {
  background:black;
}
ul {
  white-space: nowrap;
  /* overflow: hidden; 
  text-overflow: ellipsis;  */
}
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
