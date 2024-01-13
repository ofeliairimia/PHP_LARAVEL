@extends('master')

@section('content')
    <div class="formParent">
        <h1>Orders</h1>

        @if ($orders->isEmpty())
            <p>No orders available.</p>
        @else
            <table>
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Details</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->idOrder }}</td>
                        <td>
                            <ul>
                                @foreach (unserialize($order->details) as $item)
                                    <li>
                                        ID: {{ $item['id'] }} | Name: {{ $item['name'] }}
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $order->created_at }}</td>
                        <td>
                            <form action="{{ route('order.destroy', ['id' => $order->idOrder]) }}"  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="smallButton" onclick="return confirm('Are you sure you want to close this order?')">Close order</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        <br>
        <a href="{{ route('admin.dashboard') }}"><button class="smallButton">Back home</button></a>
    </div>
@endsection
