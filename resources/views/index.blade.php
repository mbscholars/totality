<!DOCTYPE html>
<html>
<head>
    <title>The Breaking Bad API</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body>
    <div class="w-full bg-gray-200 align-items-center py-12">
                        <h2 class="my-auto text-center text-2xl font-bold">The Breaking Bad API</h2>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        {{-- @livewire('posts') --}}
                    </div>
                </div>
   
   
        @livewire('character')


    @livewireScripts
</body>
</html>