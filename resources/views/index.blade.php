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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>The Breaking Bad API</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        {{-- @livewire('posts') --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

   
        @livewire('character')


    @livewireScripts
</body>
</html>