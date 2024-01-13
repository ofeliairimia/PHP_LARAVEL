@extends('master')

@section('content')
    <div class="formParent">
        <h2>Edit Event</h2>

        <form method="POST" action="{{ route('events.update', $event->id) }}">
            @csrf
            @method('PUT')
            <div class="form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <br>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $event->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <br>
                    <textarea class="form-control" id="description" name="description" required>{{ old('description', $event->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="location">Location:</label>
                    <br>
                    <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}">
                </div>

                <div class="form-group">
                    <label for="event_date">Date:</label>
                    <br>
                    <input type="date" class="form-control" id="event_date" name="event_date" value="{{ old('event_date', $event->event_date) }}" required>
                </div>

                <div class="form-group">
                    <label for="event_time">Time:</label>
                    <br>
                    <input type="time" class="form-control" id="event_time" name="event_time" value="{{ old('event_time', $event->event_time) }}" required>
                </div>

                <div class="form-group">
                    <label for="speaker">Sponsor:</label>
                    <br>
                    <input type="text" class="form-control" id="speaker" name="speaker" value="{{ old('speaker', $event->speaker) }}">
                </div>

                <div class="form-group">
                    <label for="partner">Partner:</label>
                    <br>
                    <input type="text" class="form-control" id="partner" name="partner" value="{{ old('partner', $event->partner) }}">
                </div>
                <br>
                <button type="submit" class="largeButton">Update Event</button>
            </div>
        </form>
        <br>
        <a href="{{route('events.index')}}"><button class="largeButton">Back to list</button></a>
    </div>
@endsection
