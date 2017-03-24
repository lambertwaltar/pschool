<?php 

	session_start();
	error_reporting(E_ALL ^ E_NOTICE);	
	
	?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>Silk | Sign Up</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- icheck -->
	<link rel="stylesheet" href="css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>
	<!-- icheck -->
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/eakroko.js"></script>

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body class='login'>
<div class="breadcrumbs">
<?php  if(isset($_SESSION['success']))
			  {
	 ?>
     	<div style="text-align:center; height:20px; margin-bottom:5px; padding:3px;">
        <img src="img/ok.png"  style=" width:25px; height:25px;margin-right:5px;">
        <?php 
			echo $_SESSION['success']; 
			unset ($_SESSION['success']);
		?>
        
        </div>
				  
 <?php }if(isset($_SESSION['error'])){
	?>
     	<div style="text-align:center; height:20px; margin-bottom:5px; padding:3px;">
        <img src="img/padlock.png" style=" width:25px; height:25px;margin-right:5px;">
        <?php 
			echo $_SESSION['error']; 
			unset ($_SESSION['error']);
		?>
        
        </div>
				  
 <?php 
	 	
	 } 
?>
 </div>
	<div class="wrapper">
		<h1 style="margin-top:0px;">
			<a href="#">
				<img src="img/logo-big.png" alt="" class='retina-ready' width="59" height="49">SILK</a>
		</h1>
		<div class="login-body"  style="box-shadow: 10px 10px 5px #000000;">
			<h2>THANKS FOR REGISTERING</h2>
				<img src="img/thank.png" alt="" class='retina-ready' width="100" height="80" style="margin-left:150px;">
		</div>
	</div>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-38620714-4']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
	</script>
</body>

</html>
