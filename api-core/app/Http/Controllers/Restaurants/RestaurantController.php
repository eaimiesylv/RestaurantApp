<?php

namespace App\Http\Controllers\Restaurants;
use App\Http\Controllers\Controller;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantFormRequest;
use App\Services\RestaurantService\RestaurantService;

class RestaurantController extends Controller
{
    protected RestaurantService $restaurantService;

    public function __construct(RestaurantService $restaurantService)
    {
       
        $this->restaurantService = $restaurantService;
    }
    public function index()
    {
       
        return  $this->restaurantService->allRestaurants();
    }

    public function store(RestaurantFormRequest $request)
    {
      
        return  $this->restaurantService->createRestaurant($request->all());

    }

    public function show(Restaurant $restaurant)
    {
    
        return  $this->restaurantService->showRestaurant($restaurant);

    }
   
}
