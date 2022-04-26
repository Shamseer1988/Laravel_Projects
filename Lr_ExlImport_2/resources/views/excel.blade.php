@extends('layouts.layouts')
@section('title','Student List')

    @section('content')
        <div class="mt-5">

            @if (Session::has('status'))
                <div class="alert alert-primary" role="alert">
                    {{ Session::get('status') }}
                </div>
            @endif

                {{-- @if(isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                    </div>
                @endif --}}
            @if (Session::has('failures'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <table class="table table-danger table-striped table-hover">
                                <tr>
                                    <th scope="col">Row</th>
                                    <th scope="col">Attributes</th>
                                    <th scope="col">Errors</th>
                                    <th scope="col">Value</th>
                                </tr>
                                @foreach (session()->get('failures') as $validation)
                                    <tr>
                                        <td scope="col">{{ $validation->row() }}</td>
                                        <td scope="col">{{ $validation->attribute() }}</td>
                                        <td scope="col">
                                            <ul>
                                                @foreach($validation->errors() as $er)
                                                <li>{{ $er }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td scope="col">{{ $validation->values()[$validation->attribute()] }}</td>
                                    </tr>
                                @endforeach
                            </table>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif







                                {{-- -----------Buttons-------------- --}}

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


                                {{-- ---------Student View Start From Here--------------- --}}
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
                    </thead>
                    <tbody>
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
            <p class="text-center text-warning" colspan="9">Student Data Not Available.</p>
        @endif

        </div>
    @endsection

