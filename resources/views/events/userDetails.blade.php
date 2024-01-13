@extends('master')

@section('content')
    <div class="formParent">
        <h2>Event Details</h2>

        <div>
            <strong>Name:</strong> {{ $event->name }}
        </div>

        <div>
            <strong>Description:</strong> {{ $event->description }}
        </div>

        <div>
            <strong>Location:</strong> {{ $event->location }}
        </div>

        <div>
            <strong>Date:</strong> {{ $event->event_date }}
        </div>

        <div>
            <strong>Time:</strong> {{ $event->event_time }}
        </div>

        <div>
            <strong>Sponsor:</strong> {{ $event->speaker }}
        </div>

        <div>
            <strong>Partner:</strong> {{ $event->partner }}
        </div>

        <br>

        <form method="POST" action="{{ route('cart.add', ['eventId' => $event->id]) }}">
            @csrf
            <button type="submit" class="largeButton">Add to Cart</button>
        </form>


        <br>

        <a href="{{ route('events.userIndex') }}">
            <button class="largeButton">Back to Events</button>
        </a>
    </div>
@endsection
