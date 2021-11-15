<?php
    $sub=$_GET['id'];
    $sub1=$sub;
    $sub1 .="_q";
    $sub2=$sub;
    $sub2 .="_a";
    echo $sub1;
    echo $sub2;
    session_start();
    $conn= mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'class');

    $currentuser=$_SESSION['uname'];
    if(isset($_POST["asd1"]))
    {
        $qask=$_POST["ask1"];
        if($qask!=""){
            $rr5="INSERT INTO $sub1 (qby, ts,q) VALUES ('$currentuser',NOW(),'$qask')";
            mysqli_query($conn,$rr5);
        }
        header("Refresh:0");
    }

    if(isset($_POST["giveans"]))
    {
        $ans7=$_POST["qqd1"];
        $qstn=$_POST["qd5"];
        if($ans7!=""){
            $rr56="INSERT INTO $sub2 (qid,a,aby,ts) VALUES ('$qstn','$ans7','$currentuser',NOW())";
            mysqli_query($conn,$rr56);
        }
        header("Refresh:0");
    }
    
    


?>
  
<html> 
    <head> 
    <title>Classroom</title>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@450&display=swap" rel="stylesheet">
        
        
        <script type='text/javascript'>

        var a=[];

        function viewans(id){
            for(var ii=0;ii<a.length;ii++){
                var xx=document.getElementsByClassName(a[ii]);
                for(j=0;j<xx.length;j++){
                    xx[j].style.display="none";
                }
            }
            var yy=document.getElementsByClassName("qid"+id);
            for(k=0;k<yy.length;k++){
                yy[k].style.display="block";
            }

        }




        
        function addFields(clicked){

            
            var container = document.getElementById("container");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            


                // Create an <input> element, set its type and name attributes
                var input = document.createElement("textarea");
                input.classList.add("ta");
                input.rows = "3";
                input.cols = "70";
                input.placeholder= "Write your Answer here for Question "+clicked;
                input.name="qqd1";
            
                var input2 = document.createElement("input");
                input2.classList.add("btn");
                input2.type= "submit";
                input2.value= "Answer";
                input2.name= "giveans";
                input2.id= clicked;

                var input3 =document.createElement("input");
                input3.type= "hidden";
                input3.id="qd5";
                input3.name="qd5";
                input3.value=clicked;

                container.appendChild(input3);
                container.appendChild(input);
                container.appendChild(input2);

            
                
            
        }
        </script>
        
        
        
        
        
        
  
        <title> 
              
        </title> 
        <style>
            *{
                font-family: 'Commissioner', sans-serif;
            }
            header{
                background-color:	#659DBD;
                height:80px;
                width:98%;
                position:fixed;
                top:0;
                left:0;
                display:flex;
                justify-content:space-between;
                padding-left:10px;
                padding-right:30px;
            }
            footer{
            background-color:#9E9E9E;
            position: fixed;
            height:60px;
            bottom:0;
            left:0;
            color:black;
            width:100%;
            display:flex;
        }
        body{
            padding:0px;
            margin:0px;
        }
        main{
            display:flex;
            min-height: calc(100%);
        }
        .box{
            width:50px;
            height:50px;
        }
        .split {
        height: calc(100% - 140px);
        position: fixed;
        bottom:60px;
        overflow-x: hidden;
        z-index:10;
        }

        .left {
        left: 0;
        width: 30%;
        
        }
        .qbox{
            position:relative;
            width:370px;
            height:auto;
            background-color: #DCDCDC;
            margin: 0px 5px;
            text-align:left;

        }

        .right {
        right: 0;
        width: 25%;
        background: linear-gradient(45deg, #4a707a, #d5dad8);
        }
        .center {
        left:30%;
        width: 45%;
        
        }


        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        }

        .centered img {
        width: 150px;
        border-radius: 50%;
        }
        .cr{
            bottom:5px;
            position:fixed;
            right:5px;
        }
        .qi{
            display:flex;
            margin-right:40px;
        }
        .btn{
            height: 50px;
            width: 70px;
            margin-top: 5px;
        }
        .ta{
            height: 60px;
        }
        #container{
            display: flex;
        }
        .ansbox{
            position:relative;
            background-color:#9C9E9E;
            height:auto;
            padding: 0.1px 7px ;
            margin:5px;
            border-radius:5px;
        }
        .dt{
            position:absolute;
            right:7px;
            bottom:0;
            margin:7px;
        }
        .ab{
            position:absolute;
            left:7px;
            bottom:0;
            margin:7px;
        }
        .mans{
            margin-left:7px;
            margin-bottom:60px;
        }
        .hdr{
            margin-left:7px;
        }
        .snc{
            height:66px;
            width:700px;
            overflow:hidden;
        }
        .inc{
            text-align:right;
            height:60px;
            width:550px;
            overflow:hidden;
        }

        
            
        </style>
    
    </head> 

    <body> 

