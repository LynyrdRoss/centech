<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<title>CenTech</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- <link rel="icon" type="image/png" href="favicon.ico"> -->

	@include ('partials.link-upper')

	@yield ('page-css')

</head>

<body  data-spy="scroll" data-target=".navbar-collapse">

    <!-- Preloader -->
	@include ('partials.preloader')

    <div class="culmn">

        <!--Home page style-->
        @yield ('nav')

        @yield ('content')

		@yield ('footer')

	</div>

	<!-- JS includes -->
	@include ('partials.js')

	@yield ('page-js')
	
</body>
</html>