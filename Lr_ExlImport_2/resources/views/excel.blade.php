@extends('layouts.layouts')
@section('title','Home')

@section('content')
    <div class="mt-5">


        @if (Session::has('status'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif

        @if (Session::has('import_errors'))
        @foreach (Session::get('import_errors') as $failure)
        <div class="alert alert-primary" role="alert">
                {{ $failure->errors()[0]}} at Line No {{ $failure->row() }}
            </div>

        @endforeach
        @endif



        <div class="mt-4 d-flex justify-content-end" >
            <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                <div class="btn-group "  role="group" aria-label="Basic example">
                    <a href="" type="button" class="btn btn-primary">CREATE</a>
                    <button type="submit" class="btn btn-warning">IMPORT</button>
                    <a href="{{ route('file-export') }}" type="button" class="btn btn-success">EXPORT</a>
                </div>
                    @csrf
                <div class="mt-2 mb-2">
                    <input class="form-control" type="file" name="file" id="formFile">
                    @error('file')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </form>
        </div>

    @if($student->count())
    <table class="table table-striped table-hover">
    <thead >
        <tr class="table-success text-center ">
        <th scope="col">Sl No</th>
        <th scope="col">Name</th>
        <th scope="col">Mobile</th>
        <th scope="col">Email</th>
        <th scope="col">Staus</th>
        </tr>


        @foreach ($student as $stu)
        <tr class="text-center">
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$stu->stu_name}}</td>
        <td>{{$stu->stu_mob}}</td>
        <td>{{$stu->stu_email}}</td>
        <td>{{$stu->stu_status}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @else
        <p class="text-center text-warning" colspan="9">No Students to display.</p>
    @endif

    </div>
@endsection

