<div class="navbar">
    @if (Auth::check())
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <p>Welcome, Guest!</p>
    @endif
</div>
