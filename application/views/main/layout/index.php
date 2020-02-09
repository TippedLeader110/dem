<!DOCTYPE html>
<html>
<head>
	<title>DEM Homepage</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
</head>
<body>
	<div class="cnavbar bscroll">
		<div class="logo">
			<a href="#">LOGO</a>
		</div>
		<div class="item">
			<ul>
				<li>
					<a href="#">Page1</a>
				</li>
				<li>
					<a href="#">Page2</a>
				</li>
				<li>
					<a href="#">Page3</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="content">
		
	</div>
</body>
</html>
<script type="text/javascript">
	var scrollPos;
	$('#content').load("<?php echo base_url('Home/mainpage') ?>")
	$(window).scroll(function(){
    	scrollPos = $(document).scrollTop();
		if (scrollPos>=0) {
			$('.cnavbar').addClass('static b');
		}	
		if(scrollPos<=1){
			$('.cnavbar').removeClass('static b');
		}
	});

</script>
