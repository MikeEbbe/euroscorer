@extends('layouts.layout')

@section('content')
<div class="lg:pl-[calc(100vw-100%)]">
    <div class="my-6 md:my-12 flex justify-center items-center text-center">
        <img src="{{ $edition->country->flag }}" alt="{{ $edition->country->name }}.png"
            class="h-8 md:h-10 w-auto flex-shrink-0 mr-2 md:mr-4" />
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
            {{ $edition->city }} {{ $edition->year }}</h1>
    </div>
</div>
<h1 class="text-center my-6 md:my-12 text-xl font-bold text-gray-900 dark:text-white">
    Statistieken
</h1>
<div class="grid grid-cols-1 md:grid-cols-6 gap-x-8 gap-y-16 md:px-8">
    <div class="w-full md:col-span-2 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Top 5 beste deelnemers</span>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">#</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Land</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3"></th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Nummer</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($highestTotals as $score)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
                    <td class="pl-1 py-1 md:pl-6 md:py-4">
                        <img class="max-h-[22px] md:max-h-[26px] w-auto border border-gray-300"
                            src="{{ $score->country->flag }}" alt="{{ $score->country->name }}.png">
                    </td>
                    <td class="pr-1 py-1 md:pr-6 md:py-4 text-gray-900 dark:text-white">{{
                        $score->country->name }}
                    </td>
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{ $score->song }}
                    </td>
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{
                        $score->avg_total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="w-full md:col-span-2 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Top 5 beste liedjes</span>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">#</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Land</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3"></th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Nummer</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($highestSongs as $score)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
                    <td class="pl-1 py-1 md:pl-6 md:py-4">
                        <img class="max-h-[22px] md:max-h-[26px] w-auto border border-gray-300"
                            src="{{ $score->country->flag }}" alt="{{ $score->country->name }}.png">
                    </td>
                    <td class="pr-1 py-1 md:pr-6 md:py-4 text-gray-900 dark:text-white">{{
                        $score->country->name }}
                    </td>
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{ $score->song }}
                    </td>
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{
                        $score->avg_song }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="w-full md:col-span-2 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Top 5 beste acts</span>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">#</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Land</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3"></th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Nummer</th>
                    <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($highestActs as $score)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
                    <td class="pl-1 py-1 md:pl-6 md:py-4">
                        <img class="max-h-[22px] md:max-h-[26px] w-auto border border-gray-300"
                            src="{{ $score->country->flag }}" alt="{{ $score->country->name }}.png">
                    </td>
                    <td class="pr-1 py-1 md:pr-6 md:py-4 text-gray-900 dark:text-white">{{
                        $score->country->name }}
                    </td>
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{ $score->song }}
                    </td>
                    <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{
                        $score->avg_performance }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="w-full md:col-span-3 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Slechtste liedje</span>
        <div class="grid grid-cols-10 px-4 md:px-0">
            <div class="p-4 col-span-10 md:col-start-4 md:col-span-4 mx-auto w-full bg-gray-200 rounded-3xl dark:bg-gray-700">
                <div class="flex items-center space-x-4 text-center pointer-events-none select-none">
                    <img class="w-16 h-16 rounded-full border-2 border-gray-300 object-cover"
                        src="{{ $lowestSong->country->flag }}" alt="{{ $lowestSong->country->name }}.png" />
                    <div class="text-left">
                        <p class="text-lg text-gray-900 dark:text-white">{{ $lowestSong->country->name }}</p>
                        <p class="text-base text-gray-500 dark:text-gray-400">{{ $lowestSong->song }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:col-span-3 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Slechtste act</span>
        <div class="grid grid-cols-10 px-4 md:px-0">
            <div class="p-4 col-span-10 md:col-start-4 md:col-span-4 mx-auto w-full bg-gray-200 rounded-3xl dark:bg-gray-700">
                <div class="flex items-center space-x-4 text-center pointer-events-none select-none">
                    <img class="w-16 h-16 rounded-full border-2 border-gray-300 object-cover"
                        src="{{ $lowestAct->country->flag }}" alt="{{ $lowestAct->country->name }}.png" />
                    <div class="text-left">
                        <p class="text-lg text-gray-900 dark:text-white">{{ $lowestAct->country->name }}</p>
                        <p class="text-base text-gray-500 dark:text-gray-400">{{ $lowestAct->song }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:col-span-3 text-center px-2 md:px-0">
        <span class="block text-gray-900 font-medium dark:text-white">Hoe liedjes zich verhouden tot acts</span>
        <span class="block text-gray-500 dark:text-gray-400 mb-2">Een hoger verschil wijst op een grotere afwijking van
            de acts.</span>
        <canvas class="w-full" id="song-act-disparity-chart"></canvas>
    </div>
    <div class="w-full md:col-span-3 text-center px-2 md:px-0">
        <span class="block text-gray-900 font-medium dark:text-white">Hoe acts zich verhouden tot liedjes</span>
        <span class="block text-gray-500 dark:text-gray-400 mb-2">Een hoger verschil wijst op een grotere afwijking van
            de liedjes.</span>
        <canvas class="w-full" id="act-song-disparity-chart"></canvas>
    </div>
</div>

<script>
    const stats = {!! json_encode([
            'highestSongActDisparity' => $highestSongActDisparity,
            'highestActSongDisparity' => $highestActSongDisparity
            ]) !!};
</script>
@endsection