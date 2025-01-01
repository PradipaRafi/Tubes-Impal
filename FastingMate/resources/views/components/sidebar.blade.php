<div class="sidebar">
    <h2>Fasting<span>Mate</span></h2>
    <ul>
        <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
        <li><a href="{{ route('schedule') }}" class="{{ request()->routeIs('schedule') ? 'active' : '' }}">Schedule</a></li>
        <li><a href="#">Count</a></li>
        <li><a href="#">Weight Target</a></li>
        <li><a href="#">History</a></li>
        <li><a href="#">Consultant</a></li>
        <li><a href="#">Settings</a></li>
    </ul>
    <div class="profile">
        <a href="{{ route('profile.edit') }}">
            <img src="{{ asset('img/profile.png') }}" alt="Profile">
        </a>
        <p>{{ Auth::user()->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout">Logout</button>
        </form>
    </div>
</div>