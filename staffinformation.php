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
<li><a href="staffinformation.php">Staff Information</a></li>
<li><a href="removestaff.php">Remove Staff</a></li>
<li><a href="addnewuser.php">Add New User</a></li>
<li><a href="index.php">Logout</a></li>
</ul>
</div>
</div>
<h2 align="center">Staff Information</h2>
<div class="container" style=" width:850px; margin-top:100px">
<div class="card">
</div>
</div>
</h2>
<table style="margin-left:300px" border="2"cellspacing="5px" cellpadding="5px">
<tr>
<td>StaffId</td>
<td>StaffName</td>
<td>Phone</td>
<td>Gender</td>
<td>Salary</td>
<td>Designation</td>
<td>Address</td>
<td>Remove</td>
</tr>
<?php
    $con=mysqli_connect("localhost","root","","hospitalmanagement");
    $query="select * from staffinformation";
    $data = mysqli_query($con,$query);
    $total= mysqli_num_rows($data);
    while($result=mysqli_fetch_assoc($data))
    {
        echo"
<tr>
<td>".$result['StaffId']."</td>
<td>".$result['StaffName']."</td>
<td>".$result['Phone']."</td>
<td>".$result['Gender']."</td>
<td>".$result['Salary']."</td>
<td>".$result['Designation']."</td>
<td>".$result['Address']."</td>
<td><a href ='delete1.php?rn=$result[StaffId]'>Remove Staff</td>
<tr>";
    }
?>
</table>
</body>
</html>
