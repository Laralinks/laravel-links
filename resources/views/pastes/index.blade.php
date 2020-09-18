<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('https://laravel.link/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endif
                <a href="{{ url('https://pastes.laravel.link') }}" class="ml-4 text-sm text-gray-700 underline">Pastes</a>

            </div>
        @endif

        <main>
            <div class="container px-4">

                <div class="flex flex-col lg:flex-row my-10">




                    <div class="min-w-full  mr-0 lg:mr-16">

                        <!-- This is an example component -->
                        <div id="wrapper" class="">
                            <div class="flex sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">

                                <div class="">
                                    <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-500 rounded-full overflow-hidden shadow-2xl">
                                        <div>
                                            <p class="text-3xl font-semibold text-center text-gray-800">{{ $totals->total }}</p>
                                            <p class="text-lg text-center text-gray-500">Total Pastes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-500 rounded-full overflow-hidden shadow-2xl">
                                        <div>
                                            <p class="text-3xl font-semibold text-center text-gray-800">{{$totals->public}}</p>
                                            <p class="text-lg text-center text-gray-500">Public Pastes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-500 rounded-full overflow-hidden shadow-2xl">
                                        <div>
                                        <p class="text-3xl font-semibold text-center text-gray-800">{{$totals->forks}}</p>
                                            <p class="text-lg text-center text-gray-500">Total Forks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="py-1">
                            <div class=" min-w-full mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg rounded-lg">
                                    <div class="p-3 sm:px-20 bg-white border-b border-gray-200">
                                        <div class="mt-2 text-2xl text-center">
                                            Latest Pastes
                                        </div>
                                    </div>
                                    <div class="">
                                        @forelse($pastes as $paste)
                                        <div class="{{$loop->even == 1 ? 'bg-gray-200' : 'bg-gray-500'}} bg-opacity-25 min-w-full px-10 py-6 border-b border-gray-200 md:border-t-0 md:border-l">
                                            <div class="flex justify-between items-center">
                                                <span class="font-light text-gray-600">{{ $paste->created_at->diffForHumans()}}</span>
                                                <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="#">{{$paste->pastelanguage->name}}</a>
                                            </div>
                                            <div class="mt-2">
                                                <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">{{ $paste->title }}</a>{{$paste->fork ? '(Forked)' : ''}}
                                                <p class="mt-2 text-gray-600"><code>{{$paste->description}}</code></p>
                                            </div>
                                            <div class="flex justify-between items-center mt-4">
                                                <a class="text-blue-600 hover:underline" href="/{{$paste->title}}">View Paste</a>
                                                <div>
                                                    <a class="flex items-center" href="#">
                                                        <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="{{$paste->user->profile_photo_url}}" alt="avatar">
                                                        <h1 class="text-gray-700 font-bold">{{$paste->user->name}}</h1>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="p-6 sm:px-20 bg-white">
                                        <div class="mt-1 text-2xl">
                                            {{ $pastes->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
    </div>


    </main>
    @stack('modals')

    @livewireScripts
</body>
</html>
