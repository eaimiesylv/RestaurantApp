<?php

namespace App\Services\RestaurantService;
use App\Models\Restaurant;

class RestaurantRepository
{
   
    public function allRestaurants()
    {  
      
        return Restaurant::all();

    }
    public function createRestaurant($all)
    {  

        return Restaurant::create($all);

    }
    public function updateRestaurant($request, $Restaurant){
        
        $Restaurant->update($request);
        return $Restaurant;
        

    }
      
}
