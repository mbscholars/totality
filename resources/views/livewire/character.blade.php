<div>
    
    <div  style="max-width: 90%;  text-align: center" class="m-auto sm:grid sm:grid-cols-5 gap-4 my-5"> 
        <input type="text" wire:model="name" class="bg-gray-50 py-3 px-5 outline-none border border-gray-200" placeholder="Enter Name"  />
        <input type="text" wire:model="occupation" class="bg-gray-50 py-3 px-5 outline-none border border-gray-200"  placeholder="Enter Occupation" />
        <select name="status" wire:model="season"  id="" class="bg-gray-50 py-3 px-5 outline-none border border-gray-200" placeholder="Season">
            <option value="dead" selected>Breaking Bad</option>
            <option value="alive" >Better Call Saul</option>
        </select>
        <select name="status" id="" class="bg-gray-50 py-3 px-5 outline-none border border-gray-200">
            <option value="dead" selected>Dead</option>
            <option value="alive" >Alive</option>
        </select>
        <button wire:click="detail(4)" class="bg-black text-white py-3 px-5 font-bold">
            Search
        </button>

    </div>

    <div style="max-width: 1024px" class="bg-gray-50 m-auto sm:grid sm:grid-cols-4 gap-2">

    @foreach ($characters as $character)
    <div class="bg-white border cursor-pointer shadow hover:shadow-lg transition border-gray-100 p-5" >
        <div class="image-thumb center">
            <img src="{{ $character->image }}" width="400" alt="user image" />
        </div>
        <div class="text-center my-2">
            <h2 class="text-lg font-bold"> {{$character->name }} </h2>
        </div>
        
    </div>
    
    @endforeach
    </div>
</div>
