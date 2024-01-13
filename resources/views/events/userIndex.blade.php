@extends('master')

@section('content')
<div class="formParent">
    <h2>Events</h2>

    <div style="display: flex;justify-content: space-around">
        <a href="{{ route('user.dashboard') }}"><button class="smallButton">Return to DashBoard</button></a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Sponsor</th>
                <th>Location</th>
                <th>Date</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($events as $event)
            <tr>
                <td>{{ $event->name }}</td>
                <td>{{ $event->speaker }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->event_date }}</td>
                <td>{{ $event->event_time }}</td>
                <td>
                    <a href="{{ route('events.userDetails', $event->id) }}">Details</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No events found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection