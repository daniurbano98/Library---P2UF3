@extends('main')

@section('title')
  EDIT BOOK
@endsection

@section('content')
<form class="form-group container" action="{{route('updateBook', ['id' => $book->id])}}" method="POST" novalidate>
  @csrf
  @method('PUT')
    <label for="author" class="form-label">Autor:</label>
    <input type="text" id="author" name="author" value="{{$book->author}}"  class="form-control" required >
 
  @error('author')
  <p class="alert alert-danger" role="alert">{{ $message }}</p>
  @enderror

  <label for="title" class="form-label">Título:</label>
  <input type="text" id="title" name="title" value="{{$book->title}}"  class="form-control" required>

  @error('title')
  <p class="alert alert-danger" role="alert">{{ $message }}</p>
  @enderror

  <label for="published_date" class="form-label">Fecha de publicación:</label>
  <input type="date" id="published_date" name="published_date" value="{{$book->published_date}}"  class="form-control" required>

  @error('date_published')
  <p class="alert alert-danger" role="alert">{{ $message }}</p>
  @enderror

  <label for="description" class="form-label">Descripción:</label>
  <textarea id="description" name="description"  class="form-control" required>{{$book->description}}</textarea>

  @error('description')
  <p class="alert alert-danger" role="alert">{{ $message }}</p>
  @enderror

  <label for="price" class="form-label">Precio:</label>
  <input type="number" id="price" name="price"  class="form-control" value="{{$book->price}}" required>

  @error('price')
  <p class="alert alert-danger" role="alert">{{ $message }}</p>
  @enderror

  <input  class="btn btn-primary mt-5" type="submit"  class="form-control" value="Enviar">
</form>
@endsection