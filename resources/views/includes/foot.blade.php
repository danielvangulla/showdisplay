<!-- SCRIPTS -->
	<script src="{{ URL::asset('munter/js/html5shiv.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery-1.10.2.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('munter/fancybox/jquery.fancybox.pack-v=2.1.5.js') }}"></script>
	<script src="{{ URL::asset('munter/js/script.js') }}"></script>
	<script src="{{ URL::asset('js/chart.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/global_variable.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('wowslider/engine1/wowslider.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('wowslider/engine1/script.js') }}"></script>
	
	<script>
	
		
		$(document).ready(function(e) {
			var lis = $('.nav > li');
			menu_focus( lis[0], 1 );
			
			$(".fancybox").fancybox({
				padding: 10,
				helpers: {
					overlay: {
						locked: false
					}
				}
			});
		
			init_chart_bunaken1();
			init_chart_bunaken2();
			init_chart_bunaken3();
			
			init_chart_bunakenkep1();
			init_chart_bunakenkep2();
			init_chart_bunakenkep3();
			
			init_chart_malalayang1();
			init_chart_malalayang2();
			init_chart_malalayang3();
			
			init_chart_manado1();
			init_chart_manado2();
			
		});
		
		function content1()
		{
			alert('test');
		}
	</script>
	
	<script src="{{ URL::asset('js/chart_manado/chart_all_manado.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_bunaken.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_bunaken_kep.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_malalayang.js') }}"></script>
	<!--script src="{{ URL::asset('js/chart_manado/chart_mapanget.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_paal2.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_sario.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_singkil.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_tikala.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_tuminting.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_wanea.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_wenang.js') }}"></script-->
	