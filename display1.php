<?php
include "lib/db_connect.php";
$tables = mysqli_query($conn, "SHOW TABLES");
while ($table = mysqli_fetch_row($tables)) {
	$table_name = $table[0];
	$create_time_query = "SELECT CREATE_TIME FROM information_schema.tables WHERE table_name = ?";
	$stmt = mysqli_prepare($conn, $create_time_query);
	mysqli_stmt_bind_param($stmt, "s", $table_name);
	mysqli_stmt_execute($stmt);
	$create_time = mysqli_fetch_row(mysqli_stmt_get_result($stmt))[0];
	$table_info[$table_name] = $create_time;
}
arsort($table_info);
$latest_table = key($table_info);
$Roll_no = $_GET['Roll_no'];
$sql = "SELECT * FROM `$latest_table` WHERE Roll_no = $Roll_no";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>

<head>
	<title>Form Submitted</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	<style>
		html,
		body {
			height: 100%;
		}


		h1 {
			font-size: 48px;
			margin-bottom: 30px;
		}

		p {
			font-size: 24px;
			margin-bottom: 20px;
		}

		.btn {
			background-color: white;
			border: none;
			color: #923cb5;
			font-size: 20px;
			font-weight: bold;
			padding: 10px 20px;
			text-transform: uppercase;

		}
      
		.btn:hover {
			background-color: #923cb5;
			color: white;
		}


		th {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		@media only screen and (max-width: 768px) {
			table {
				display: block;
				overflow-x: auto;
				white-space: nowrap;
			}
		}

      .container-content{
		width: 100%;
	  }
	</style>
</head>

<body>
	<div class="container-content">
	<center><h1>Form Submitted Successfully!</h1></center>
	<center><p>Thank you for submitting your form.</p></center>
	<center><button class="btn"><a href="index.php">back to Homepage</a></button></center>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<div class="container text-light">
		<table class="table table table-striped table-bordered table-hover">
			<tbody>
				<tr>
					<th scope="row">Roll No:</th>
					<td><?php echo $row['Roll_No']; ?></td>
				</tr>
				<tr>
					<th scope="row">Name:</th>
					<td><?php echo $row['Name']; ?></td>
				</tr>
				<tr>
					<th scope="row">Email:</th>
					<td><?php echo $row['email_id']; ?></td>
				</tr>
				<tr>
					<th scope="row">Sem 1 GPA:</th>
					<td><?php echo $row['sem1_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">Sem 2 GPA:</th>
					<td><?php echo $row['sem2_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">FY GPA:</th>
					<td><?php echo $row['FY_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">Sem 3 GPA:</th>
					<td><?php echo $row['sem3_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">Sem 4 GPA:</th>
					<td><?php echo $row['sem4_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">SY GPA:</th>
					<td><?php echo $row['SY_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">Sem 5 GPA:</th>
					<td><?php echo $row['sem5_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">Sem 6 GPA:</th>
					<td><?php echo $row['sem6_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">TY GPA:</th>
					<td><?php echo $row['TY_GPA']; ?></td>
				</tr>
				<tr>
					<th scope="row">Category:</th>
					<td><?php echo $row['Category']; ?></td>
				</tr>
				<tr>
					<th scope="row">FY Fee Reciept No:</th>
					<td><?php echo $row['FY_Fee_Reciept_No']; ?></td>
				</tr>
				<tr>
					<th scope="row">SY Fee Reciept No:</th>
					<td><?php echo $row['SY_Fee_Reciept_No']; ?></td>
				</tr>
				<tr>
					<th scope="row">TY Fee Reciept No:</th>
					<td><?php echo $row['TY_Fee_Reciept_No']; ?></td>
				</tr>
				<tr>
					<th scope="row">Scholarship recieved:</th>
					<td><?php echo $row['Scholarship_recieved']; ?></td>
				</tr>
				<tr>
				<tr>
				<tr>
					<th scope="row">Contact_no:</th>
					<td><?php echo $row['Contact_No']; ?></td>
				</tr>
				<tr>
				<tr>
				<tr>
					<th scope="row">Address:</th>
					<td><?php echo $row['Address']; ?></td>
				</tr>
				<tr>
			</tbody>
		</table>
	</div>
</body>

</html>