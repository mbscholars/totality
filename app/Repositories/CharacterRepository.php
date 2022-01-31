<?php


namespace App\Repositories;

use App\Models\Category;
use App\Models\Character;

class CharacterRepository{

    public function store(array $data) : Character
    {

        $character = $this->createCharacter($data);
        
        $character->setCharacterCategories($data['category'] ?? null);

        $this->addCharacterOccupations($character, $data['occupation']);

        return $character;
    }

    
  
    public function createCharacter(array $data)
    {
        
       return Character::firstOrCreate(
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
                'portrayed' => ($data['portrayed']),     
           ]  
        );
    }

    public function addCharacterOccupations(Character $character, array $occupations) : void
    {
        foreach ($occupations as $occupation ) 
        {
            $character->occupation()->firstOrCreate([
                'title' => $occupation
            ]);
        } 
    }

    public function updateInfo(Character $character, $data) : bool
    {
        $character->update([
            'nickname' => $data->nickname,
            'status' => $data->status,
            'quote' => $data->quote,
        ]);

        $character->occupation()->first()->update([
            'title' => $data->occupation 
        ]);
       
        return true;
    }
}