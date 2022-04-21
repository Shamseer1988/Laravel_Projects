<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{

    //Indext
    public function show(){
        $books = book::all();
        // $books = book::active()->get();
        // $books = book::where('book_name' , 'Avatar')->first();
        // $books = book::where('book_id' ,'=' ,'2')->first();
        // $books = book::whereIn('book_id',['2','1'])->get();
        // $books = book::where('book_status',1)->get();
        // $books = book::find(2);
        return view('books', compact('books'));
    }

    //Create form view
    public function create(){
        return view('createBooks');
    }
    //Save form data to database
    public function save(){


        book::create([
        'book_name' => request('name'),
        'book_author' => request('author'),
        'book_genre' => request('genre'),
        'book_publisher' => request('publisher'),
        'book_price' => request('price'),
        ]);

        // $books = new book;
        // $books->book_name = request('name');
        // $books->book_author = request('author');
        // $books->book_genre = request('genre');
        // $books->book_publisher = request('publisher');
        // $books->book_price = request('price');
        // $books->save();


        $message = "<div class='col-sm-10 offset-1 alert alert-success alert-dismissible fade show' role='alert'>
                Book Data Successfully Created
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        return redirect(Route('show'))->with('status' , $message);
    }


    // Delete Book
    public function delete($bookId){
        $books = book::find(decrypt($bookId));
        $books->delete();
        return redirect(Route('show'))->with('status' , 'Successfully Deleted');
    }


    //View Book detailes
    public function detailes($bookId){
        $books = book::find(decrypt($bookId));
        return view('viewBook' , compact('books'));
    }

    //Book Edit Form
    public function edit($bookId){
        $books = book::find(decrypt($bookId));
        return view('editBook' , compact('books'));
    }


    //Update book detailes
    public function update(){
        $bookId = decrypt(request('bookId'));

        book::find($bookId)->update(([
        'book_name' => request('name'),
        'book_author' => request('author'),
        'book_genre' => request('genre'),
        'book_publisher' => request('publisher'),
        'book_price' => request('price'),
        ]));

        $message = "<div class='col-sm-10 offset-1 alert alert-success alert-dismissible fade show' role='alert'>
                Book Data Updated Successfully
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        return redirect(Route('show'))->with('status' , $message);

    }




}
