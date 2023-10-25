<?php

namespace App\Http\Controllers\Searches;
use App\Http\Controllers\Controller;
use App\Models\Search;
use Illuminate\Http\Request;
use App\Services\SearchService\SearchService;
use App\Http\Requests\SearchFormRequest;

class SearchController extends Controller
{
    protected SearchService $searchService;

    public function __construct(SearchService $searchService)
    {
       
        $this->searchService = $searchService;
    }
    public function index()
    {
       
        return  $this->searchService->allSearches();
    }

    public function store(SearchFormRequest $request)
    {
      
        return  $this->searchService->createSearch($request->all());

    }

    public function show(Search $search)
    {
    
        return  $this->searchService->showSearch($search);

    }
   
}
