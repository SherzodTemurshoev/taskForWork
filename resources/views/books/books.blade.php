@extends('main_form')

@section('title', 'Книги')

@section('content')
	<center><h1>Книги</h1></center>
	<table>
		<tr>
			<th>Название книги</th>
			<th>Автор(ы)</th>
			<th>Обновление</th>
			<th>Удаление</th>
		</tr>
		@foreach ($books as $book)
			<tr>
				<td>{{ $book->name }}</td>
				<td>{{ $book->authors->pluck('name')->implode(', ') }}</td>
				<td><a href="{{ route('books.edit', $book) }}">Обновление</a></td>
				<td><a href="{{ route('books.destroy', $book) }}">Удаление</a></td>
			</tr>
		@endforeach
	</table>
@endsection