<?php

namespace App\Http\Livewire;

use App\Enums\CharacterStatus;
use Livewire\Component;
use App\Models\Category;
use App\Models\Character;

class FilterComponent extends Component
{
    public $nameInput,$categories, $characterStatus, $seasonInput;


    public function render()
    {
       
        return view('livewire.filter-component');
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->characterStatus =  CharacterStatus::getValues();
    }

    public function updatedNameInput($value)
    {
      
        $this->emit('filterName', $value);
    }

    public function filterSeason()
    {
        $this->emit('filterSeason', $this->seasonInput);

    }
}
