//view_patients.php 
<?php 
$conn = new mysqli('localhost', 'root', '', 'hospital_management'); 

if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error); 
} 

$sql = "SELECT * FROM patients"; 
$result = $conn->query($sql); 
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport" content= 
	"width=device-width, initial-scale=1.0"> 
	<title>View Patients</title> 
	<style> 
	body { 
		background-color: #606060FF; 
		color: black; 
		font-family: Arial, sans-serif; 
		text-align: center; 
		margin: 0; 
		padding: 20px; 
	} 
	h2{ 
		background-color:#D6ED17FF; 
			padding: 1%; 
			border-radius: 35px; 
	} 
	table { 
		background-color: #D6ED17FF; 
		width: 100%; 
		border-collapse: collapse; 
		margin-top: 20px; 
	} 
	th, td { 
		border: 5px solid #606060FF; 
		padding: 10px; 
		color:black; 
	} 
	th { 
		background-color: #D6ED17FF; 
	} 
</style> 
</head> 
<body> 
	<h2>View Patients</h2> 
	<table border="1"> 
		<tr> 
			<th>ID</th> 
			<th>Name</th> 
			<th>Age</th> 
			<th>Gender</th> 
			<th>Address</th> 
			<th>Admission Date</th> 
		</tr> 
		<?php 
		while ($row = $result->fetch_assoc()) { 
			echo "<tr> 
				<td>{$row['id']}</td> 
				<td>{$row['name']}</td> 
				<td>{$row['age']}</td> 
				<td>{$row['gender']}</td> 
				<td>{$row['address']}</td> 
				<td>{$row['admission_date']}</td> 
			</tr>"; 
		} 
		?> 
	</table> 
</body> 
</html>
