
	<!-- === MAIN Background === -->
	
	<!-- === Slide 1 === -->
	<div class="slide story" id="slide-1" data-slide="1">
	
	<div class="shadow"  style="margin-top:32px; padding:10px; opacity:0.8">
		<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
		<div id="wowslider-container1">
			<div class="ws_images"><ul>
				<li><img src="{{ URL::asset('wowslider/data1/images/slide1.png') }}" alt="Slide 1" title="Slide 1" id="wows1_0"/></li>
				<li><img src="{{ URL::asset('wowslider/data1/images/slide2.png') }}" alt="jquery carousel" title="slide2" id="wows1_1"/></a></li>
				<li><img src="{{ URL::asset('wowslider/data1/images/slide3.png') }}" alt="slide3" title="slide3" id="wows1_2"/></li>
			</ul></div>
			<div class="ws_bullets">
				<div>
					<a href="#" title="Slide 1"><span><img src="{{ URL::asset('wowslider/data1/tooltips/slide1.png') }}" alt="Slide 1"/>1</span></a>
					<a href="#" title="slide2"><span><img src="{{ URL::asset('wowslider/data1/tooltips/slide2.png') }}" alt="slide2"/>2</span></a>
					<a href="#" title="slide3"><span><img src="{{ URL::asset('wowslider/data1/tooltips/slide3.png') }}" alt="slide3"/>3</span></a>
				</div>
			</div>
			<div class="ws_script" style="position:absolute;left:-99%"></div>
			<div class="ws_shadow"></div>
		</div>	
		<!-- End WOWSlider.com BODY section -->
	</div>
		
		<div class="container ">
			<br>
			<br>
			<br>
			
			
			<div class="row content-row slide1container" style="margin-top:-30px;">
			
				<div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:-40px;">
				  <div class="x_panel tile fixed_height_320 overflow_hidden">
					<div class="x_title">
					  <h2>Kepadatan Penduduk (Jiwa)</h2>
					</div>
					<div class="x_content" style="margin-top:-20px;">
					  <table class="" style="width:100%">
						<tr>
						  <th style="width:37%;">
							<canvas class="canvasmanadopenduduk" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
						  </th>
						  <th>
							<table class="tile_info">
								<tbody>
								  <tr>
									<td>Bunaken </td>
									<td>
										<span style="margin-left:10px;" id="kecbunaken"> </span>
									</td>
									<td><span style="margin-left:10px;">Bunaken Kep </span></td>
									<td>
										<span style="margin-left:10px;" id="kecbunakenkep"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Malalayang </td>
									<td>
										<span style="margin-left:10px;" id="kecmalalayang"> </span>
									</td>
									<td><span style="margin-left:10px;">Mapanget </span></td>
									<td>
										<span style="margin-left:10px;" id="kecmapanget"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Paal Dua </td>
									<td>
										<span style="margin-left:10px;" id="kecpaal2"> </span>
									</td>
									<td><span style="margin-left:10px;">Sario </span></td>
									<td>
										<span style="margin-left:10px;" id="kecsario"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Singkil </td>
									<td>
										<span style="margin-left:10px;" id="kecsingkil"> </span>
									</td>
									<td><span style="margin-left:10px;">Tikala </span></td>
									<td>
										<span style="margin-left:10px;" id="kectikala"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Tuminting </td>
									<td>
										<span style="margin-left:10px;" id="kectuminting"> </span>
									</td>
									<td><span style="margin-left:10px;">Wanea </span></td>
									<td>
										<span style="margin-left:10px;" id="kecwanea"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td>Wenang </td>
									<td>
										<span style="margin-left:10px;" id="kecwenang"> </span>
									</td>
								  </tr>
								  <tr>
									<td>------</td>
								  </tr>
								  <tr>
									<td>Total </td>
									<td>
										<span style="margin-left:10px;" id="totalmanado"> </span>
									</td>
								  </tr>
								</tbody>
							</table>
						  </th>
						</tr>
					  </table>
					</div>
				  </div>
				</div>
				
				<div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:-40px;">
				  <div class="x_panel tile fixed_height_320 overflow_hidden">
					<div class="x_title">
					  <h2>Mata Pencaharian (KK)</h2>
					</div>
					<div class="x_content" style="margin-top:0px;">
					  <table class="" style="width:100%">
						<tr>
						  <th style="width:37%;">
							<canvas class="canvasmanadomatapencaharian" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
						  </th>
						  <th>
							<table class="tile_info">
								<tbody>
								  <tr>
									<td>Pertanian </td>
									<td>
										<span style="margin-left:10px;" id="allpertanian"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Perikanan </td>
									<td>
										<span style="margin-left:10px;" id="allperikanan"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Tambang </td>
									<td>
										<span style="margin-left:10px;" id="alltambang"> </span>
									</td>
								  </tr>
								  <tr>
									<td>industri </td>
									<td>
										<span style="margin-left:10px;" id="allindustri"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Konstruksi </td>
									<td>
										<span style="margin-left:10px;" id="allkonstruksi"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Perdagangan </td>
									<td>
										<span style="margin-left:10px;" id="allperdagangan"> </span>
									</td>
								  </tr>
								  <tr>
									<td>Pemerintahan </td>
									<td>
										<span style="margin-left:10px;" id="allpemerintahan"> </span>
									</td>
								  </tr>
								</tbody>
							</table>
						  </th>
						</tr>
					  </table>
					</div>
				  </div>
				</div>
				
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->
	
	