@extends('layouts.layout')

@section('content')
<h1 class="text-center my-6 md:my-12 text-xl font-bold text-gray-900 dark:text-white">
    Halve Finale {{ $stage }}
</h1>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Land</th>
                <th scope="col" class="px-1 py-1 md:px-6 md:py-3"></th>
                <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Nummer</th>
                <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Act</th>
                <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Liedje</th>
                <th scope="col" class="px-1 py-1 md:px-6 md:py-3">Totaal</th>
                <th scope="col" class="px-1 py-1 md:px-6 md:py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scores as $score)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="px-1 py-1 md:w-4 md:px-5 md:py-3 border-l-[12px] @if($loop->iteration <= 10) border-green-700 @else border-red-500 @endif">
                    <img class="border border-gray-300" src="{{ $score->participant->country->flag }}" alt="{{ $score->participant->country->name }}.png">
                </td>
                <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{ $score->participant->country->name }}
                </td>
                <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{ $score->participant->song }}</td>
                <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{
                    $score->performance }}</td>
                <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{
                    $score->song }}</td>
                <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">{{
                    $score->total }}</td>
                <td class="px-1 py-1 md:px-6 md:py-4 text-gray-900 dark:text-white">
                    <a href="/{{ $year }}/score/{{ $score->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Bewerken</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection