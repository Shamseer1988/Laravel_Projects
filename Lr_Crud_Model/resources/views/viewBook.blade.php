@extends('layouts.layouts')
@section('title','View books')

@section('content')

<div class="mt-5">
    <a href="{{Route('show')}}" class="btn btn-success">Home</a>
    <hr>
<ul class="list-group list-group-flush">
        <li class="list-group-item "> Book Name :{{$books->book_name}}</li>
        <li class="list-group-item"> Book Author :{{$books->book_author}}</li>
        <li class="list-group-item"> Book Genre : {{$books->book_genre}}</li>
        <li class="list-group-item"> Book Publisher : {{$books->book_publisher}}</li>
        <li class="list-group-item"> Book Price : {{$books->book_price}}</li>
        <li class="list-group-item {{$books->book_status == 1  ? 'bg-success' :'bg-warning'}}"> Book Status : {{$books->book_status_Text}}</li>
</ul>
</div>

@endsection
