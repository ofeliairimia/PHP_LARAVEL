@extends('master')

@section('content')
    <div class="formParent">
        <h1>Create New Sponsor</h1>

        <form method="POST" action="{{ route('sponsors.store') }}">
            @csrf
            <div class="form">
                <label for="name">Name:</label>
                <br>
                <input type="text" name="name" required>
                <br>
                <label for="description">Description:</label>
                <br>
                <textarea name="description" required></textarea>
                <br>
                <button type="submit" class="smallButton">Create Sponsor</button>
            </div>

        </form>
    </div>
@endsection
