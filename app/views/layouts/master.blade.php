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
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    
    <style type="text/css">                
    @section('styles')
    @show
    </style>

  
	</head>


    <body>
        
        <input type="checkbox" id="toggle-1"></input>
        <label class="toggle-slider slide-left-anim" for="toggle-1"><i class="fa fa-align-justify fa-inverse fa-2x"></i></label>
        
        <div class="pop-slider slide-left-anim">
            <div class="pop-slider-content">
                <h5>My Recent Work</h5>
                <p>This div appears on toggle</p>
            </div>
        </div>    
        
        <div class="wrapper slide-left-anim">
            @yield('content')
        </div>
    </body>
</html>