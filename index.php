<html>
<head>
<title>My Hospital</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body style=" background:url('images/background.jpg') no-repeat; background-size:cover; opacity:0.9">
<div class="container" style=" width:400px; margin-top:100px">
<div class="card">
<imgsrc="images/containerbackside.jpg" class="card-img-top">
<div class="card-body">
<form class="form-group" method="POST">
<label>UserName</label>
<input type="text" name="username" class="form-control" placeholder="Enter Username" required><br>
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Password" required><br>
<input type="submit" name="submit" value="Login">
</form>
</div>
</div>
</div>
<?php
    $con=mysqli_connect("localhost","root","","hospitalmanagement");
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="select * from userinformation where UserId='$username' and Password='$password'";
        $result=mysqli_query($con,$query);
        $abc=mysqli_num_rows($result);
        #echo "<script> alert($result); </script>";
if($username=='admin' && $password =='nopassword')
        {
            header("location:adminpage.php");
        }
        else if($abc>0)
        {
            header("location:page.php");
        }
        else
        {
            echo "<script>window.open('index.php'); </script>";
            echo "<script>alert('Enter Correct Details'); </script>";   
        }
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
