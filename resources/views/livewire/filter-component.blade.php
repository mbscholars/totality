<div>
  
    <div  style="text-align: center" class="m-auto sm:grid sm:grid-cols-3 gap-4 my-5"> 
        <input type="text" wire:model="nameInput"  class="bg-gray-50  w-full py-3 block mb-2 px-5 outline-none border border-gray-200" placeholder="Enter Name"  />
       <select  wire:change="$emit('filterSeason', $event.target.value )"   id="" class="bg-gray-50 w-full block py-3 mb-2 px-5 outline-none border border-gray-200" placeholder="Season">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{$category->name }} </option>
            @endforeach
        </select>
        <select wire:change="$emit('filterStatus', $event.target.value )"  class="bg-gray-50 block w-full mb-2 py-3 px-5 outline-none border border-gray-200">
            @foreach ($characterStatus  as $statusItem)
            <option value="{{ $statusItem }}"> {{$statusItem }} </option>
            @endforeach
        </select>
       

    </div>
</div>
