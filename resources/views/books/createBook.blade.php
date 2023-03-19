@extends('main')

@section('title')
    CREATE BOOK
@endsection

@section('content')
    <form class="form-group container" action="{{ route('storeBook') }}" method="POST" novalidate>
        @csrf
        <label for="category" class="form-label">Category:</label>
        <select name="category_id" id="category" class="form-control mb-1">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="author" class="form-label">Autor:</label>
        <input type="text" id="author" name="author" class="form-control" required>

        @error('author')
            <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror

        <label for="title" class="form-label">Título:</label>
        <input type="text" id="title" name="title" class="form-control" required>

        @error('title')
            <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror

        <label for="isbn" class="form-label">ISBN:</label>
        <input type="text" id="isbn" name="isbn" class="form-control" required>

        @error('isbn')
            <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror

        <label for="published_date" class="form-label">Fecha de publicación:</label>
        <input type="date" id="published_date" name="published_date" class="form-control" required>

        @error('date_published')
            <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror

        <label for="description" class="form-label">Descripción:</label>
        <textarea id="description" name="description" class="form-control" required></textarea>

        @error('description')
            <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror

        <label for="price" class="form-label">Precio:</label>
        <input type="number" id="price" name="price" class="form-control" required>

        @error('price')
            <p class="alert alert-danger" role="alert">{{ $message }}</p>
        @enderror

        <input class="btn btn-primary mt-5" type="submit" class="form-control" value="Enviar">
    </form>
@endsection
