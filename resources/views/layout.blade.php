<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects Daughter">
    <link rel="shortcut icon" href="/img/favicon.ico">
</head>
<body>

<ul class="nav">
    <li class="{{ Request()->path() === '/' ? 'active': ''}}"><a href="/">Home</a></li>
    <li class="{{ Request()->path() === 'profile' ? 'active' : ''}}"><a href="profile">Profile</a></li>
    <li class="{{ Request()->path() === 'grades' ? 'active' : ''}}"><a href="grades">Grades</a></li>
    <li class="{{ Request()->path() === 'motivation' ? 'active' : ''}}"><a href="motivation">My Motivation</a></li>
    <li class="{{ Request()->path() === 'jobs' ? 'active' : ''}}"><a href="jobs">View on the Job</a></li>
    <li class="{{ Request()->path() === 'faq' ? 'active': '' }}"><a href="faq">FAQ</a></li>
    <li style="float:right"><img src="/img/blub.png"></li>
    @if (Auth::check())
    <!-- <li style="float:right"><a>Logged in</a></li> -->
    <li style="float:right">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log uit') }}
                        </x-dropdown-link>
                    </form>
                  </li>
    @else
    <li style="float:right"><a href="/login">Login</a></li>
    <li style="float:right"><a href="/register">Register</a></li>
    @endif
</ul>
@yield('content')
</body>
</html>

