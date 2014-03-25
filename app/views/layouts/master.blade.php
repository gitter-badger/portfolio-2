<html lang="en"><head>
	<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
      @section('title')
      @show
      Imran Ismail
    </title>
    <meta name="keywords" content="imran ismail, portfolio, resume, cv, jobs, web developer, development, dev" />
    <meta name="author" content="Imran Ismail" />
    <meta name="description" content="My Portfolio" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- HTML5 Shim for IE -->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/imranismail.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">    
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    
    <style type="text/css">                
    @section('styles')
    @show
    </style>
	</head>


    <body>
    <input type="checkbox" id="toggle-slider">
    <label id="menu-button" for="toggle-slider" class="animate"><i class="fa fa-align-justify fa-inverse fa-2x"></i></label>
    <!--
    <button type="button" href="#" id="toggle-slider" class="animate"><i class="fa fa-align-justify fa-inverse fa-2x"></i>
    </button>
    -->

    <div id="pop-slider">
        <div class="pop-slider-content">
            <h5>About Me</h5>
            <ul class="side-nav" id="sidebar">
                <li><a href="#home">HOME</a></li>
                <li><a href="#education">EDUCATION</a></li>
                <li><a href="#community">COMMUNITY</a></li>
                <li><a href="#work">RECENT WORK</a></li>
            </ul>

            
            <p></p>
        </div>
    </div>

    <div id="container" class="animate">
            @yield('content')
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.smooth-scroll.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>