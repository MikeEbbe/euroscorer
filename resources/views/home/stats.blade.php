@extends('layouts.layout')

@section('content')
<!-- Edition info -->
<div class="xl:pl-[calc(100vw-100%)]">
    <div class="my-6 xl:my-12 flex justify-center items-center text-center">
        <img src="{{ $edition->country->flag }}" alt="{{ $edition->country->name }}.png"
            class="h-8 xl:h-10 w-auto flex-shrink-0 mr-2 xl:mr-4" />
        <h1 class="text-3xl xl:text-4xl font-bold text-gray-900 dark:text-white">
            {{ $edition->city }} {{ $edition->year }}</h1>
    </div>
</div>
<h1 class="text-center my-6 xl:my-12 text-xl font-bold text-gray-900 dark:text-white">
    Statistieken
</h1>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-6 gap-x-8 gap-y-16 xl:px-8">
    <!-- Top 5 participants -->
    <div class="w-full col-span-1 md:col-span-2 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Top 5 beste deelnemers</span>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">#</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Land</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3"></th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Nummer</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($highestTotals as $score)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
                    <td class="pl-1 py-1 xl:pl-6 xl:py-4">
                        <img class="max-h-[22px] xl:max-h-[26px] w-auto border border-gray-300"
                            src="{{ $score->country->flag }}" alt="{{ $score->country->name }}.png">
                    </td>
                    <td class="pr-1 py-1 xl:pr-6 xl:py-4 text-gray-900 dark:text-white">{{
                        $score->country->name }}
                    </td>
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{ $score->song }}
                    </td>
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{
                        $score->avg_total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Top 5 songs -->
    <div class="w-full col-span-1 md:col-span-2 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Top 5 beste liedjes</span>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">#</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Land</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3"></th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Nummer</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($highestSongs as $score)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
                    <td class="pl-1 py-1 xl:pl-6 xl:py-4">
                        <img class="max-h-[22px] xl:max-h-[26px] w-auto border border-gray-300"
                            src="{{ $score->country->flag }}" alt="{{ $score->country->name }}.png">
                    </td>
                    <td class="pr-1 py-1 xl:pr-6 xl:py-4 text-gray-900 dark:text-white">{{
                        $score->country->name }}
                    </td>
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{ $score->song }}
                    </td>
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{
                        $score->avg_song }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Top 5 acts -->
    <div class="w-full col-span-1 md:col-span-2 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Top 5 beste acts</span>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">#</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Land</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3"></th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Nummer</th>
                    <th scope="col" class="px-1 py-1 xl:px-6 xl:py-3">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($highestActs as $score)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
                    <td class="pl-1 py-1 xl:pl-6 xl:py-4">
                        <img class="max-h-[22px] xl:max-h-[26px] w-auto border border-gray-300"
                            src="{{ $score->country->flag }}" alt="{{ $score->country->name }}.png">
                    </td>
                    <td class="pr-1 py-1 xl:pr-6 xl:py-4 text-gray-900 dark:text-white">{{
                        $score->country->name }}
                    </td>
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{ $score->song }}
                    </td>
                    <td class="px-1 py-1 xl:px-6 xl:py-4 text-gray-900 dark:text-white">{{
                        $score->avg_performance }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Worst song -->
    <div class="w-full col-span-1 xl:col-span-3 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Slechtste liedje</span>
        <div class="grid grid-cols-10 px-4 xl:px-0">
            <div
                class="p-4 col-span-10 xl:col-start-4 xl:col-span-4 flex justify-center mx-auto w-full bg-gray-200 rounded-3xl dark:bg-gray-700">
                @if ($lowestSong)
                <div class="flex items-center space-x-4 text-center pointer-events-none select-none">
                    <img class="w-16 h-16 rounded-full border-2 border-gray-300 object-cover"
                        src="{{ $lowestSong->country->flag }}" alt="{{ $lowestSong->country->name }}.png" />
                    <div class="text-left">
                        <p class="text-lg text-gray-900 dark:text-white">{{ $lowestSong->country->name }}</p>
                        <p class="text-base text-gray-500 dark:text-gray-400">{{ $lowestSong->song }}</p>
                    </div>
                </div>
                @else
                <p class="block text-gray-500 dark:text-gray-400 font-medium">Nog geen data beschikbaar.</p>
                @endif
            </div>
        </div>
    </div>
    <!-- Worst act -->
    <div class="w-full col-span-1 xl:col-span-3 text-center">
        <span class="block text-gray-900 font-medium mb-2 dark:text-white">Slechtste act</span>
        <div class="grid grid-cols-10 px-4 xl:px-0">
            <div
                class="p-4 col-span-10 xl:col-start-4 xl:col-span-4 flex justify-center mx-auto w-full xl:w-full bg-gray-200 rounded-3xl dark:bg-gray-700">
                @if ($lowestSong)
                <div class="flex items-center space-x-4 text-center pointer-events-none select-none">
                    <img class="w-16 h-16 rounded-full border-2 border-gray-300 object-cover"
                        src="{{ $lowestAct->country->flag }}" alt="{{ $lowestAct->country->name }}.png" />
                    <div class="text-left">
                        <p class="text-lg text-gray-900 dark:text-white">{{ $lowestAct->country->name }}</p>
                        <p class="text-base text-gray-500 dark:text-gray-400">{{ $lowestAct->song }}</p>
                    </div>
                </div>
                @else
                <p class="block text-gray-500 dark:text-gray-400 font-medium">Nog geen data beschikbaar.</p>
                @endif
            </div>
        </div>
    </div>
    <!-- Song/act disparity -->
    <div class="w-full col-span-1 xl:col-span-3 text-center px-2 xl:px-0">
        <span class="block text-gray-900 font-medium dark:text-white">Hoe liedjes zich verhouden tot acts</span>
        <span class="block text-gray-500 dark:text-gray-400 mb-2">Gemiddeld genomen hebben deze landen een <span class="text-gray-900 dark:text-white">beter liedje
            dan act.</span></span>
        <canvas class="w-full" id="song-act-disparity-chart"></canvas>
    </div>
    <!-- Act/song disparity -->
    <div class="w-full col-span-1 xl:col-span-3 text-center px-2 xl:px-0">
        <span class="block text-gray-900 font-medium dark:text-white">Hoe acts zich verhouden tot liedjes</span>
        <span class="block text-gray-500 dark:text-gray-400 mb-2">Gemiddeld genomen hebben deze landen een <span class="text-gray-900 dark:text-white">betere act
            dan liedje.</span></span>
        <canvas class="w-full" id="act-song-disparity-chart"></canvas>
    </div>
</div>

<!-- Chart data -->
<script>
    const stats = {!!
        json_encode([
            'highestSongActDisparity' => $highestSongActDisparity,
            'highestActSongDisparity' => $highestActSongDisparity
        ]);
    !!};
</script>
@endsection