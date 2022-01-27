<?php

namespace App\Actions;

use App\Repositories\CharacterRepository;
use App\Services\BreakingBadApiService;

class GetCharactersAction {

    static function run()
    {  
        $BreakingBadApiService = new BreakingBadApiService;

        $characters = $BreakingBadApiService->getAllCharacters() ;
        // dd($characters);
        foreach ($characters as $character) 
        {
            (new CharacterRepository) -> store($character);
        }

        return true;
    }
}