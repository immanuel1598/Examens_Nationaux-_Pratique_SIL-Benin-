<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
    body{
        font-size: 12px;
        font-family: Arial;
        background-color: #ECF0F5
    }
</style>
<body>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/inscription.css') }}" rel="stylesheet">
@yield('content')
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
