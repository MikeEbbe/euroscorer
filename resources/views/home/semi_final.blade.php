@extends('layouts.layout')

@section('content')
<h1 class="text-xl font-bold text-black">
    Semi Final 1
</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th>Country</th>
            <th>Performance</th>
            <th>Song</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($participants as $participant)
        <tr>
            <td>{{ $participant->song }}</td>
            <td>{{ $participant->year }}</td>
            <td>{{ $participant->country->name }}</td>
            <td>{{ $participant->scores->first()->performance }}</td>
            <td>{{ $participant->scores->first()->song }}</td>
            <td>{{ $participant->scores->first()->total }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection