@extends('master')

@section('content')
    <div class="formParent">
        <h1>Create New Location</h1>
        <div class="form">
            <form method="post" action="{{ route('locations.store') }}">
                @csrf
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="description">Description:</label>
                <br>
                <textarea id="description" name="description" required></textarea>
                <br>
                <button type="submit" class="smallButton">Create Location</button>
            </form>
            <a href="{{ route('locations.index') }}"><button class="smallButton">Back to Locations</button></a>
        </div>

    </div>

@endsection
