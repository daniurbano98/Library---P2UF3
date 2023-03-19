@extends('main')

@section('content')
    <h1>List of Books</h1>
    <form method="POST" action="{{route('getBooks')}}">
        @csrf
        <label for="category">Category:</label>
        <select name="category_id" id="category" class="mb-5 mt-3">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success">View books</button>
    </form>
    

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
    <div class="mt-5">
        {{$books->links()}}
    </div>
    
    @endsection
        
    