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

        if(Cache::has('api-timeout'))
        {
            if(Carbon::now() < Cache::get('api-timeout'))
            {
                return false;
            }
        }

        $response = Http::withoutVerifying()->get($this->baseUrl .'characters');

        //handle errors
        if($response->status() == 429)
        {
            Cache::rememberForever('api-timeout', function () {
                return Carbon::now()->addHours(24);
            });
        }

        if( $response->ok() )
        {   
            return $response->json();
        }

        return false;
    }

}