<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects Daughter">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>

<ul class="nav">
    <li class="{{ Request()->path() === '/' ? 'active': ''}}"><a href="/">Home</a></li>
    <li class="{{ Request()->path() === 'profile' ? 'active' : ''}}"><a href="/profile">Profile</a></li>
    <li class="{{ Request()->path() === 'dashboard' ? 'active' : ''}}"><a href="/dashboard">Dashboard</a></li>
    <li class="{{ Request()->path() === 'faq' ? 'active' : ''}}"><a href="/faq">FAQ</a></li>
    <li class="{{ Request()->path() === 'motivation' ? 'active' : ''}}"><a href="motivation">My Motivation</a></li>
    <li class="{{ Request()->path() === 'jobs' ? 'active' : ''}}"><a href="jobs">View on the Job</a></li>
    <li style="float:right"><img src="img/blub.png"></li>
</ul>
@yield('content')
</body>
</html>

