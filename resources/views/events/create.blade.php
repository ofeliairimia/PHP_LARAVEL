<!-- resources/views/events/create.blade.php -->

@extends('master')

@section('content')
<div class="formParent">
    <h2>Create Event</h2>

    <form method="POST" action="{{ route('events.store') }}">
        <div class="form">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <br>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <br>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <br>
                <input type="text" class="form-control" id="location" name="location">
            </div>

            <div class="form-group">
                <label for="event_date">Date:</label>
                <br>
                <input type="date" class="form-control" id="event_date" name="event_date" required>
            </div>

            <div class="form-group">
                <label for="event_time">Time:</label>
                <br>
                <input type="time" class="form-control" id="event_time" name="event_time" required>
            </div>

            <div class="form-group">
                <label for="speaker">Sponsor:</label>
                <br>
                <input type="text" class="form-control" id="speaker" name="speaker">
            </div>

            <div class="form-group">
                <label for="partner">Partner:</label>
                <br>
                <input type="text" class="form-control" id="partner" name="partner">
            </div>

            <button type="submit" class="largeButton">Create Event</button>
        </div>
    </form>
    <a href="{{route('events.index')}}"><button class="largeButton">Back to list</button></a>
</div>
@endsection