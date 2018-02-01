@extends('layouts.home')
@section('content')
	
	<div class="col-md-12 sliderground">
		
		<div class="col-md-12 absolute">
		
			
			<div class="col-md-9 contents">
				
				<div class="col-md-12"  id="hero"></div>
				
				
				
			</div>
			
			<!--div class="col-md-6 slidercol">
				<div class="col-md-12 " style="margin-left:0px; z-index:999;">
					<div class="col-md-12 text-center" >
						</style>
						<div class='map-overlay top'>
							<div class='map-overlay-inner'>
								<h2>Title</h2>
								<h2>Subtitle</h2>
								
								<input id='slider' type='range' min='0' max='6' step='1' value='0' />
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-12 slider">
					
				</div>
			</div-->
			
			<div class="col-md-3 contents">
			
			
			</div>
			
		</div>
		
		<div class="col-md-12 contents">
			
				<div class="col-md-3" >
					<h3 class="text-center" style="margin-top:5px; margin-bottom:0px;"></h3>
					<a href="#map1">
						<div class="folium-map" id="map1" style="height:200px; width:100%;"></div>
					</a>
				</div>
				
				<div class="col-md-3" >
					<h3 class="text-center" style="margin-top:5px; margin-bottom:0px;"></h3>
					<a href="#map2">
						<div class="folium-map" id="map2" style="height:200px; width:100%;"></div>
					</a>
				</div>
				
				<div class="col-md-3" >
					<h3 class="text-center" style="margin-top:5px; margin-bottom:0px;"></h3>
					<a href="#map3">
						<div class="folium-map" id="map3" style="height:200px; width:100%;"></div>
					</a>
				</div>
				
				<div class="col-md-3" >
					<h3 class="text-center" style="margin-top:5px; margin-bottom:0px;"></h3>
					<a href="#map4">
						<div class="folium-map" id="map4" style="height:200px; width:100%;"></div>
					</a>
				</div>
		</div>

	</div>
@endsection