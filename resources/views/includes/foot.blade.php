<!--==========================
  Footer
============================-->
  
  <!-- Required JavaScript Libraries -->
  <script src="{{ URL::asset('ibs/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('ibs/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('ibs/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ URL::asset('ibs/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ URL::asset('ibs/lib/morphext/morphext.min.js') }}"></script>
  <script src="{{ URL::asset('ibs/lib/wow/wow.min.js') }}"></script>
  <script src="{{ URL::asset('ibs/lib/stickyjs/sticky.js') }}"></script>
  <script src="{{ URL::asset('ibs/lib/easing/easing.js') }}"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="{{ URL::asset('ibs/js/custom.js') }}"></script>

  <script src="{{ URL::asset('ibs/contactform/contactform.js') }}"></script>
  
  <!-- Script For MAP GIS -->
  <script src="{{ URL::asset('gis/map1.js') }}"></script>
  <script src="{{ URL::asset('gis/map2.js') }}"></script>
  <script src="{{ URL::asset('gis/map3.js') }}"></script>
  <script src="{{ URL::asset('gis/map4.js') }}"></script>

	<script>
		
		// $('.teamlogo').css('content', 'url(image/LogoBIGDAKOM.jpeg)');
		// $('.logomdokota').css('content', 'url(image/logomdokota.jpeg)');
		
		// var pics = [
				// 'PetaManado1889.jpg',
				// 'Manado1889.jpg',
				// 'PetaManado19221.jpg',
				// '4',
				// '5',
				// '6'
			// ];

		// function filterBy(pic) {

			// $('.slider').css('content', 'url(image/'+pics[pic]+')');
			// $('.slider').css('background-image', 'url(image/'+pics[pic]+')');
			// $('.slider').css('background-size', '100%');
			// $('.slider').css('height', '50%');

			// Set the label to the month
			// document.getElementById('month').textContent = pic;
		// }

		// filterBy(0);

		// document.getElementById('slider').addEventListener('input', function(e) {
			// var pic = parseInt(e.target.value, 10);
			// filterBy(pic);
		// });
	</script>
  
  
	<script type="text/javascript">
		
		if (document.addEventListener) { // IE >= 9; other browsers
			document.addEventListener('contextmenu', function(e) {
				var activemap = $(this).context.activeElement.id;
				if (activemap == 'map1' || activemap == 'map2' || activemap == 'map3' || activemap == 'map4') {
					// x = confirm("Open FullScreen Mode ?");
						// if (x){
							window.location.href = activemap;
						// }
					e.preventDefault();
				}
			}, false);
		} else { // IE < 9
			document.attachEvent('oncontextmenu', function() {
				// x = confirm("Open FullScreen Mode ?");
					// if (x){
						// alert(this.id);
						// window.location.href = "map"+(this.id).toString();
					// }
				alert("silahkan upgrade browser anda..!!");
				window.event.returnValue = false;
			});
		}
		
	</script>