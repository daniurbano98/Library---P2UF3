@extends('main')

@section('content')
<h1>{{$book->title}}</h1>
    <table>
        <thead>
            <tr>
                <th>ISBN</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>PUBLISHED_DATE</th>
                <th>DESCRIPTION</th>
                <th>PRICE</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$book->isbn}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->published_date}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->price}}</td>
            </tr>
            
        </tbody>
    </table>
@endsection