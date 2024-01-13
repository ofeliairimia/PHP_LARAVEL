@extends('master')

@section('content')
    <div class="formParent">
        <h1>Sponsors</h1>
        <br>
        <a href="{{ route('sponsors.create') }}"><button class="smallButton">Add New Sponsor</button></a>
        @if ($sponsors->isEmpty())
            <p>No sponsors available.</p>
        @else
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sponsors as $sponsor)
                    <tr>
                        <td>{{ $sponsor->name }}</td>
                        <td>{{ $sponsor->description }}</td>
                        <td>
                            <a href="{{ route('sponsors.edit', $sponsor->id) }}">Edit</a>
                            <form method="POST" action="{{ route('sponsors.destroy', $sponsor->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        <br>
        <a href="{{ route('admin.dashboard') }}"><button class="smallButton">Admin Dashboard</button></a>


    </div>

@endsection
