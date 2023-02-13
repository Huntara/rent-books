@extends('layouts.main')
@section('title', 'Add Category')
@section('content')
<h1>Add Category</h1>
@if ($errors->any())
    <div class="alert alert-danger w-50">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
         </ul>
    </div>
@endif
<form action="" method="post">
    @csrf

    <label for="name" class="form-label">Category Name</label>
    <input type="text" name="name" id="name" class="form-control w-50" placeholder="Category Name">
    <a class="btn btn-primary mt-2" href="/category" role="button">Back</a>
    <button type="submit" class="btn btn-success mt-2">Save</button>
</form>
@endsection