@extends('main')

@section('content')
    <h1>Search Result</h1>
    
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ISBN</th>
                <th scope="col">TITLE</th>
                <th scope="col">AUTHOR</th>
                <th scope="col">PUBLISHED_DATE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">PRICE</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->isbn}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->published_date}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->price}}</td>
                <td><a href="/books/edit/{{$book->id}}" class="btn btn-primary">Edit Book</a></td>
                <form action="{{route('destroyBook', ['id' => $book->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button  class="btn btn-danger" type="submit"  class="form-control">Delete Book</button></td>
                </form>
            </tr>
            @endforeach
            
        </tbody> 
    </table>
    
    
    @endsection