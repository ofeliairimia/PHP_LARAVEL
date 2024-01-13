
@extends('master')

@section('content')
    <div class="DashboardParent">
        <h2>User Dashboard</h2>
        <div class="dashboard">
            <a href="{{route('events.userIndex')}}">
                <div class="">
                    <p>Events</p>
                </div>
            </a>
        </div>
        <br>
        <div class="dashboard">
            <a href="{{route('cart.index')}}">
                <div class="">
                    <p>Shopping Cart</p>
                </div>
            </a>
        </div>
    </div>
@endsection
