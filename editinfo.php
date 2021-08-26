<?php 
session_start();
include 'dbconnect.php'; 
$error = false;
if(isset($_POST['submit'])){
    $id = $_GET['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$query="UPDATE customers SET name=?,phone=?,email=?,address=? WHERE id=?";
	$stmt = $connection->prepare($query);
	$stmt->bind_param("ssssi",$name,$phone,$email,$address,$id);
	$stmt->execute();
	$_SESSION['message'] = "Customer Edit Successfully";
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
<?php
include 'dbconnect.php';
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $query = "SELECT * FROM customers WHERE id = '$id'";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];
        $address = $row['address'];
    }
}
?>
							<form action="editinfo?id=<?php echo $id; ?>" method="post">
								<div class="form-group">
									<label for="exampleInputName">Customer Name</label> 
									<input type="text" class="form-control" id="exampleInputName" name="name" value="<?php echo $name;?>" placeholder="Customer Name"> 
								</div>
								<div class="form-group">
									<label for="exampleInputPhone">Customer Phone</label> 
									<input type="text" class="form-control" id="exampleInputPhone" name="phone" value="<?php echo $phone;?>" placeholder="Customer Phone"> 
								</div>
								<div class="form-group">
									<label for="exampleInputEmail">Customer Email</label> 
									<input type="email" class="form-control" id="exampleInputEmail" name="email" value="<?php echo $email;?>" placeholder="Customer Email"> 
								</div>
								<div class="form-group">
									<label for="exampleInputAddress">Customer Address</label> 
									<input type="text" class="form-control" id="exampleInputAddress" name="address" value="<?php echo $address;?>" placeholder="Customer Address"> 
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