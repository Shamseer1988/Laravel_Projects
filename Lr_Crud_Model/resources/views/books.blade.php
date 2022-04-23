@extends('layouts.layouts')
@section('title','Home')

@section('content')
    <div class="mt-5">

        @if (session()->has('status'))
                {!!session('status')!!}
            @endif

        <div class="mt-4">
        <a href="{{Route('book.create')}}" class="btn btn-success" style="float: right">CREATE</a>
        </div>

    @if($book->count())
    <h2>BOOK DETAILES</h2>
    <table class="table table-striped table-hover">
    <thead >
        <tr class="table-success text-center ">
        <th scope="col">Sl No</th>
        <th scope="col">@sortablelink('book_name','Name')</th>
        <th scope="col">@sortablelink('book_author','Author')</th>
        <th scope="col">@sortablelink('book_genre','Genre')</th>
        <th scope="col">@sortablelink('book_publisher','Publisher')</th>
        <th scope="col">@sortablelink('book_price','Price')</th>
        <th scope="col">@sortablelink('book_status','Status')</th>
        <th scope="col">@sortablelink('DelStatus')</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($book as $books)
        <tr class="text-center">
        <th scope="row">{{ $book->firstItem() + $loop->index }}</th>
        <td>{{$books->book_name}}</td>
        <td>{{$books->book_author}}</td>
        <td>{{$books->book_genre}}</td>
        <td>{{$books->book_publisher}}</td>
        <td>{{$books->book_price}}</td>
        <td>{{$books->book_status_Text}}</td>
        <td>@if($books->trashed()) Trashed @else Active @endif</td>

        <td><a href="{{Route('book.detailes',encrypt($books->book_id))}}" class="btn btn-success">View</a>
        <a href="{{Route('book.edit',encrypt($books->book_id))}}" class="btn btn-warning">Edit</a>
        <a href="{{Route('book.delete',encrypt($books->book_id))}}" class="btn btn-danger">Delete</a>
        <a href="{{Route('book.force.delete',encrypt($books->book_id))}}" class="btn btn-warning">Force Del</a>
        @if($books->trashed())<a href="{{Route('book.activate',encrypt($books->book_id))}}" class="btn btn-primary">Activate</a>@endif</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @else
        <p class="text-center text-warning" colspan="9">No Books to display.</p>

    @endif

    {{-- {{ $book->links('pagination::bootstrap-5')  }} --}}
    {{ $book->links('vendor.pagination.custom')  }}

    </div>
@endsection
