<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <title>{{$title}}</title>
</head>
<body>
    <div class="container-fluid cus_Bground">
        <div class="row">
            <div class="col-sm-2">
                @include('include.sidebar')
            </div>
            <div class="col-sm-10">
                {{$content}}
                    <!-- Footer -->
                <footer class="bg-dark text-center text-white">
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2022 Copyright:
                    <a class="text-white" href="https://faizzyworld.online/">Faizzyworld.com</a>
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
</body>
</html>