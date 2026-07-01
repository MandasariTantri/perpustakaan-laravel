<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>

Selamat datang
{{ Auth::user()->name }}

<br><br>

Role :
{{ Auth::user()->role }}

<br><br>

<a href="/logout">
    Logout
</a>

</body>
</html>