<?php
    session_start();
    $as=$_SESSION['phone'];


    if(isset($_POST['lob']))
    {
        session_start();
        session_destroy();
        header('Location:login.php');
        exit;
    }



?>
<html>
<head>

<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>







<link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@400&display=swap" rel="stylesheet">
<title>Home Page</title>
<style>

    body{
        display: flex;
        justify-content: center;
        background: ;
        
    }
    .profile{
        background: linear-gradient(45deg, #13547a, #80d0c7); 
        width:39%;
        height:100vh;
        position:fixed;
        top:0;
        left:0;
    }
    .ln{
        border: 1px solid black;
    }
    .ms{
        width:61%;
        height:100%;
        margin-left:39.5%;
    }
    .phn{
        height: 30px;
        width: 200px;
        margin: -10px 5px;
    }
    .btnx{
        height: 40px;
        border-radius:7px;
        border:1px solid black;
        background: linear-gradient(45deg, #2c6975, #68b2a0);
    }
    .btn2{
        position:fixed;
        height: 40px;
        width:80px;
        bottom:20px;
        left:20px;
    }
    .classbox{
        height:auto;
        width:550px;
        border:1px solid black;
        border-radius:5px;
        padding:5px 0;
        margin:10px 0;
        background: linear-gradient(45deg, #2c6975, #68b2a0);
    }
    .btn{
        height: 50px;
        width:150px;
        border-radius:7px;
        border:1px solid black;
        background: linear-gradient(45deg, #4a707a, #F5FaF8);
        margin:5px;
    }
    footer{
    position: fixed;
    bottom:0;
    right:0;
    color:black;
    text-align: right;
    width:20%;
    margin:5px;
  }
  .clslink {
    text-decoration: none;
    color:black;
  }
  .clslink:hover {
    text-decoration: none;
    color:black;
  }

</style>

</head>
<body>

<div class="profile">
    <br>
    <center><h1>User Profile</h1></center>
    <hr class="ln">
    <h2> <?php echo $_SESSION['fulln']; ?> </h2>
    <h3> <?php echo "Email : ", $_SESSION['email']; ?> </h3>
    <h3> <?php echo "User_Name : ", $_SESSION['uname']; ?> </h3>
    <h3> <?php echo "Contact No. : ", $_SESSION['phone']; ?> </h3>
    <div class="mb-2 mt-3"> 
		<button type="button"  onclick="location.href = 'update and manage.php';" class="btn btn-block">Update Profile</button>
	</div>
    <div class="mb-3 mt-2"> 
		<button type="button" onclick="location.href = 'update and manage.php';" class="btn btn-block">Manage classes</button>
	</div>
    <form method="post"><input class="btn2" type="submit" name="lob" value="Log Out"></form>
    
</div>
<div class="ms">
        <form action="newclass.php" method="post" >
            <h1>Create new Class</h1><br>
            <input type="text" class="phn" name="cname2" placeholder="Class Name" required >
            <input type="text" class="phn" name="cid2" placeholder="Class ID" required >
            <input type="password" class="phn" name="password2" placeholder="Password" required>
            <input class="btnx" type="submit" value="Create Class" >
        </form>
        <form action="enterclass.php" method="post" >
            <h1>Enter Classroom</h1><br>
            <input type="text" class="phn"  name="cid2" placeholder="Class ID" required >
            <input type="password" class="phn"  name="password2" placeholder="Password" required>

            <input class="btnx" type="submit" value="Enter Classroom" >
	


        </form>
        <hr class="ln">
        
        <?php
            $con3= mysqli_connect('localhost','root','');
            mysqli_select_db($con3,'class');
            $result3= mysqli_query($con3,"select * from stclass where phone='$as'");
        ?>
        <?php 
            while($row3=mysqli_fetch_assoc($result3))
            {
                $cid4=$row3['cid'];
                $result4= mysqli_query($con3,"select * from classroom where cid='$cid4'");
                $row4=mysqli_fetch_assoc($result4);
        ?>
                <a class="clslink" href="classroom.php?id=<?php echo $row3['cid']  ?>">
                <div class="classbox">
                    <h2> <?php echo $row4['cname']  ?> (<?php echo $row4['cid'] ?>)</h2>
                    <h4>Instructor: <?php echo $row4['iname']  ?></h4>
                </div>        
                </a>
        <?php
            }
        ?>
        </div>
        

</div>

       
</body>
        <footer>
            <p><b> &copy;2020 Asif.  All rights reserved.</b></p>
        </footer>
</html>