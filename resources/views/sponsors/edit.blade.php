@extends('master')

@section('content')
    <div class="formParent">

        <form method="POST" action="{{ route('sponsors.update', $sponsor->id) }}">
            @csrf
            @method('PUT')
            <h1>Edit Sponsor</h1>
            <br>
            <div class="form">
                <label for="name">Name:</label>
                <br>
                <input type="text" name="name" value="{{ $sponsor->name }}" required>
                <br>
                <label for="description">Description:</label>
                <br>
                <textarea name="description" required>{{ $sponsor->description }}</textarea>

                <br>
                <button type="submit" class="smallButton">Update Sponsor</button>
            </div>
        </form>
    </div>
@endsection
