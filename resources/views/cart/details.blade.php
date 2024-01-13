@extends('master')

@section('content')
    <div class="formParent">
        <h1>Shopping Cart</h1>
        <br>
        <a href="{{ route('user.dashboard') }}"><button class="smallButton">Back to Dashboard</button></a>
        <br>
        <table>
            <thead>
            <tr>
                <th>Product</th>
                <th>Date</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['event_date'] }}</td>
                    <td>{{ $item['location'] }}</td>
                    <td><a href="{{ route('cart.remove', ['eventId' => $item['id']]) }}">Remove</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <form method="post" action="{{ route('cart.sendOrder') }}">
            @csrf
            <button type="submit" class="smallButton">Send Order</button>
        </form>
    </div>
@endsection
