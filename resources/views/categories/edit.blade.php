@extends('main')

@section('title')
  EDIT CATEGORY
@endsection

@section('content')
<form class="form-group container" action="{{route('updateCategory', ['id' => $category->id])}}" method="POST" novalidate>
  @csrf
  @method('PUT')
    <label for="name" class="form-label">Name:</label>
    <input type="text" id="name" name="name" value="{{$category->name}}"  class="form-control" required >
 
  @error('name')
  <p class="alert alert-danger" role="alert">{{ $message }}</p>
  @enderror

  <input  class="btn btn-primary mt-5" type="submit"  class="form-control" value="Enviar">
</form>
@endsection