<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Character as ModelsCharacter;
use Livewire\Component;


class Character extends Component
{

    public $characters;

    
    protected $listeners = ['filterSeason', 'filterName' ,'filterStatus' => 'filterByStatus'];

    
    public function render()
    {
        return view('livewire.character');
    }
    
    public function mount()
    {
        $this->characters = ModelsCharacter::filterSeason($seasonInput=1); //set initial show to Breaking Bad
    }

    public function filterName($nameInput)
    {
        $this->characters = ModelsCharacter::where('name', 'like', "%{$nameInput}%")->get();
    }

    public function filterByStatus($value)
    {
        $this->characters = ModelsCharacter::where('status', $value)->get();
    }
    
    
    public function filterSeason($seasonInput)
    {
        
        $this->characters = ModelsCharacter::filterSeason($seasonInput);

       
    }
    
    
    
}
