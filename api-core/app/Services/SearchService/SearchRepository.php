<?php

namespace App\Services\SearchService;
use App\Models\Search;

class SearchRepository
{
   
    public function allsearches()
    {  
      
        return Search::paginate(20);

    }
    public function createSearch($all)
    {  

        return Search::create($all);

    }
    public function updateSearch($request, $search){
        
        $search->update($request);
        return $search;
        

    }
    public function showSearch($search){
        
       return Search::find($search);
        

    }
      
}
