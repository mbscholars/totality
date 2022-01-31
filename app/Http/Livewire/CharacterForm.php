<?php

namespace App\Http\Livewire;

use App\Enums\CharacterStatus;
use App\Http\Requests\CharacterStoreRequest;
use App\Models\Character;
use App\Repositories\CharacterRepository;
use BenSampo\Enum\Rules\EnumValue;
use Livewire\Component;

class CharacterForm extends Component
{

    public $character, 
    $characterStatus, 
    $portrayed,
    $occupation,
    $status,
    $quote; 

    protected $rules = [
        'nickname' => ['required', 'string', 'min:3' , 'max:55' ],
        'occupation' => ['required', 'string'],
        'quote' => ['required' , 'string', 'min:3', 'max:155',],
        'status' => ['required', 'string', ],
    ];

    public function render()
    {
        
        return view('livewire.character-form');
        
    }
    
    public function updated($field)
    {
       $this->validateOnly($field);
    }

   

    public function save(Character $character)
    {
        $data = $this->validate();

        
        $update = (new CharacterRepository)->updateInfo($character, (object) $data);
        

        if(!$update){
            session()->flash('error', 'An error occurred');
        }


        session() -> flash('message', 'Character Information updated successfully'); 
        
    }
    
    public function mount($id)
    {
        $this->character  = Character::with('occupation')->find($id);
        $this->characterStatus =  CharacterStatus::getValues();
        $this->nickname = $this->character->nickname;
        $this->quote = $this->character->quote ?? null;
        $this->status = $this->character->status ?? null;
        $this->occupation = $this->character->occupation->title ?? null;

    }
}
