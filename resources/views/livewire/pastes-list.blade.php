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
                        <div class="justify-between items-center flex">
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
