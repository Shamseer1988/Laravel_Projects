<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{


    public function index()
    {
        $books = DB::Table('books')->get();
        return view('home' , ['books'=> $books]);
    }


    public function create(Request $request)
    {
        DB::Table('books')->insert([
            'name' => $request->name,
            'author' => $request->author,
            'genre' => $request->genre,
            'publisher' => $request->publisher,
            'price' => $request->price,
        ]);

        $message = "<div class='col-sm-10 offset-1 alert alert-success alert-dismissible fade show' role='alert'>
                Student Data Successfully Inserted
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        return redirect(route('index'))->with('status', $message);
    }



    public function edit($id)
    {
        $books = DB::Table('books')->find($id);
        return view('editform', ['books'=>$books]);

    }


    public function update(Request $request, $id)
    {
        DB::Table('books')->where('id',$id)->update([
            'name' => $request->name,
            'author' => $request->author,
            'genre' => $request->genre,
            'publisher' => $request->publisher,
            'price' => $request->price,
        ]);
        $message = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                Student Data Successfully Updated
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        return redirect(route('index'))->with('status', $message);
    }


    public function destroy($id)
    {
        $message = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Successfully Deleted
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";

        DB::Table('books')->where('id',$id)->delete();
        return redirect(route('index'))->with('status', $message);
    }
}
