<div>
    <div class="sm:flex my-10 bg-gray-50 shadow-2xl ">
        <div class="image sm:w-1/3">
            <img src="{{ $character->image ?? '/'}}" alt="" class="w-full h-auto">
        </div>
        <div class="details sm:w-2/3 mx-5 relative py-4">
            <h2 class="text-left font-bold text-2xl">
                {{ $character->name }}
            </h2>

            <p class="border-none border-left border-4 border-gray-300 px-5 bg-gray-50 text-gray-700 my-6">
                {{ $character->quote ?? 'Quote not available' }}
            <br>
            <span>
                -- <i> {{$character ->name}}</i>
            </span>
            </p>

            <ul class="my-4">
                <li>Name: {{ $character->name }}</li>
                <li>Nickname: {{ $character->nickname }}</li>
                <li>Occupation: {{ $character->occupation->title }}</li>
                <li>Show: 
                    @foreach ($character->getPlay() as $play )
                        {{$play->name }}
                    @endforeach

                </li>
            </ul>
            <div class="w-full lg:absolute lg:bottom-5 my-3 ">
                <a href="{{ url('/') }}"  class="text-black  hover:shadow-2xl transition border-black transition border w-1/2 mr-3 px-12 py-2"> Go Back </a>
                <a href=" {{ route('edit', ['id' => $character->id]) }} " class=" hover:shadow-2xl transition bg-black border border-black text-white px-12 w-1/2 mr-3 py-2"> Edit </a>
            </div>
        </div>
    </div>
</div>
