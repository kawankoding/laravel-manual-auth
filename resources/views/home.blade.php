Selamat datang {{ Auth::user()->name ?? '' }}

<br>

<a href="{{ route('logout') }}">Log Out</a>