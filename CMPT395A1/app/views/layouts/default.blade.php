<!doctype html>
<html>
<head>
    <title>
    @yield('title')
    </title>
    <link rel="stylesheet" href="/css/basic.css" type="text/css" />
</head>
<body>
<div class="title">HTML Rul3z D00d</div>
<div id="nav">
    <ul>
        <li><a href="/">Home</a></li>
        
        @yield('navigation')
    </ul>
</div>

@yield('content')

</body>
</html>
