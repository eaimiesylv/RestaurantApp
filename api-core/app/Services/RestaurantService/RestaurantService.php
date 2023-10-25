<?php

namespace App\Services\RestaurantService;
use App\Services\RestaurantService\RestaurantRepository;



class RestaurantService
{
    protected RestaurantRepository $restaurantRepository;
    

    public function __construct(RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;

    }
    public function allRestaurants()
    {
    
        return $this->restaurantRepository->allRestaurants();

    }
    public function createRestaurant(array $all)
    {
    
        return $this->restaurantRepository->createRestaurant($all);

    }
    public function updateRestaurant($request, $restaurant){
        
        return  $this->restaurantRepository->updateRestaurant($request, $restaurant);   
    }
    public function showRestaurant($restaurant)
    {
    
        return  $this->restaurantRepository->showRestaurant($restaurant);

    }
   
   
}