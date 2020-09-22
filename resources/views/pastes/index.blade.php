@extends('layouts.app')

@section('content')

    <div class="container mx-auto">
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




        @livewire('pastes-list')




            </div>
        </div>
    </div>


@endsection
