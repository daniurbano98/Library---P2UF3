@extends('main')

@section('title')
  CREATE CATEGORY
@endsection

@section('content')
<form class="form-group container" action="{{route('storeCategory')}}" method="POST" novalidate>
  @csrf
    <label for="name" class="form-label">Name:</label>
    <input type="text" id="name" name="name"  class="form-control" required>
 
  @error('name')
  <p class="alert alert-danger" role="alert">{{ $message }}</p>
  @enderror

  <input  class="btn btn-primary mt-5" type="submit"  class="form-control" value="Enviar">
</form>
@endsection