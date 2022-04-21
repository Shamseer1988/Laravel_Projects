@extends('layouts.layouts')
@section('title','Create books')

@section('content')
    <div class="container-fluid mt-4 ">
        <div class="row ">
            <div class="col-sm-6">

        <form action="{{Route('book.save')}}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Book Name</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Book Author</label>
            <input type="text" class="form-control" id="author" name="author" >
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Book Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" >
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Book Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Book Price</label>
            <input type="text" class="form-control" id="price" name="price" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
    </div>

@endsection


