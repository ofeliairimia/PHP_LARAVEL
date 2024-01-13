@extends('master')

@section('content')
    <h1>Edit Partner</h1>

    <form method="post" action="{{ route('partners.update', $partner->id) }}">
        @csrf
        @method('put')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $partner->name }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $partner->description }}</textarea>

        <button type="submit">Update Partner</button>
    </form>

    <a href="{{ route('partners.index') }}">Back to Partners</a>
@endsection
