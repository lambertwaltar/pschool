<?php 

	//session_id('mySessionID');
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);	
    //ob_start();//object start
	//die($_SESSION['sess_email']);
	include "connect.php";
	
	if(!isset($_SESSION['sess_user_id']) || $_SESSION['sess_role'] !="teacher")
	{
	
	$_SESSION['error']=" <b>Access denied </b>";
	session_write_close();
	header("Location: index.php");
	
	}
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

	<title>SMS - Add Students</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- New DataTables -->
	<script src="js/plugins/momentjs/jquery.moment.min.js"></script>
	<script src="js/plugins/momentjs/moment-range.min.js"></script>
	<script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="js/plugins/datatables/extensions/dataTables.tableTools.min.js"></script>
	<script src="js/plugins/datatables/extensions/dataTables.colReorder.min.js"></script>
	<script src="js/plugins/datatables/extensions/dataTables.colVis.min.js"></script>
	<script src="js/plugins/datatables/extensions/dataTables.scroller.min.js"></script>

	<!-- Chosen -->
	<script src="js/plugins/chosen/chosen.jquery.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>


	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>
<body>
	<div id="navigation">
		<div class="container-fluid">
			<?php include "navigate.php"?>
		</div>
	</div>
	<div class="container-fluid" id="content">
			<?php include "sidebar.php"?>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Students</h1>
					</div>
					
				</div>
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
        <img src="images/fail.png"  style=" width:25px; height:25px;margin-right:5px;">
        <?php 
			echo $_SESSION['error']; 
			unset ($_SESSION['error']);
		?>
        
        </div>
				  
 <?php 
	 	
	 } 
?>
                </div>
                
				
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-user"></i>
									Add Students
								</h3>
							</div>
							<div class="box-content nopadding">
								<ul class="tabs tabs-inline tabs-top">
                                   
                                    
                                   
									 <li class='active'>
										<a href="#profile" data-toggle='tab'>
										<i class="fa fa-user"></i>Select and Upload Marksheet</a>
									 </li>

														
								</ul>
								<div class="tab-content padding tab-content-inline tab-content-bottom">
                  
 
<div class="tab-pane active" id="profile">
	<form action="addstudents.php" class="form-horizontal form-validate" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="form-group" style="width:900px;">
							<div class="email controls">
								<input type="file" name='sfile' placeholder="Select File" class='form-control' data-rule-required="true" style="width:300px; float:left; padding-bottom:38px;">
								
								<select id="class" class="form- control" name="class" style="width:130px; margin-left:15px; height:
								45px; ">
									<option value="" selected="selected">Select Class</option>
									<?php 
									try{		
									$result = $db->query("SHOW TABLES");
					
										while ($row = $result->fetch(PDO::FETCH_NUM)) {
										
										if($row[0]!="users"){
										?>
											<option value="<?php echo $row[0]; ?>	"><?php echo $row[0]; ?>	</option>		
										<?php 
										}
										}
									}	
									
									catch(PDOException $ex) {
										echo "An Error occured!".$ex->getMessage(); 
									}
								?>
								</select>
							</div>
							<div class="email controls" style="float:left;">								
								<textarea id="class" class="form- control" name="description" style="width:445px; margin-left:0px; height:
								100px; margin-top:10px;">
								
								</textarea>
							</div>
							<br>
							<div class="form-actions" style="margin-left:145px; margin-top:90px;">
								<input type="submit" class='btn btn-primary' value="Submit" name="submit">
								<input type="reset" class='btn' value="Reset">
							</div>
				 </div>
			</div>
	</form>
</div>



				</div>

            </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
