<?php

namespace App\Http\Livewire;

use App\Models\Character;
use Livewire\Component;

class CharacterInfo extends Component
{

    public $character;


    public function render()
    {
        return view('livewire.character-info');
    }


    public function mount($id)
    {
        $this->character = Character::with('occupation')->findOrFail($id);
    }
}
