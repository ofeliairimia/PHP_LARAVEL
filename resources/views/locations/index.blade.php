@extends('master')

@section('content')
    <div class="formParent">

        <h1>Locations</h1>
        <a href="{{ route('locations.create') }}"><button class="smallButton">Add New Location</button></a>
        <div class="form">
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($locations as $location)
                    <tr>
                        <td>{{ $location->name }}</td>
                        <td>{{ $location->description }}</td>
                        <td>
                            <a href="{{ route('locations.edit', $location->id) }}">Edit</a>
                            <form method="post" action="{{ route('locations.destroy', $location->id) }}" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button class="smallButton" type="submit" onclick="return confirm('Are you sure you want to delete this location?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <a href="{{ route('admin.dashboard') }}"><button class="smallButton">Admin Dashboard</button></a>

    </div>

@endsection
