@extends('layouts.home')
@section('content')

	<div class="col-md-12 sliderground">
		
		<div class="col-md-6">
			<div class="logoimg"> </div>
		</div>
		
		<div class="col-md-6">
		
			<div class="col-md-3 pull-right" id='cssmenu'>
				
				<div>
					<ul>
					   <li class='active'><a href='#' style="margin-left:20px;">DSS</a></li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-3 pull-right" id='cssmenu'>
				
				<div>
					<ul>
					   <li class='active'><a href='#' style="margin-left:20px;">BIG DATA</a></li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-3 pull-right" id='cssmenu'>
				
				<div>
					<ul>
					   <li class='active'><a href='#'>Home</a></li>
					</ul>
				</div>
			</div>
		
		</div>
		
		<div class="col-md-12 absolute">
		
			<div class="col-md-12 ">
			
				<!--div class="col-md-12"  id="hero"></div-->
				
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
			
		</div>
		
		<div class="col-md-12 contents">
			<div class="col-md-12 scroll-left" style=" background:white;  opacity:0.7">
				<h2 class="text-center text-primary folium-map" 
							style="margin-top:0px; margin-bottom:0px;">Informasi Singkat Tingkat Kumuh di KOTA MANADO</h2>
			</div>
			
			<div class="col-md-3" >
				<h3 class="text-center text-danger folium-map" 
					style="margin-top:5px; margin-bottom:0px; background:black; opacity:0.7">Kombos Timur</h3>
				<a href="#map1">
					<div class="folium-map" id="map1" style="height:26vh;"></div>
				</a>
			</div>
			
			<div class="col-md-3" >
				<h3 class="text-center text-danger folium-map" 
					style="margin-top:5px; margin-bottom:0px; background:black; opacity:0.7">Paal 4</h3>
				<a href="#map2">
					<div class="folium-map" id="map2" style="height:26vh;"></div>
				</a>
			</div>
			
			<div class="col-md-3" >
				<h3 class="text-center text-danger folium-map" 
					style="margin-top:5px; margin-bottom:0px; background:black; opacity:0.7">Perkamil</h3>
				<a href="#map3">
					<div class="folium-map" id="map3" style="height:26vh;"></div>
				</a>
			</div>
			
			<div class="col-md-3" >
				<h3 class="text-center text-danger folium-map" 
					style="margin-top:5px; margin-bottom:0px; background:black; opacity:0.7">Ternate Tjg</h3>
				<a href="#map4">
					<div class="folium-map" id="map4" style="height:26vh;"></div>
				</a>
			</div>
		</div>


		<div class="col-md-6">
			
			<div id="slider" style="background:white; opacity:0.7; margin-top:20px;">
			<ul id="ulslider">
				<li>
					<div class="slider-container">
						<br>
						<h4>Pemanfaatan informasi geospasial</h4><hr>
						<p>Pemanfaatan informasi geospasial oleh berbagai sektor semakin meningkat seiring kemudahan dan kecepatan teknologi berbasis spasial. Inisiatif penyediaan informasi gespasial telah banyak dilakukan secara mandiri oleh Pemerintah Daerah. Informasi geopasial menjadi kebutuhan mendesak bagi Pemerintah Daerah mengingat perencanaan berbasis spasial lebih efektif dan efisien apabila dibandingkan dengan perencanaan secara kualititatif.</p>
					</div>
				</li>
				<li>
					<div class="slider-container">
						<br>
						<h4>Undang-Undang tentang Informasi Geospasial</h4><hr>
						<p>Undang-Undang No 4 Tahun 2014 tentang Informasi Geospasial khususnya pasal 2 huruf (c) dan pasal 2 huruf (f) menyebutkan bahwa Informasi Geospasial diselenggarakan berdasarkan asas keterbukaan dan kemanfaatan. Semakin mudahnya akses dan pertukaran terhadap informasi geospasial, proses pengambilan keputusan dapat berjalan dengan cepat dan tepat. Menjadi hal yang sangat penting bahwa Informasi Geospasial yang sudah dihasilkan oleh Instansi Pemerintah dapat dimanfaatkan dalam tata kelola pemerintahan secara maksimal.</p>
					</div>
				</li>
				<li>
					<div class="slider-container">
						<br>
						<h4>Pemanfaatan informasi geospasial</h4><hr>
						<p>Pemanfaatan informasi geospasial oleh berbagai sektor semakin meningkat seiring kemudahan dan kecepatan teknologi berbasis spasial. Inisiatif penyediaan informasi gespasial telah banyak dilakukan secara mandiri oleh Pemerintah Daerah. Informasi geopasial menjadi kebutuhan mendesak bagi Pemerintah Daerah mengingat perencanaan berbasis spasial lebih efektif dan efisien apabila dibandingkan dengan perencanaan secara kualititatif.</p>
					</div>
				</li>
				<li>
					<div class="slider-container">
						<br>
						<h4>Undang-Undang tentang Informasi Geospasial</h4><hr>
						<p>Undang-Undang No 4 Tahun 2014 tentang Informasi Geospasial khususnya pasal 2 huruf (c) dan pasal 2 huruf (f) menyebutkan bahwa Informasi Geospasial diselenggarakan berdasarkan asas keterbukaan dan kemanfaatan. Semakin mudahnya akses dan pertukaran terhadap informasi geospasial, proses pengambilan keputusan dapat berjalan dengan cepat dan tepat. Menjadi hal yang sangat penting bahwa Informasi Geospasial yang sudah dihasilkan oleh Instansi Pemerintah dapat dimanfaatkan dalam tata kelola pemerintahan secara maksimal.</p>
					</div>
				</li>
			</ul>
			</div>
			
		</div>


		<div class="col-md-6">
			
			<div id="slider" style="background:white; opacity:0.7; margin-top:20px;">
			<ul id="ulslider">
				<li>
					<div class="slider-container">
						<br>
						<h4>Undang-Undang tentang Informasi Geospasial</h4><hr>
						<p>Undang-Undang No 4 Tahun 2014 tentang Informasi Geospasial khususnya pasal 2 huruf (c) dan pasal 2 huruf (f) menyebutkan bahwa Informasi Geospasial diselenggarakan berdasarkan asas keterbukaan dan kemanfaatan. Semakin mudahnya akses dan pertukaran terhadap informasi geospasial, proses pengambilan keputusan dapat berjalan dengan cepat dan tepat. Menjadi hal yang sangat penting bahwa Informasi Geospasial yang sudah dihasilkan oleh Instansi Pemerintah dapat dimanfaatkan dalam tata kelola pemerintahan secara maksimal.</p>
					</div>
				</li>
				<li>
					<div class="slider-container">
						<br>
						<h4>Pemanfaatan informasi geospasial</h4><hr>
						<p>Pemanfaatan informasi geospasial oleh berbagai sektor semakin meningkat seiring kemudahan dan kecepatan teknologi berbasis spasial. Inisiatif penyediaan informasi gespasial telah banyak dilakukan secara mandiri oleh Pemerintah Daerah. Informasi geopasial menjadi kebutuhan mendesak bagi Pemerintah Daerah mengingat perencanaan berbasis spasial lebih efektif dan efisien apabila dibandingkan dengan perencanaan secara kualititatif.</p>
					</div>
				</li>
				<li>
					<div class="slider-container">
						<br>
						<h4>Undang-Undang tentang Informasi Geospasial</h4><hr>
						<p>Undang-Undang No 4 Tahun 2014 tentang Informasi Geospasial khususnya pasal 2 huruf (c) dan pasal 2 huruf (f) menyebutkan bahwa Informasi Geospasial diselenggarakan berdasarkan asas keterbukaan dan kemanfaatan. Semakin mudahnya akses dan pertukaran terhadap informasi geospasial, proses pengambilan keputusan dapat berjalan dengan cepat dan tepat. Menjadi hal yang sangat penting bahwa Informasi Geospasial yang sudah dihasilkan oleh Instansi Pemerintah dapat dimanfaatkan dalam tata kelola pemerintahan secara maksimal.</p>
					</div>
				</li>
				<li>
					<div class="slider-container">
						<br>
						<h4>Pemanfaatan informasi geospasial</h4><hr>
						<p>Pemanfaatan informasi geospasial oleh berbagai sektor semakin meningkat seiring kemudahan dan kecepatan teknologi berbasis spasial. Inisiatif penyediaan informasi gespasial telah banyak dilakukan secara mandiri oleh Pemerintah Daerah. Informasi geopasial menjadi kebutuhan mendesak bagi Pemerintah Daerah mengingat perencanaan berbasis spasial lebih efektif dan efisien apabila dibandingkan dengan perencanaan secara kualititatif.</p>
					</div>
				</li>
			</ul>
			</div>
			
		</div>


	</div>
	
@endsection