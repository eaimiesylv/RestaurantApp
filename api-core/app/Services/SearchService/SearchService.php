<?php

namespace App\Services\SearchService;
use App\Services\SearchService\SearchRepository;



class SearchService
{
    protected SearchRepository $searchRepository;
    

    public function __construct(SearchRepository $searchRepository)
    {
        $this->searchRepository = $searchRepository;

    }
    public function allSearches()
    {
    
        return $this->searchRepository->allSearches();

    }
    public function createSearch(array $all)
    {
       
        return $this->searchRepository->createSearch($all);

    }
    public function updateSearch($request, $search){
        
        return  $this->searchRepository->updateSearch($request, $search);   
    }
    public function showSearch($search)
    {
    
        return  $this->searchRepository->showSearch($search);

    }
   
}