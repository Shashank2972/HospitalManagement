<html>
<head>
<title>Patient Information</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body style="background-color:aqua">
<div class="wrapper">
<div class="sidebar">
<h2>Menu</h2>
<ul>
<li><a href="patientregistration.php">Patient Registration</a></li>
<li><a href="patientinformation.php">Patient Information</a></li>
<li><a href="roominformation.php">Room Information</a></li>
<li><a href="removenewward.php">Add New Ward</a></li>
<li><a href="userinformation.php">User Information</a></li>
<li><a href="index.php">Logout</a></li>
</ul>
</div>
</div>
<h2 align="center">Patient Information</h2>
<div class="container" style=" width:850px; margin-top:100px">
<div class="card">
</div>
</div>
</h2>
<table style="margin-left:300px" border="2"cellspacing="5px" cellpadding="5px">
<tr>
<td>Patient Id</td>
<td>Patient Name</td>
<td>Gender</td>
<td>Phone</td>
<td>Disease</td>
<td>Address</td>
<td>Dob</td>
<td>Consulted Doctor</td>
</tr>
<?php
    $con=mysqli_connect("localhost","root","","hospitalmanagement");
    $query="select * from patient";
    $data = mysqli_query($con,$query);
    $total= mysqli_num_rows($data);
    while($result=mysqli_fetch_assoc($data))
    {
        echo"
<tr>
<td>".$result['Patient_Id']."</td>
<td>".$result['Patient_Name']."</td>
<td>".$result['Gender']."</td>
<td>".$result['Phone']."</td>
<td>".$result['Disease']."</td>
<td>".$result['Address']."</td>
<td>".$result['Dob']."</td>
<td>".$result['Consulted_doctor']."</td>
<tr>";
    }
?>
</table>
</body>
</html>
