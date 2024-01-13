
@extends('master')

@section('content')
    <div class="formParent">
        <h2>Events</h2>

        <div style="display: flex;justify-content: space-around">
            <a href="{{ route('events.create') }}"><button class="smallButton">Create Event</button></a>
            <a href="{{ route('admin.dashboard') }}"><button class="smallButton">Return to DashBoard</button></a>
        </div>



        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

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
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="smallButton" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                        </form>
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
