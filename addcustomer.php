<?php 
session_start();
include 'dbconnect.php'; 
$error = false;
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$query = "INSERT INTO customers(name,phone,email,address) VALUES(?,?,?,?)";
	$stmt = $connection->prepare($query);
	$stmt->bind_param("ssss",$name,$phone,$email,$address);
	$stmt->execute();
	$_SESSION['message'] = "Customer Added Successfully";
	$_SESSION['type'] = "success";
	header('location:index.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body>
	<div class="main-content">
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			
				<div class="forms">
					<h2 class="title1" style="text-align: center;">PHP CRUD OPARETION</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Basic Form :</h4>
						</div>
						<div class="form-body">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
								<div class="form-group">
									<label for="exampleInputName">Customer Name</label> 
									<input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Customer Name"> 
								</div>
								<div class="form-group">
									<label for="exampleInputPhone">Customer Phone</label> 
									<input type="text" class="form-control" id="exampleInputPhone" name="phone" placeholder="Customer Phone"> 
								</div>
								<div class="form-group">
									<label for="exampleInputEmail">Customer Email</label> 
									<input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Customer Email"> 
								</div>
								<div class="form-group">
									<label for="exampleInputAddress">Customer Address</label> 
									<input type="text" class="form-control" id="exampleInputAddress" name="address" placeholder="Customer Address"> 
								</div> 
									<button type="submit" name="submit" class="btn btn-default">Submit</button> 
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard</p>
	   </div>
        <!--//footer-->
	</div>
	
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>