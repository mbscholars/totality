<?php

namespace App\Http\Livewire;

use App\Models\Character as ModelsCharacter;
use Livewire\Component;

class Character extends Component
{

    public $counter = 0;
    
    
    public function render()
    {
        $characters = $this->show(null);
        $counter = $this->counter;
        return view('livewire.character', compact('characters','counter'));
    }
    
    public function show($filter = null)
    {
        if($filter){
            //TODO: Write a function to filter the characters
        }
        return ModelsCharacter::paginate(25);
    }

}
