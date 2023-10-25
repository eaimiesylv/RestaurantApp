<?php

namespace App\Http\Controllers\Recipes;
use App\Http\Controllers\Controller;

use App\Models\Recipes;
use Illuminate\Http\Request;
use App\Http\Requests\RecipesFormRequest;
use App\Services\RecipeService\RecipeService;

class RecipesController extends Controller
{
    protected RecipeService $recipeService;

    public function __construct(RecipeService $recipeService)
    {
       
        $this->recipeService = $recipeService;
    }
    public function index()
    {
       
        return  $this->recipeService->allRecipe();
    }

    public function store(RecipesFormRequest $request)
    {
      
        return  $this->recipeService->createRecipe($request->all());

    }

    public function show(Recipe $recipe)
    {
    
        return  $this->recipeService->showRecipe($recipe);

    }
}
