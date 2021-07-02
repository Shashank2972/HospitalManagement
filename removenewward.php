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
<h2 align="center">Add New Ward</h2>
<div class="container" style=" width:850px; margin-top:100px">
<div class="card">
<form method="POST">
<div class="form-group row">
<label for="inputEmail3" class="col-sm-2 col-form-label">PatientId:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="patientid" name="patientid" required>
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">RoomId</label>
<div class="col-sm-10">
<input type="text" max-length=10 class="form-control" id="roomid" name="roomid" required>
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="date" name="date" required>
</div>
</div>
<div class="form-group row" align="center">
<div class="col-sm-10">
<button type="submit" class="btnbtn-primary" id="submit" name="submit">Submit</button>
</div>
</div>
</div>
</div>
<?php
    $con=mysqli_connect("localhost","root","","hospitalmanagement");
    if(isset($_POST['submit']))
    {

        $id=$_POST['patientid'];
        $rid=$_POST['roomid'];
        $date=$_POST['date'];
        $query = "Update roominformation set PatientId=$id, Status='Full', InDate='$date' where Roomid='$rid'";
        $result=mysqli_query($con,$query);
    }
?>
</body>
</html>
