<?php

    session_start();
    $conn= mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'class');
    $cid2= $_POST['cid2'];
    $password2= $_POST['password2'];
    $phone2=  $_SESSION['phone']; 
    $uname2= $_SESSION['uname'];

    $s2="select * from classroom where cid='$cid2' && password='$password2'";
    $result2= mysqli_query($conn,$s2);
    $num2= mysqli_num_rows($result2);

    if($num2==1){
        $rr3="insert into stclass (cid,phone,uname) values ('$cid2','$phone2','$uname2')";
        mysqli_query($conn,$rr3);
        echo"You are added to the class.";
        header("location:classroom.php?id=$cid2");
    }
    else{
        echo "no class exists";
    }

?>