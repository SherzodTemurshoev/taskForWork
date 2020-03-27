<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="/css/header-style.css" rel="stylesheet">
    <link href="/css/form-style.css" rel="stylesheet">
</head>
<body>
	<div class="content">
		<center><h2>@yield('header')</h2></center>
		@yield('content')
	</div>
</body>
</html>