<?php
session_start();
$conn= mysqli_connect('localhost','root','');
mysqli_select_db($conn,'class');

$uphone=$_SESSION['phone'];


if(isset($_POST['sub1']))
{
    $a=$_POST['fname1'];
    $b=$_POST['lname1'];
    $c=$_POST['email1'];
    $d=$_POST['uname1'];
    $e=$_POST['password1'];
    echo '<script>alert("Your Profile will be updated.")</script>'; 
    $qry1="UPDATE utable SET fname='$a',lname='$b',email='$c',uname='$d',password='$e' WHERE phone='$uphone'";
    mysqli_query($conn,$qry1);
    header("Refresh:0");
}

if(isset($_POST['sub2']))
{
    $f=$_POST['cid1'];
    $qry3=mysqli_query($conn,"select * from classroom where cid='$f'");
    if(mysqli_num_rows($qry3)==1)
    {
        $qry2=mysqli_query($conn,"select * from classroom where instructor='$uphone'");
        if(mysqli_num_rows($qry2)==1)
        {
            echo '<script>alert("Instructor exit not possible. You have to delete the class.")</script>';
        }
        else
        {
            echo '<script>alert("You left the classroom.")</script>';
            $qry4="delete from stclass where cid='$f' and phone='$uphone'";
            mysqli_query($conn,$qry4);
        }

    }
    else{
        echo '<script>alert("No Class available with this id.")</script>';
    }
    header("Refresh:0");
}


if(isset($_POST['sub3']))
{
    $g=$_POST['cid2'];
    $aa=$g;
    $aa .="_q";
    $bb=$g;
    $bb .="_a";

    $qry5=mysqli_query($conn,"select * from classroom where cid='$g'");
    if(mysqli_num_rows($qry5)==1)
    {
        $qry6=mysqli_query($conn,"select * from classroom where cid='$g' and instructor='$uphone'");
        if(mysqli_num_rows($qry6)==1)
        {
            echo '<script>alert("Class deleted.")</script>';
            mysqli_query($conn,"delete from classroom where cid='$g'");
            mysqli_query($conn,"delete from stclass where cid='$g'");
            mysqli_query($conn,"DROP TABLE $aa");
            mysqli_query($conn,"DROP TABLE $bb");
        }
        else{
            echo '<script>alert("Class can delete only by Instructor.")</script>';
        }
    }
    else{
        echo '<script>alert("No Class available with this id.")</script>';
    }
    header("Refresh:0");
}


if(isset($_POST['sub4']))
{
    $h=$_POST['cid3'];
    $qry8=mysqli_query($conn,"select * from classroom where cid='$h'");
    if(mysqli_num_rows($qry8)==1)
    {
        $qry9=mysqli_query($conn,"select * from classroom where cid='$h' and instructor='$uphone'");
        if(mysqli_num_rows($qry9)==1)
        {
            $qry10=mysqli_query($conn,"select * from classroom where cid='$h'");
            $ro=mysqli_fetch_assoc($qry10);
            $ps=$ro['password'];
            echo "<script type='text/javascript'>alert('$ps');</script>"; 
        }
        else{
            echo '<script>alert("Ask your instructor for password.")</script>'; 
        }
    }
    else{
        echo '<script>alert("No Class available with this id.")</script>'; 
    }
    header("Refresh:0");
}

?>










<!DOCTYPE html>
<html>
<head>

    

	<title>Update Profile and Manage Classes.</title>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="st4.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<div class=" col-md-6 text-center " style="background: #659DBD; height:100vh;">
                
                <form method="post" class="px-3 mt-3 mb-3">
                <br>
				<h1 class=" mt-3 mb-3">Update Profile.</h1>
                <p>You can't change your phone number as it is the only unique identifier to recognize you.</p>
                <input type="text" class="phn" name="fname1" placeholder="First Name" required ><br>
                <input type="text" class="phn" name="lname1" placeholder="Last Name" required ><br>
                <input type="text" class="phn" name="email1" placeholder="Email" required ><br>
                <input type="text" class="phn" name="uname1" placeholder="Username" required ><br>
                <input type="password" class="pass" name="password1" placeholder="Password" required>
               <br><br> 
               <input type="submit" value="Update Profile" class="btn" name="sub1" style="width: 140px;border:1px solid black;">		
						
				</form>
		
			</div>

			<div class="text-center col-lg-6 col-md-6 infinity-form-container" style="background: linear-gradient(45deg, #4a707a, #d5dad8); height:100vh;">


            <form method="post" class="px-3 mt-0 mb-0">
                
				<h1 class=" mt-2 mb-3">Exit Classroom</h1>
                <input type="text" class="phn" name="cid1" placeholder="Classroom ID" required ><br>
               <br> <input type="submit" name="sub2" value="Leave Classroom" class="btn" style="width: 140px;border:1px solid black;margin-top: 0px;margin-bottom: 0px;">		
						
				</form>




                <form method="post" class="px-3 mt-0 mb-0">
                <br>
				<h1 class=" mt-0 mb-3">Delete Classroom</h1>
                <input type="text" class="phn" name="cid2" placeholder="Classroom ID" required ><br>
               <br> <input type="submit" name="sub3" value="Delete Classroom" class="btn" style="width: 140px;border:1px solid black;margin-top: 0px;margin-bottom: 0px;">		
						
				</form>

               
               
                <form method="post" class="px-3 mt-0 mb-0">
                <br>
				<h1 class=" mt-0 mb-3">Forgot Password</h1>
                <input type="text" class="phn" name="cid3" placeholder="Classroom ID" required ><br>
               <br> <input type="submit" name="sub4" value="See Password" class="btn" style="width: 140px;border:1px solid black;margin-top: 0px;margin-bottom: 0px;">		
						
				</form>


								
			</div>
	
		</div>
	</div>	
</body>
</html>
