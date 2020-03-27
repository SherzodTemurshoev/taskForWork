@extends('create_form')

@section('header', 'Добавление новой книги')

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
	{{ Form::model($books, ['url' => route('books.store')]) }}
		{{ Form::label('name', 'Имя книги') }}
		{{ Form::text('name') }}<br>
		{{ Form::label('authors', 'Имя автора') }}
		<select multiple name = "authors[]">
			@foreach ($authors as $author)
				<option value = "{{ $author->id }}">{{ $author->name }}</option>
			@endforeach
		</select>
		{{ Form::submit('Сохранить', ['class' => 'btn']) }}
	{{ Form::close() }}
@endsection
