<?php

    session_start();
    $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'class');

    $phone= $_POST['phone'];
    $password= $_POST['password'];

    $s="select * from utable where phone='$phone' && password='$password'";
    $result= mysqli_query($con,$s);
    $num= mysqli_num_rows($result);

    if($num==1){
        $n=mysqli_query($con,"select * from utable where phone='$phone' && password='$password'");
        $row=mysqli_fetch_assoc($n);
        $fname1=$row['fname'];
        $lname1=$row['lname'];
        $email1=$row['email'];
        $uname1=$row['uname'];
        $phone1=$row['phone'];
        $fn = $row['fname'];
        $fn .= " ";
        $fn .= $row['lname'];
        $_SESSION['fname']=$fname1;
        $_SESSION['lname']=$lname1;
        $_SESSION['email']=$email1;
        $_SESSION['uname']=$uname1;
        $_SESSION['phone']=$phone1;
        $_SESSION['fulln']=$fn;
        header('location:home.php');
    }
    else{
        ?>
    <script type="text/javascript">
    window.location.href = "login.php";
    alert("Wrong Phone or Password");
    </script>
    <?php      
    }

?>