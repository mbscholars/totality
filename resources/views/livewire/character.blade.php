<div>

    <div style="text-align: center" class="grid grid-cols-3">
        <input type="text" class="bg-gray-50 py-3 px-5 outline-none"  />
        <input type="text" class="bg-gray-50 py-3 px-5 outline-none"  />
        <select name="status" id="">
            <option value="dead" selected>Dead</option>
            <option value="alive" >Alive</option>
        </select>
        

    </div>

    <div style="max-width: 1024px" class="bg-gray-50 m-auto sm:grid grid-cols-4 gap-2">

    @foreach ($characters as $character)
    <div class="bg-white border cursor-pointer shadow hover:shadow-lg transition border-gray-100 p-5" wire:click="show({{$character->id}})">
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
