<?php

namespace App\Services\RecipeService;
use App\Models\Recipes;

class RecipeRepository
{
   
    public function allRecipes()
    {  
      
        return Recipes::paginate(20);

    }
    public function createRecipe($all)
    {  
       
        return Recipes::create($all);

    }
    public function showRecipe($recipe){
        
       
        return Recipes::find($recipe);
        

    }
    public function updateRecipe($request, $recipe){
        
        $recipe->update($request);
        return $user;
        

    }
      
}
