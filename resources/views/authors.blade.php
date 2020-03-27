@extends('main_form')

@section('title', 'Авторы')

@section('content')
	<table border="1">
		@foreach ($authors as $author)
			<td>
				<tr>{{ $author->name }}</tr>
			</td>
		@endforeach
	</table>
@endsection