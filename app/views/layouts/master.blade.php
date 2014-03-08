<html>
	<head>
    <meta charset="utf-8">
    <title>
      @section('title')
      @show
       | Imran Ismail
    </title>
    <meta name="keywords" content="imran ismail, portfolio, resume, cv, jobs, web developer, development, dev" />
    <meta name="author" content="Imran Ismail" />
    <meta name="description" content="My Portfolio" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel='stylesheet' id='google-webfonts-nc-css'  href='http://fonts.googleapis.com/css?family=Lato%3A100%2C300%2C400&#038;ver=3.8.1' type='text/css' media='all' />
	<link rel='stylesheet' id='google-webfonts-mw-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A400&#038;ver=3.8.1' type='text/css' media='all' />
    <link href="{{ asset('css/imranismail.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
    
    <style type="text/css">
    @section('styles')
    @show
    </style>


    <script>
    function load()
    {
    document.getElementById('abs-cen').className += ' active';
    }
    </script>

	</head>


    <body onload="load()">
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>