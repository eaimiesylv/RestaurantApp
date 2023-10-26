<template>
    <div class="container-fluid p-2">
      <div class="row" >
      
        <div class="col-md-4 col-sm-4 col-4">
          <i class="fas fa-bars"  @click="toggle()"></i>
          
        </div>

        <div class="col-md-4 col-sm-4 col-4">
          <input type="text" class="form-control" placeholder="Enter recipe name" />
        </div>
  
        <!-- Navigation at the far right -->
        <nav class="col-md-4 col-sm-4 col-4">
          <ul class="d-flex justify-content-end align-items-center">
           
            <li class="dropdown">
              <a class="dropdown-toggle no-arrow" data-bs-toggle="dropdown">
                <img src="@/assets/profile.png" alt="Profile Logo" class="rounded-circle" />
              </a>
              <ul class="dropdown-menu">
                <li><router-link to="#" class="dropdown-item">Profile </router-link></li>
                <li><router-link to="#" class="dropdown-item">Setting </router-link></li>
                <li @click="logOut" class="dropdown-item" id="logout">Sign Out </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  
  </template>
  <script setup>
   
    import { useHttpMethods } from '@/composable/httpMethods';
    import { useRouter } from "vue-router";
    //import { AxiosError } from 'axios';
    const { props } = defineProps(['toggle']);
    const router = useRouter();

  const logOut= async () => {
   
  
    const { del } = useHttpMethods();
   
    router.push({ name: 'register' })
    // try {
    //   let response = await ("/log-out");
    
    //   // msg.value = response.data.success;
    //  router.push({ name: 'register' })
       

    // } catch (err) {
    //   if (err instanceof AxiosError) {
       
      
    //     console.error(err.response?.data.errors);

    //   } else {
    //     console.error(err);
    //   }
    // } finally {
     
    //   console.log('finally');
    // }
  };

</script>
  
  <style scoped>
  
    a {
      text-decoration: none;
    }
  
    img {
      height: 50px;
    }
  
    .no-arrow::after {
      display: none !important;
    }
  
   
  
    .dropdown-menu {
      margin-top: 1.9em !important;
      margin-right: 0em !important;
      width: 250px;
    }
  
    .dropdown-menu li {
      padding: 0.5em;
      font-weight: bold;
      border-bottom: 1px solid #FAFAFA;
    }
  
    #logout {
      border-bottom: none;
      border-radius: 20px;
      text-align: center;
      margin: 1.3em auto;
      padding: 12px;
      background: #4EA1AC;
      width: 40%;
      color: white;
    }
  
    #logout a {
      color: white;
    }
  
    @media (max-width: 768px) {
      img {
        height: 40px;
      }
      span{
        display:none;
      }
     
    }
  </style>
  