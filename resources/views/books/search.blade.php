@extends('main')

@section('title')
    SEARCH BOOK
@endsection


@section('content')
    <form class="form-group container" action="{{ route('resultSearchForm') }}" method="POST" novalidate>
        @csrf

        <label for="title" class="form-label">TITLE:</label>
        <input type="text" class="form-control" id="title" name="title" value=""
            placeholder="Ingrese el título del libro">


        <label for="author" class="form-label">AUTHOR:</label>
        <input type="text" class="form-control" id="author" name="author" value=""
            placeholder="Ingrese el nombre del autor del libro">

        <button type="submit" class="btn btn-primary  mt-5">Submit</button>
    </form>
@endsection
