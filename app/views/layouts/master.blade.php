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
    <link href="{{ asset('css/something') }}" rel="stylesheet">

    <style type="text/css">
    @section('styles')
    @show
    </style>

	</head>


    <body>
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>