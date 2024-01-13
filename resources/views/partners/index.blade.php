@extends('master')

@section('content')
    <div class="formParent">
        <h1>Partners</h1>
        <a href="{{ route('partners.create') }}"><button class="smallButton">Add New Partner</button></a>
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
                @foreach ($partners as $partner)
                    <tr>
                        <td>{{ $partner->name }}</td>
                        <td>{{ $partner->description }}</td>
                        <td>
                            <a href="{{ route('partners.edit', $partner->id) }}">Edit</a>
                            <form method="post" action="{{ route('partners.destroy', $partner->id) }}" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button class="smallButton" type="submit" onclick="return confirm('Are you sure you want to delete this partner?')">Delete</button>
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
