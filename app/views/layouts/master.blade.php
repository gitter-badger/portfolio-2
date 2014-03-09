<html lang="en"><head>
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

	<!-- HTML5 Shim for IE -->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

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
                <h5>About Me</h5>
                <ul class="side-nav" id="sidebar">
                    <li><a data-scroll href="#home">HOME</a></li>
                    <li><a data-scroll href="#education">EDUCATION</a></li>
                    <li><a data-scroll href="#work">WORK</a></li>
                </ul>

                
                <p></p>
            </div>
        </div>    
        <div id="background" class="slide-left-anim">
        </div>
        <div id="wrapper" class="slide-left-anim">       
                @yield('content')
              
        </div>
    
        <script src='{{ asset('js/smooth-scroll.js')}}'></script>
	<script>
		smoothScroll.init();
	</script>
    </body>
</html>