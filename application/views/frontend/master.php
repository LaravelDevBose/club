<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arup-->
<!-- * Date: 12/11/2018-->
<!-- * Time: 5:43 PM-->
<!-- */-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Club 9698 <?php if(isset($title)): echo '||'.$title; endif; ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Main Css Start-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/frontEnd/css/main.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--Main Css End-->
	<!-- favicon-icon -->
	<link rel="icon" type="image/png" href="<?= base_url()?>assets/frontEnd/images/icon/favicon.png">
	<!-- favicon-icon -->
</head>
<!-- Header End -->
<!-- Body Start -->
<body>
<div class="nc_preloader">
	<div class="loader_overlay">
		<div class="loader_image">
			<img src="<?= base_url()?>assets/frontEnd/images/spinner.gif"  alt="loader">
		</div>
	</div>
</div>
<?php if($content != 'index'): ?>
<div class="main_wrapper nc_header_main" style="background: url(<?= base_url()?>assets/frontEnd/images/header_bg.jpg) no-repeat;">
	<div class="overlay_color">
		<?php $this->load->view('frontEnd/menu');?>
		<div class="nc_breadcum" style="background: url(<?= base_url()?>assets/frontEnd/images/header_bg.jpg) no-repeat">
			<div class="nc_heading_middle">
				<h2> <?php if(isset($title) && $title): echo $title; else: echo 'Club 9698'; endif; ?> </h2>
			</div>
		</div>
	</div>
</div>
<?php
endif;
if (isset($content)) :
	$this->load->view('frontend/'.$content, TRUE);
endif;

if($content != 'index'):
?>
<!-- footer start -->
	<div  style="background-color: #1C1C1C!important;;">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-md-offset-2 about_us">
					<h3>About Club</h3>
					<p>It is a long established fact that a reader will be distracted by the readable. It is a long established fact that a reader will be distracted by the readable.
						It is a long established fact that a reader will be distracted by the readable. It is a long established fact that a reader will be distracted by the readable.
					</p>
				</div>

				<div class="col-md-4 col-md-offset-2 pull-right contact_us">
					<h3>Contact Us</h3>
					<span>
						<i class="fa fa-envelope-o" aria-hidden="true"></i> club@gmail.com
					</span>
					<span>
						<i class="fa fa-phone" aria-hidden="true"></i> club@gmail.com
					</span>
					<span>
						<i class="fa fa-map-marker" aria-hidden="true"></i> club@gmail.com
					</span>
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-sm-6">
					<div class="left_text">
						<p class="footer_text">CopyRight @ 2018 Club 9698.com</p>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="nc_copright_text pull-right">
						<p class="footer_text">Developed By <a href="http://www.linktechbd.com" style="color: #fff"><img style="height: 15px;" src="http://www.linktechbd.com/images/link-up_technology.png" alt="link-up-technology">Link Up Technology</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endif;?>
<!-- footer end -->
<!-- script start -->
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/jquery.min.js" ></script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/bootstrap.min.js" ></script>
<!-- script end -->
<!-- animation js -->
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/animation/jquery.scrollorama.js" ></script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/animation/TweenMax.js" ></script>
<!-- animation js -->
<!-- owl js start -->
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/crousel/owl.carousel.js">
</script>
<!-- owl js end -->
<!-- video js start -->
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/video/js/mediaelement-and-player.min.js">
</script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/video/js/mep-feature-playlist.js">
</script>
<!-- video js end -->
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/revolution/js/jquery.themepunch.tools.min.js">
</script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/revolution/js/jquery.themepunch.revolution.min.js">
</script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/revolution/js/revolution.extension.layeranimation.min.js">
</script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/revolution/js/revolution.extension.navigation.min.js">
</script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/revolution/js/revolution.extension.slideanims.min.js">
</script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/revolution/js/revolution.extension.actions.min.js">
</script>
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/revolution/js/revolution.extension.parallax.min.js">
</script>
<!-- REVOLUTION JS FiLES -->
<!-- gallery js -->
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/gallery/jquery.magnific-popup.js">
</script>
<!-- gallery js -->
<!-- ui js -->
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/plugins/jquery_ui/jquery-ui.js">
</script>
<!-- ui js -->
<!-- custom js -->
<script type="text/javascript" src="<?= base_url()?>assets/frontEnd/js/custom.js" ></script>

<script>
	$(document).load(function(){
		$('#offers_box_wrapper').removeAttr('style');
	});

</script>
<!-- custom js -->
</body>
<!-- Body End -->

</html>
