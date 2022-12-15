<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- css link --}}

    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="public/css/app.css">

    {{-- bootstrap link --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
    
    <title>Blog Project</title>
</head>
<body>
    <div id="app" style="margin-top: 8em">
     @include('/inc/navbar')
    <div class="container">
         @include('/inc/messages')  {{--/*this is for errors and success message for create post */ --}}
    @yield('content')
    </div>
</div>

<script src="public/js/app.js"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>