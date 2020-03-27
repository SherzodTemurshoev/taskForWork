@extends('create_form')

@section('header', 'Обновление данных об авторе')

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
	{{ Form::model($author, ['url' => route('authors.update', $author), 'method' => 'PATCH']) }}
		{{ Form::label('name', 'Имя автора') }}
		{{ Form::text('name') }}<br>
		{{ Form::label('book', 'Название книги') }}
		<select multiple name="book[]">
			@foreach ($books as $book)
				<option value="{{$book->id}}">{{$book->name}}</option>
			@endforeach
		</select>
		{{ Form::submit('Обновить', ['class' => 'btn']) }}
	{{ Form::close() }}
@endsection


