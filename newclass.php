<?php

    session_start();
    $conn= mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'class');
    $cname2= $_POST['cname2'];
    $cid2= $_POST['cid2'];
    $password2= $_POST['password2'];
    $phone2=  $_SESSION['phone']; 
    $fn2= $_SESSION['fulln'];
    $uname2=$_SESSION['uname'];
    $tn1 = $_POST['cid2'];
    $tn1 .= "_q";
    $tn2 = $_POST['cid2'];
    $tn2 .= "_a";

    $s2="select * from classroom where cid='$cid2'";
    $result2= mysqli_query($conn,$s2);
    $num2= mysqli_num_rows($result2);

    if($num2==1){
        echo '<script>alert("Already exists the ID. Try with new one.")</script>';
    }
    else{
        $rrr2="CREATE TABLE $tn1 (qby varchar(255),ts TIMESTAMP,qid int auto_increment,q varchar(800),PRIMARY KEY( qid ))";
        mysqli_query($conn,$rrr2);
        $rrrr2="CREATE TABLE $tn2 (aby varchar(255),ts TIMESTAMP,qid int,a varchar(800))";
        mysqli_query($conn,$rrrr2);
        $rr2="insert into classroom (cname,cid,password,instructor,iname) values ('$cname2','$cid2','$password2','$phone2','$fn2')";
        mysqli_query($conn,$rr2);
        $r2="insert into stclass (cid,phone,uname) values ('$cid2','$phone2','$uname2')";
        mysqli_query($conn,$r2);
        echo"New class created Successfully ";
        echo '<script>alert("Registration Successful")</script>'; 
        header("location:classroom.php?id=$cid2");
    }

?>