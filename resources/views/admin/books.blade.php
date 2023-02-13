@extends('layouts.main')
@section('title', 'Books')
@section('content')
    <h1>Book List</h1>
    <div class="mt-4 d-flex justify-content-end">
        <a href="/books-add" class="btn btn-success">+ Add Book</a>
    </div>
    @if(session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif
    <div class="mt-5">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Book Code</th>
                <th>Title</th>
                <th>Cover</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($book as $value)
                    <tr>
                      <td>{{$loop->iteration}}</td>  
                      <td>{{$value->book_code}}</td>
                      <td>{{$value->title}}</td>
                      <td>{{$value->cover}}</td>
                      <td>{{$value->status}}</td>
                      <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection