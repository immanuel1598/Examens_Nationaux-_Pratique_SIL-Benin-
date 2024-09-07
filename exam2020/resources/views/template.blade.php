
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vos coordonnées</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <style>
          body{
            font-family: Arial;
            font-size: 12px;
            background-color: #FFEEEE
          }
        </style>
    </head>
    <body>
      @yield('content')

        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    </body>
    </html>
