@extends('master')

@section('content')
    <div class="DashboardParent">
        <h2>Admin Dashboard</h2>
        <div class="dashboard">
            <a href="{{route('events.index')}}">
                <div class="">
                    <p>Events</p>
                </div>
            </a>
        </div>
        <br>
        <div class="dashboard">
            <a href="{{route('orders.index')}}">
                <div class="">
                    <p>Orders</p>
                </div>
            </a>
        </div>
        <br>
        <div class="dashboard">
            <a href="{{route('sponsors.index')}}">
                <div class="">
                    <p>Sponsors</p>
                </div>
            </a>
        </div>
        <br>
        <div class="dashboard">
            <a href="{{route('locations.index')}}">
                <div class="">
                    <p>Locations</p>
                </div>
            </a>
        </div>
        <br>
        <div class="dashboard">
            <a href="{{route('partners.index')}}">
                <div class="">
                    <p>Partners</p>
                </div>
            </a>
        </div>
    </div>
@endsection
