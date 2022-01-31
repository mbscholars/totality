<div>
    
 

    <div class="mx-auto mb-10 sm:grid sm:grid-cols-4 gap-2">

        {{-- {{dd($characters[0])}} --}}
    @if (count($characters) == 0)
        <div class="bg-orange-50 text-red-500 block py-5 px-5 text-lg"> No characters found</div>       
    @else    
    @foreach ($characters as $character)
    <a href="{{ route('show', ['id' => $character->id]) }}">
    <div class="bg-white border cursor-pointer shadow hover:shadow-lg transition border-gray-100 p-5" >
        <div class="image-thumb center sm:h-72">
            <img src="{{ $character->image ?? '/' }}" width="400" alt="user image" />
        </div>
        <div class="text-center my-2">
            <h2 class="text-lg font-bold"> {{$character->name }} </h2>
        </div>
        
    </div>
    </a>
    
    @endforeach
    @endif
    </div>
</div>