<header>
     <?php
        $qr123= mysqli_query($conn,"select * from classroom where cid='$sub'");
        $rownum1=mysqli_fetch_assoc($qr123);
     ?>
     <div class="snc"><h1 style="font-size: 200%; margin-top:10px;"><?php echo $rownum1['cname'];?></h1></div>
     <div><h2 class="inc">Instructor : <?php echo $rownum1['iname'];?></h2></div>
     
</header>

<main>
<div class="split left">
    <h1 class="hdr"> Questions</h1>




        <?php 
            $tbl1= mysqli_query($conn,"select * from $sub1");
            while($row1=mysqli_fetch_assoc($tbl1))
            {
                $qidnum=$row1['qid'];
        ?>
                <button class="qbox" onclick="addFields(this.id); viewans(this.id);" name="write12" type="submit" id="<?php echo $row1['qid'] ?>" value="<?php echo $row1['qid'] ?>">
                <div >
                    <p class="mans"><b>Question :</b> <?php echo $row1['q'] ?> </p>
                    <h4 class="ab">By: <?php echo $row1['qby'] ?></h4>
                    <p class="dt">On <?php echo $row1['ts'] ?></p>
                </div>        
                </button>
        <?php
            }
        ?>
















    
</div>

<div class="split center">
<h1 class="hdr">
 Answers
</h1>


<?php 
            $tbl1= mysqli_query($conn,"select * from $sub1");
            while($row1=mysqli_fetch_assoc($tbl1))
            {
                $qidnum=$row1['qid'];
                $qry2=mysqli_query($conn,"select * from $sub2 where qid=$qidnum");
                if(mysqli_num_rows($qry2)==0)
                {
                    $answer="No Answer available right now.";
?>
                    <div class="qid<?php echo $qidnum; ?> ansbox" style="display:none;">
                            <p><?php echo $answer; ?></p>
                            <P>Please add your answer below.</p>
                    </div>
<?php



                }
                else{
                    
                   while( $row2=mysqli_fetch_assoc($qry2)){
                        $answer="";
                        $answer=$answer.$row2['a'];
?>
                        <div class="qid<?php echo $qidnum; ?> ansbox" style="display:none;">
                            <p class="mans"><?php echo $answer; ?></p>
                            <h4 class="ab">By: <?php echo $row2['aby'] ?></h4>
                            <p class="dt">On <?php echo $row2['ts'] ?></p>
                        </div>
<?php

                   }
                    
                }
                
?>
        <script>
            a.push("qid"+<?php echo $qidnum; ?>);
        </script>

        <?php
            }
        ?>








</div>

<div class="split right">
    <h1 class="hdr"> Members</h1>


        <?php 
            $tbl2= mysqli_query($conn,"select * from stclass where cid='$sub'");
            while($row2=mysqli_fetch_assoc($tbl2))
            {
        ?>
                <h2 class="hdr"> # <?php echo $row2['uname'] ?> </h2>
                
        <?php
            }
        ?>




    
</div>

</main>
<footer>

<form  class="qi" method="post">

    <textarea class="ta" placeholder="Ask your question here."  name="ask1" rows="5" cols="40"></textarea>
    <input class="btn" name="asd1" type="submit" value="Ask">
</form>





<form method="post" id="container" >
</form>






<div class="cr"><p><b> &copy;2020 Asif.  All rights reserved. </b></p></div>
</footer>




    </body> 
</html>