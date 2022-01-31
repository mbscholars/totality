<div>
    <div style="max-width: 894px;" class="m-auto">
        <h2 class="text-center m-5 font-bold text-xl"> Edit Record for {{ $character->name}} </h2>
        <a href="{{ route('show', ['id' => $character->id]) }}" class="bg-gray-50 border border-gray-500 text-black px-5 py-2 hover:bg-gray-50 mx-6">
            Go Back
        </a>
        <form wire:submit.prevent="save('{{$character->id}}')">
            <div class="m-6 mb-10">
            <div class=" my-5">
                @if (session()->has('message'))
                    <div class="bg-green-100 border border-green-300 text-bold text-green-600 py-4 px-5">
                        {{ session('message') }}
                    </div>
                @endif
             
            </div>

            
                <div>
                    <label for="" class=" text-gray-500"> Nickname</label>
                <input type="text"  class="py-5 block w-full px-5 my-3 border outline-none hover:shadow-lg transition border-gray-300 bg-gray-50" placeholder="Nick Name" wire:model="nickname">
                    @error('nickname')
                    <span class="text-red-500 py-2">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                
                <div>
                    <label for="" class=" text-gray-500"> Occupation </label>
                    <input type="text"  class="py-5 block w-full px-5 my-3 border outline-none hover:shadow-lg transition border-gray-300 bg-gray-50" placeholder="Occupation" wire:model="occupation">
                    @error('occupation')
                    <span class="text-red-500 py-2">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label for="" class=" text-gray-500"> Quote</label>
                    <textarea type="text"  class="py-5 block w-full px-5 my-3 border outline-none hover:shadow-lg transition border-gray-300 bg-gray-50" wire:model="quote" placeholder="Quote"></textarea>
                    @error('quote')
                    <span class="text-red-500 py-2">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label for="" class=" text-gray-500"> Status </label>
                    <select wire:model="status" class="py-5 block w-full px-5 my-3 border outline-none hover:shadow-lg transition border-gray-300 bg-gray-50">
                        @foreach ($characterStatus as $item)
                        <option value="{{ $item }}" @if($character->status == $item) selected  @endif > {{$item}} </option>
                        @endforeach
                    </select>
                    @error('status')
                    <span class="text-red-500 py-2">
                        {{$message}}
                    </span>
                    @enderror
        </div>
        
        <button type="submit" class="bg-black py-3 px-14 transition focus:py-5 hover:shadow-2xl text-white" > Edit </button>
    </form>
    </div>
    </div>
</div>
