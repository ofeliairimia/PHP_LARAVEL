@extends('master')

@section('content')
    <h1>Edit Location</h1>

    <form method="post" action="{{ route('locations.update', $location->id) }}">
        @csrf
        @method('put')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $location->name }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $location->description }}</textarea>

        <button type="submit">Update Location</button>
    </form>

    <a href="{{ route('locations.index') }}">Back to Locations</a>
@endsection
