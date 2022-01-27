<?php


namespace App\Repositories;

use App\Models\Character;

class CharacterRepository{

    public function store(array $data) : Character
    {


        $character = Character::firstOrCreate(
            [
                'char_id' => $data['char_id']
            ],
            [
                'char_id' => $data['char_id'],
                'name' => $data['name'], 
                'birthday' => $data['birthday'], 
                'image' => $data['img'], 
                'status' => $data['status'], 
                'nickname' => $data['nickname'], 
                'portrayed' => json_encode($data['portrayed']), 
                'category' => json_encode($data['category'])
           ]  
        );

        foreach ($data['occupation'] as $occupation ) 
        {
            $character->occupation()->firstOrCreate([
                'title' => $occupation
            ]);
        }

        return $character;
    }
}