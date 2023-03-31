@extends('layouts.app')

@section('content')
    <h1>Available Rooms</h1>

    @if ($availableRooms->count() > 0)
        <ul>
            @foreach ($availableRooms as $room)
                <li>{{ $room->name }}</li>
            @endforeach
        </ul>
    @else
        <p>No rooms are available for the selected dates and occupancy.</p>
    @endif
@endsection
