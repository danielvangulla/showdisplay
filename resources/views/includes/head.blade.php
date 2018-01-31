
  <meta charset="utf-8">
  <title>Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="{{ URL::asset('ibs/favicon.ico') }}" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ URL::asset('ibs/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ URL::asset('ibs/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('ibs/lib/animate-css/animate.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('ibs/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

  <script src="{{ URL::asset('js/vue.min.js') }}"></script>
  <script src="{{ URL::asset('js/vue-router.js') }}"></script>
  <script src="{{ URL::asset('js/leaflet.js') }}"></script>
  
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.2.0/dist/leaflet.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css" />
	<link rel="stylesheet" href="https://rawgit.com/python-visualization/folium/master/folium/templates/leaflet.awesome.rotate.css" />
	<style>html, body {
		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
		background : url('image/bgdashboard.jpg');
		background-size:cover;
		background-repeat:no-repeat;
		background-position:center center;
		}
	</style>
	<style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
	<style> #map1 {
		position : relative;
		width : 100.0%;
		height: 100.0%;
		left: 0.0%;
		top: 0.0%;
		}
	</style>
	<style> #map2 {
		position : relative;
		width : 100.0%;
		height: 100.0%;
		left: 0.0%;
		top: 0.0%;
		}
	</style>
	<style>
		.map-overlay {
			font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
			position: relative;
			width: 100%;
			top: 10px;
			left: 0;
			padding: 10px;
		}

		.map-overlay .map-overlay-inner {
			background-color: #fff;
			box-shadow:0 1px 2px rgba(0, 0, 0, 0.20);
			border-radius: 3px;
			padding: 10px;
			margin-bottom: 10px;
		}

		.map-overlay h2 {
			line-height: 24px;
			display: block;
			margin: 0 0 10px;
		}

		.map-overlay .legend .bar {
			height: 10px;
			width: 100%;
			background: linear-gradient(to right, #FCA107, #7F3121);
		}

		.map-overlay input {
			background-color: transparent;
			display: inline-block;
			width: 99%;
			position: relative;
			margin: 0;
			cursor: ew-resize;
		}
	</style>
	<style>
		body {
			height: 100%;
			width: 100%;
			overflow : hidden;
			overflow-y : auto;
			position: absolute; 
			left: 50%;
			
		}
		
		.sliderground {
			margin : 5px;
			position: relative; 
			left: -50%;
			
			background: rgba(254,254,254,0.3);
			background: -moz-linear-gradient(top, rgba(254,254,254,0.3) 1%, rgba(231,231,231,0.3) 27%, rgba(226,226,226,0.35) 32%, rgba(181,181,181,1) 100%);
			background: -webkit-gradient(left top, left bottom, color-stop(1%, rgba(254,254,254,0.3)), color-stop(27%, rgba(231,231,231,0.3)), color-stop(32%, rgba(226,226,226,0.35)), color-stop(100%, rgba(181,181,181,1)));
			background: -webkit-linear-gradient(top, rgba(254,254,254,0.3) 1%, rgba(231,231,231,0.3) 27%, rgba(226,226,226,0.35) 32%, rgba(181,181,181,1) 100%);
			background: -o-linear-gradient(top, rgba(254,254,254,0.3) 1%, rgba(231,231,231,0.3) 27%, rgba(226,226,226,0.35) 32%, rgba(181,181,181,1) 100%);
			background: -ms-linear-gradient(top, rgba(254,254,254,0.3) 1%, rgba(231,231,231,0.3) 27%, rgba(226,226,226,0.35) 32%, rgba(181,181,181,1) 100%);
			background: linear-gradient(to bottom, rgba(254,254,254,0.3) 1%, rgba(231,231,231,0.3) 27%, rgba(226,226,226,0.35) 32%, rgba(181,181,181,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefefe', endColorstr='#b5b5b5', GradientType=0 );
			
			height : 98vh;
			width : 99.2vw;
		}
		
		.absolute {
			margin : 5px;
			height : 100%;
		}
		
		.slider {
			border : dotted red 1px;
			height : 75vh;
			
		}
		
		.teamlogo {
			margin-top : 10px;
			height : 18vh;
			width : 22vw;
			
		}
		
		.logomdokota {
			height : 35vh;
			width : 22vw;
			
		}
		
		.contents {
			opacity : 1;
		}
		
		
	</style>