<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class BreakingBadApiService{

    protected $baseUrl;
    
    public function __construct()
    {
        $this->baseUrl =  config('app.BreakingBadApiUrl');
        
    }

    public function getAllCharacters() : bool|array
    {

        /** Prevent API rate exceeded */
        if(Cache::has('api-timeout'))
        {
            return false;
        }

        $response = Http::withoutVerifying()->get($this->baseUrl .'characters');

        //handle errors
        if($response->status() == 429)
        {
            Cache::remember('api-timeout',  24*60*60 , function () {
                return true;
            });
        }

        
        if( $response->ok() )
        {   
            return $response->json();
        }

        return false;
    }

}