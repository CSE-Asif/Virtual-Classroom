<?php

    session_start();
    $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'class');
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $uname= $_POST['uname'];
    $phone= $_POST['phone'];
    $password= $_POST['password'];

    $s="select * from utable where phone='$phone'";
    $result= mysqli_query($con,$s);
    $num= mysqli_num_rows($result);

    if($num==1){
        ?>
    <script type="text/javascript">
    alert("Phone number already taken. Try with a new one.");
    window.location.href = "register.php";
    </script>
    <?php 
        
    }
    else{
        $rr="insert into utable (fname,lname,email,uname,phone,password) values ('$fname','$lname','$email','$uname','$phone','$password')";
        mysqli_query($con,$rr);
        echo"Registration Successful. Log in to your account.";
        ?>
    <script type="text/javascript">
    alert("Registration Successful");
    window.location.href = "login.php";
    </script>
    <?php 
    }

?>