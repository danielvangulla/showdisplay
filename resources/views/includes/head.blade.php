
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
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />

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
  
	<script src="{{ URL::asset('js/leaflet.awesome-markers.js') }}"></script>
	<link rel="stylesheet" href="{{ URL::asset('css/leaflet.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/leaflet.awesome-markers.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/leaflet.awesome.rotate.css') }}" />
	<style>html, body {
		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
		}
		
		body {
			background : url('image/bgdashboard.jpg');
			background-size:cover;
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
			-webkit-box-shadow: 0 0 10px #fff;
			box-shadow: 0 0 10px #fff;
		}
		
		
		.slider {
			border : dotted red 1px;
			height : 75vh;
			
		}
		
		.teamlogo {
			margin-top : 10px;
			height : 15vh;
			width : 22vw;
			
		}
		
		.logomdokota {
			height : 35vh;
			width : 22vw;
			
		}
		
		.contents {
			opacity : 1;
		}
		
		#hero {
			margin-top : -140px;
			margin-left : -35px;
			height : 70vh;
			width : 97vw;
			-webkit-box-shadow: 0 0 10px #fff;
			box-shadow: 0 0 10px #fff;
		}
		
		.folium-map {
			margin-top : 5px;
			-webkit-box-shadow: 0 0 10px #fff;
			box-shadow: 0 0 10px #fff;
		}
		
		#cssmenu {
			float : left;
		}
	</style>
	
	
	
<!-- css menu bar -->
<style>
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu {
  width: 180px;
  z-index: 10;
}
#cssmenu ul {
  border: 1px solid #cccccc;
  border-radius: 5px;
  background: #ffffff;
  background: -moz-linear-gradient(bottom, #f0f0f0, #ffffff);
  background: -webkit-linear-gradient(bottom, #f0f0f0, #ffffff);
  background: -o-linear-gradient(bottom, #f0f0f0, #ffffff);
  background: -ms-linear-gradient(bottom, #f0f0f0, #ffffff);
  background: linear-gradient(to top, #f0f0f0, #ffffff);
}
#cssmenu ul li {
  display: block;
  border-bottom: 1px solid #cccccc;
}
#cssmenu ul li.active {
  border-bottom: 0;
}
#cssmenu ul li:last-child {
  border-bottom: 0;
}
#cssmenu ul li a {
  display: block;
  padding: 14px 12px;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
  color: #444444;
}
#cssmenu ul li.active {
  left: -8px;
  width: 194px;
  padding: 2px;
  background: #ce4c4a;
  background: -moz-linear-gradient(bottom, #c43735, #d56462);
  background: -webkit-linear-gradient(bottom, #c43735, #d56462);
  background: -o-linear-gradient(bottom, #c43735, #d56462);
  background: -ms-linear-gradient(bottom, #c43735, #d56462);
  background: linear-gradient(to top, #c43735, #d56462);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
}
#cssmenu ul li.active > a {
  padding: 12px 12px 12px 16px;
  border-left: 1px dashed #de8886;
  border-top: 1px dashed #de8886;
  border-bottom: 1px dashed #de8886;
  color: #ffffff;
  text-shadow: 0 1px 1px #8c2726;
}
#cssmenu ul li.active:after {
  position: absolute;
  right: -16px;
  top: 7px;
  width: 31.526911934581186px;
  height: 31.526911934581186px;
  background: #ce4c4a;
  background: -moz-linear-gradient(-45deg, #c43735, #d56462);
  background: -webkit-linear-gradient(-45deg, #c43735, #d56462);
  background: -o-linear-gradient(-45deg, #c43735, #d56462);
  background: -ms-linear-gradient(-45deg, #c43735, #d56462);
  background: linear-gradient(-45deg, #c43735, #d56462);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  content: "";
}
#cssmenu ul li.active:before {
  position: absolute;
  right: -12px;
  top: 9px;
  z-index: 10;
  width: 28.526911934581186px;
  height: 28.526911934581186px;
  border-right: 1px dashed #e9afae;
  border-top: 1px dashed #e9afae;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  content: "";
}
#cssmenu ul li.active a:after {
  position: absolute;
  bottom: -7px;
  left: -11px;
  z-index: -1;
  width: 0;
  height: 0;
  border-top: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 8px solid transparent;
  border-right: 8px solid #982b29;
  content: "";
}
</style>