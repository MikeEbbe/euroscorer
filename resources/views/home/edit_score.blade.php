@extends('layouts.layout')

@section('content')
<h1 class="text-center my-6 md:my-12 text-xl font-bold text-gray-900 dark:text-white">
    Edit score
</h1>
<form method="post" action="{{ route('score.update', ['year' => $year, 'id' => $id]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    @method('PUT')
    <div class="grid grid-cols-10">
        <div class="px-4 col-span-10 md:col-start-4 md:col-span-4">
            <div class="flex mb-4">
                <span
                    class="flex-shrink-0 rounded-l-md px-4 py-3 md:py-2 whitespace-no-wrap text-gray-900 bg-gray-300 dark:bg-gray-700 dark:text-white">Performance</span>
                <input name="performance"
                    class="rounded-r-md px-4 py-3 md:py-2 w-full border-2 border-gray-300 text-gray-900 bg-white placeholder-gray-400 dark:border-none dark:bg-gray-500 dark:text-white dark:placeholder-gray-300"
                    type="number" value="{{ $score->performance }}" min="0" max="10" step=".5" placeholder="9.5"
                    required />
            </div>
            <div class="flex mb-4">
                <span
                    class="flex-shrink-0 rounded-l-md px-4 py-3 md:py-2 whitespace-no-wrap text-gray-900 bg-gray-300 dark:bg-gray-700 dark:text-white">Song</span>
                <input name="song"
                    class="rounded-r-md px-4 py-3 md:py-2 w-full border-2 border-gray-300 text-gray-900 bg-white placeholder-gray-400 dark:border-none dark:bg-gray-500 dark:text-white dark:placeholder-gray-300"
                    type="number" value="{{ $score->song }}" min="0" max="10" step=".5" placeholder="6.5" required />
            </div>
            <div class="text-center">
                <button type="submit"
                    class="w-6/12 md:w-4/12 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-lg text-base md:text-sm px-5 py-3 md:py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Bijwerken</button>
            </div>
        </div>
    </div>
</form>

{{-- <p>{{ $score->performance }}</p>
<p>{{ $score->song }}</p>
<p>{{ $score->total }}</p> --}}
@endsection