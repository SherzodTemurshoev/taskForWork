@extends('create_form')

@section('header', 'Обновление данных о книге')

@section('content')
	@if ($errors->any())
	    <div class="class-error">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	{{ Form::model($book, ['url' => route('books.update', $book), 'method' => 'PATCH']) }}
		{{ Form::label('name', 'Имя книги') }}
		{{ Form::text('name') }}<br>
		{{ Form::label('authors', 'Имя автора') }}
		<select multiple name = "authors[]">
			@foreach ($authors as $author)
				<option value = "{{ $author->id }}">{{ $author->name }}</option>
			@endforeach
		</select>
		{{ Form::submit('Обновить', ['class' => 'btn']) }}
	{{ Form::close() }}
@endsection


