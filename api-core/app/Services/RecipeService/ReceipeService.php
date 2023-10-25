<?php

namespace App\Services\RecipeService;
use App\Services\RecipeRepository\RecipeRepository;



class RecipeService
{
    protected RecipeRepository $recipeRepository;
    

    public function __construct(RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;

    }
    public function allRecipes()
    {
    
        return $this->recipeRepository->allRecipes();

    }
    public function createRecipe(array $all)
    {
    
        return $this->recipeRepository->createRecipe($all);

    }
    public function updateRecipe($request, $recipe){
        
        return  $this->recipeRepository->updateRecipe($request, $Recipe);   
    }
   
   
}