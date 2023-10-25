<template>
  <div id="container">
   
    <aside class="sidebar" :class="{sidebar: !isSidebarClosed }">
      <ul>
        <li class="text-center">
          <router-link to="/" class="link">
            <img src="/assets/images/user.png" width="75" height="50"/>
          </router-link>
          <h6 class="mt-2 white">Paul 12</h6>
          <h6><small>Admin</small></h6>
        </li>
        <li><i class="fa-solid fa-user-plus"></i><router-link to="/register" class="link">Register</router-link></li>
        <li><i class="fa-solid fa-sign-in"></i><router-link to="/login" class="link">Login</router-link></li>
       
        
        <li><i class="fa-solid fa-dashboard"></i><router-link to="/studenthome" class="link">Dashboard</router-link></li>
        <li><i class="fa-solid fa-dashboard"></i><router-link to="/adminhome" class="link">Dashboard</router-link></li>
        <li><i class="fa-solid fa-dashboard"></i><router-link to="/staffhome" class="link">Dashboard</router-link></li>
      
      
        <hr>
        <!-- Add more sidebar links as needed -->
        
        
        <li><i class="fa-solid fa-sign-out"></i><a @click="logout" class="link">Log Out</a></li>

      </ul>
</aside>

    <main>
      <header>
        <ul>
          <li><i id="sidebar-toggle" class="fa-solid fa-bars" @click="toggleSidebar"></i></li>
          <li class="search-container">
            
                Select session
          </li>
          <li class="notification"><i class="fa fa-bell"></i>
           
          </li>
          <li class="tools"><i class="fa fa-wrench"></i><span>Tools</span></li>
          <li class="help"><i class="fa fa-question"></i><span>Help</span></li>
         
        </ul>
      </header>

     
      <section>
        <slot></slot>
      </section>
    </main>
   <footer>ok</footer>
  </div>
</template>

<script>
// import Asidebar from '../html/AsideComponent.vue'
export default {
  components:{
    // Asidebar,
    // SelectSession
  },
  data() {
    return {
      role:0,
      sidebar: null, // Initialize sidebar as null
      isSidebarClosed: false, // Set initial value of isSidebarClosed
      sessions: null, // Changed from this.sessions to null to prevent default selection
      selectedSession: null,
      selectedSessionId:null
    };
  },
  methods: {
    toggleSidebar() {
      // Toggle the value of isSidebarClosed
      this.isSidebarClosed = !this.isSidebarClosed;
      // Modify the display property based on the value of isSidebarClosed
      this.sidebar.style.display = this.isSidebarClosed ? 'none' : 'block';
    },
  
   
   
  },
  mounted() {
    
    this.sidebar = document.querySelector('.sidebar');
    // Get the computed style of the sidebar
    const computedStyle = getComputedStyle(this.sidebar);
    // Get the value of the display property
    const display = computedStyle.getPropertyValue('display');

    // Set the value of isSidebarClosed based on the display property
    this.isSidebarClosed = display === 'none';

    const roles =localStorage.getItem('role');
    this.role= Number(atob(roles));

    
  
  },
};
</script>

<style>

/* style the page layout*/
#container {
  display: grid;
  grid-template-columns: max-content 1fr;
  grid-template-rows: 1fr auto;
  grid-template-areas: 
      "aside main"
      "footer footer";
  height: 100vh;
  margin: 0;
  overflow-y: hidden; 
}

.sidebar {
  
  max-height: calc(100vh - 30px); 
  overflow-y: auto;
  background-color: #0F5298;
  padding:0 1em;
}
aside{
  grid-area:aside;
}
main{
  grid-area:main;
  background-color: #f0f0f0;
  padding:1.5em;
  max-height: calc(100vh - 30px); 
  overflow-y: auto;
}
section{
  margin-top:0.5em
}
header, section{
  background-color: white;
  padding:1.5em;
  
}
footer{
  grid-area:footer;
}
/* style the header element*/
header ul {
  display: flex;
  margin: 0 !important;
  padding: 0 !important;
}

.search-container {
  margin-right: auto;
}

header  li:not(.search-container, .fa-solid){
  margin-left: 1em;
}
header span {
  margin-left:0.5em;
}
/* other custom style*/
.fa-solid {
  margin-right: 10px;
}
aside li,a {
  color: white !important;
  padding:0.5em 0;
}
.link{
  text-decoration:none !important;
}


@media (max-width: 900px) {
  .sidebar ,span{
    display: none;
  }
  
 
}

@media (min-width: 900px) {
  .sidebar {
    display: block;
  }
}
</style>