<?php

namespace App\Services\RecipeService;
use App\Models\Recipe;

class RecipeRepository
{
   
    public function allRecipes()
    {  
      
        return Recipe::all();

    }
    public function createRecipe($all)
    {  

        return Recipe::create($all);

    }
    public function updateRecipe($request, $Recipe){
        
        $Recipe->update($request);
        return $user;
        

    }
      
}
