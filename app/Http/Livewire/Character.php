<?php

namespace App\Http\Livewire;

use App\Models\Character as ModelsCharacter;
use Livewire\Component;

class Character extends Component
{
    public function render()
    {
        $characters = ModelsCharacter::paginate(25);
        return view('livewire.character', compact('characters'));
    }
    
    public function show(Character $character)
    {
        
        return view('livewire.character-info', compact('character'));
    }
}
