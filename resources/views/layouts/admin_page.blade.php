
<!DOCTYPE HTML>
<html>
<head>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?=url('/assets/css/bootstrap.min.css');?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?=url('/assets/css/style.css');?>" rel='stylesheet' type='text/css' />
<link href="<?=url('/assets/css/font-awesome.css');?>" rel="stylesheet">
<script src="<?=url('/assets/js/jquery.min.js');?>"></script>
<!-- Mainly scripts -->
<script src="<?=url('/assets/js/jquery.metisMenu.js');?>"></script>
<script src="<?=url('/assets/js/jquery.slimscroll.min.js');?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?=url('/assets/css/custom.css');?>" rel="stylesheet">
<script src="<?=url('/assets/js/custom.js');?>"></script>
<script src="<?=url('/assets/js/screenfull.js');?>"></script>
<script>
$(function () {
	$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

	if (!screenfull.enabled) {
		return false;
	}



	$('#toggle').click(function () {
		screenfull.toggle($('#container')[0]);
	});



});
</script>
@yield('head_after')

</head>
<!--
Template Author: W3layouts
-->
<body>
	<div id="wrapper">
		@yield('header')
		<div id="page-wrapper" class="gray-bg dashbard-1">
			<div class="content-main">
				@yield('content')
				<div class="clearfix"> </div>
			</div>
			<div class="copy">
	            <p> Database UMKM Tasikmalaya &copy; 2017 </p>
		    </div>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!--scrolling js-->
	<script src="<?=url('/assets/js/jquery.nicescroll.js');?>"></script>
	<script src="<?=url('/assets/js/scripts.js');?>"></script>
	<!--//scrolling js-->
	<script src="<?=url('/assets/js/bootstrap.min.js');?>"></script>
	@yield('body_after')
</body>
</html>
