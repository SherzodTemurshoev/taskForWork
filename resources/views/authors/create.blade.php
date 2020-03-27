@extends('create_form')

@section('header', 'Добавление нового автора')

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
	{{ Form::model($author, ['url' => route('authors.store')]) }}
		{{ Form::label('name', 'Имя автора') }}
		{{ Form::text('name') }}
		{{ Form::label('book', 'Название книги') }}
		<select multiple name = "book[]">
			@foreach ($books as $book)
				<option value = "{{$book->id}}">{{$book->name}}</option>
			@endforeach
		</select>
		{{ Form::submit('Сохранить', ['class' => 'btn']) }}
	{{ Form::close() }}
@endsection
