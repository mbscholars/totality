<!DOCTYPE html>
<html>
<head>
    <title>The Breaking Bad API</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="w-full bg-gray-200 align-items-center py-12">
                        <h2 class="my-auto text-center text-2xl font-bold">The Breaking Bad API</h2>
                    </div>
                    
                    <div style="max-width: 1024px" class="px-4 mx-auto">
                        
                        {{ $slot }}
                    </div>
                        
      


</body>
</html>