
<!DOCTYPE HTML>
<html>
<head>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?=url('assets/css/bootstrap.min.css');?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?=url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />
<link href="<?=url('assets/css/font-awesome.css');?>" rel="stylesheet">
<script src="<?=url('assets/js/jquery.min.js');?>"> </script>
<script src="<?=url('assets/js/bootstrap.min.js');?>"> </script>
@yield('head_after')
</head>
<!--
Template Author: W3layouts
-->
<body>
	<div class="login">
		@yield('content')
	</div>
		<!---->
        <div class="copy-right">
            <p> Database UMKM Tasikmalaya &copy; 2017 </p>
        </div>

    <!--scrolling js-->
	<script src="<?=url('assets/js/jquery.nicescroll.js');?>"></script>
	<script src="<?=url('assets/js/scripts.js');?>"></script>
	<!--//scrolling js-->

    @yield('body_after')
</body>
</html>
