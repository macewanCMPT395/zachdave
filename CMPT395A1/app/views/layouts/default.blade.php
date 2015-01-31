<!doctype html>
<html>
<head>
    <title>HTML Rul3z D00d - @yield('title')</title>
    
    <link rel="stylesheet" href="/css/basic.css" type="text/css" />
</head>

<body>
<div class="title">HTML Rul3z D00d</div>
<div id="nav">
    <ul>
        <li><a href="/">Home</a></li>
        <!--Logic for if a user is signed in will be put here-->
        <li><a href="/login">Log-In</a></li>
        <li><a href="/users/create">Create Account</a></li>
        <li><a href="/users/">Members</a></li>
    </ul>
</div>

@yield('content')

</body>
</html>
