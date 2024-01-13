@extends('master')

@section('content')
    <div class="formParent">
        <h1>Sponsor Details</h1>

        <p><strong>Name:</strong> {{ $sponsor->name }}</p>
        <p><strong>Description:</strong> {{ $sponsor->description }}</p>

        <a href="{{ route('sponsors.index') }}">Back to Sponsors</a>
    </div>

@endsection
