<?php
    $con=mysqli_connect("localhost","root","","hospitalmanagement");
    $rollno= $_GET['rn'];
    $query = "DELETE FROM staffinformation WHERE StaffId= '$rollno'";
    $data=mysqli_query($con,$query);
    if($data)
    {
        echo "<font color='red'>Record Deleted from Database";
    }
    else
    {
        echo "<font color='red'>Record did not Deleted from Database";
    }
