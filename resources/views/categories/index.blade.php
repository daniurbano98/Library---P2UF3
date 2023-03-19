@extends('main')

@section('content')
    <h1>List of Categories</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">CREATED_AT</th>
                <th scope="col">UPDATED_AT</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td><a href="/categories/edit/{{$category->id}}" class="btn btn-primary">Edit Category</a></td>
                <form action="{{route('destroyCategory', ['id' => $category->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button  class="btn btn-danger" type="submit"  class="form-control">Delete Category</button></td>
                </form>
            </tr>
            @endforeach
            
        </tbody> 
    </table>
    <div class="mt-5">
        {{$categories->links()}}
    </div>
    
    @endsection
        
    