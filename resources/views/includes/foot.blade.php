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
	var pics = [
			'PetaManado1889_1.jpg',
			'Manado1889_1.jpg',
			'PetaManado1922.jpg',
			'4',
			'5',
			'6'
		];

	function filterBy(pic) {

		$('body').css('background-image', 'url(image/'+pics[pic]+')');
		$('body').css('background-size', '100%');
		$('body').css('height', '50%');

		// Set the label to the month
		// document.getElementById('month').textContent = pic;
	}

	
			filterBy(0);

			document.getElementById('slider').addEventListener('input', function(e) {
				var pic = parseInt(e.target.value, 10);
				filterBy(pic);
			});
  </script>