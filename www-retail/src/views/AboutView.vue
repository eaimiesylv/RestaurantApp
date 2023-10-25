<template>
  <div id="container">
    <aside class="sidebar" v-show="asideVisible">
      <!-- Your sidebar content -->
      <img src="@/assets/milan.png" alt="milanDigitalMedicsLogo" class="img-fluid" />
      <ul>
          <li>Services</li>
          <li>Location</li>

      </ul>
     
    </aside>

    <main>
      <header>
        
        <headerComponent :toggle="toggle"/>
      </header>

      <section>
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, dolorum recusandae quisquam rem sed suscipit nostrum facere eligendi placeat sunt temporibus saepe culpa modi eveniet maxime pariatur ipsa, officiis a?
        <slot></slot>
      </section>
      <footer>ok</footer>
    </main>

   
  </div>
</template>
<script setup>
   import headerComponent from '@/components/HeaderComponent.vue';
   import { ref, onMounted, onBeforeUnmount } from "vue";
  const asideVisible = ref(true);
  const toggle= ()=>{
    asideVisible.value = !asideVisible.value;
  }
  const handleResize = () => {
  asideVisible.value = window.innerWidth > 768;
};

onMounted(() => {
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
  padding:1em;
}

aside {
  width: 15%; 
  height:100vh;
  border-style:solid;
}

main {
  flex-grow:1;
 
}
header{
  display:flex;
}
section{
  min-height:90vh;
}
footer {
  background:black;
}
@media (max-width: 768px) {
 
}
</style>
