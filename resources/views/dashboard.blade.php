@extends('layouts.home')
@section('content')
	
	<div>
		<div class="row" style="margin-left:0px;">
			<div class="col-md-2 text-center" >
				</style>
				<div class='map-overlay top'>
					<div class='map-overlay-inner'>
						<h4>Perubahan Fungsi Ruang</h4>
						<h4>Kota Manado</h4>
						
						<input id='slider' type='range' min='0' max='6' step='1' value='0' />
					</div>
				</div>
			</div>
		</div>
		
		<div class="row" style="margin:0px; margin-top:200px;">
			<div class="col-md-2" >
					<div class="folium-map" id="map1" style="height:200px; width:100%;"></div>
				<a href="#map1">
					<h3 class="text-center" style="margin-top:-3px;">Open Map1</h3>
				</a>
			</div>
			<div class="col-md-8" >
					
			</div>
			<div class="col-md-2" >
					<div class="folium-map" id="map2" style="height:200px; width:100%;"></div>
				<a href="#map2">
					<h3 class="text-center" style="margin-top:-3px;">Open Map2</h3>
				</a>
			</div>
		</div>
		<br>
		<div class="row" style="margin:0px;">
			<div class="col-md-2" >
					<div class="folium-map" id="map3" style="height:200px; width:100%;"></div>
				<a href="#map3">
					<h3 class="text-center" style="margin-top:-3px;">Open Map3</h3>
				</a>
			</div>
			<div class="col-md-8" >
					
			</div>
			<div class="col-md-2" >
					<div class="folium-map" id="map4" style="height:200px; width:100%;"></div>
				<a href="#map4">
					<h3 class="text-center" style="margin-top:-3px;">Open Map4</h3>
				</a>
			</div>
		</div>
		
    </div>


@endsection