@extends('main_form')

@section('title', 'Авторы')

@section('content')
	<center><h1>Авторы</h1></center>
	<table>
		<tr>
			<th>Имя автора</th>
			<th>Количество книг в базе</th>
			<th>Обновление</th>
			<th>Удаление</th>
		</tr>
		@foreach ($authors as $author)
			<tr>
				<td>{{ $author->name }}</td>
				<td>{{ $author->books->count() }}</td>
				<td><a href="{{ route('authors.edit', $author) }}">Обновление</a></td>
				<td><a href="{{ route('authors.destroy', $author) }}">Удаление</a></td>
			</tr>
		@endforeach
	</table>
@endsection