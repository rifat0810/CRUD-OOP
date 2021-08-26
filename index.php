<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
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
				<?php if(isset($_SESSION['message'])) { ?>
			<div class="alert alert-<?php echo $_SESSION['type'];?> text-center alert-dismissible">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong><?= $_SESSION['message']; ?></strong>
			</div>
			<?php } unset($_SESSION['message']); unset($_SESSION['type']);?>
			<a class="title1 btn btn-primary" style="text-align:right;" href="addcustomer.php">Add Customer</a>
				<div class="tables">
					<h2 class="title1" style="text-align:center;"><span class="bg-primary text-white" style="padding:5px 10px">Customers Table</span></h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>#</th>
								  <th>Customer Name</th>
								  <th>Customer Phone</th>
								  <th>Customer Email</th>
								  <th>Customer Address</th>
								  <th>Edit</th>
								  <th>Delete</th>
								</tr>
							</thead>
<?php
include 'dbconnect.php';
$query = "SELECT * FROM customers";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()){
?>
							<tbody>
								<tr>
								  <td><?= $row['id']; ?></td>
								  <td><?= $row['name']; ?></td>
								  <td><?= $row['phone']; ?></td>
								  <td><?= $row['email']; ?></td>
								  <td><?= $row['address']; ?></td>
								  <td><a class="btn btn-warning" href="editinfo?edit=<?= $row['id']; ?>">Edit</a></td>
								  <td><a class="btn btn-danger"  href="delete?del=<?= $row['id']; ?>" onclick="return confirm('Do you want delete this record?')">Delete</a></td>
								</tr>
							</tbody>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard!</p>
	   </div>
        <!--//footer-->
	</div>
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>