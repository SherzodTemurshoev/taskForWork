<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добавление данных</title>
    <link href="/css/header-style.css" rel="stylesheet">
    <link href="/css/content-style.css" rel="stylesheet">
</head>
<body>
	<nav class="nav-menu">
		<ul>
			<li><a href="{{ route('books') }}">Книги</a></li>
			<li><a href="{{ route('books.create') }}">Добавить книгу</a></li>
			<li><a href="{{ route('authors') }}">Авторы</a></li>
			<li><a href="{{ route('authors.create') }}">Добавить автора</a></li>
		</ul>
	</nav>
	<div class="content">
		@yield('content')
	</div>
</body>
</html>