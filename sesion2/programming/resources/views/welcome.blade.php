<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="antialiased bg-green-500">
    <header>
        <div class="container mx-auto p-4 bg-green-700 text-center text-3xl text-white rounded-lg my-4 drop-shadow-lg">
            <h1>Die's App</h1>
        </div>
    </header>
    <main>
        <div class="container mx-auto p-4">
            <h2>{{ __('TABLA DEL 3')}} </h2>
        </div>
        <div class="container mx-auto bg-black text-white">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @for($i = 1; $i <= 12; $i++)
                    <div class="card bg-white rounded-lg shadow-md overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                    <div class="p-6">
                        <div class="text-center text-lg font-bold text-gray-800">
                            {!! $i . " x 3 = " . ($i * 3) !!}
                        </div>
                    </div>
            </div>
            @endfor
        </div>

        </div>
    </main>
    <footer>
        <div class="container mx-auto p-4 bg-zinc-300 text-end text-black text-xl rounded-md">
            {{now()->format(' d / M / Y ')}}
        </div>
    </footer>
</body>

</html>