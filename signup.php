<?php

if(isset($_POST['name']) || isset($_POST['email']) ||isset($_POST['password'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $host="localhost";
   $username="root";
   $password="";
   $dname="login";
   $connect=mysqli_connect($host,$username,$password,$dname);
   if(mysqli_connect_error()){
    die("connect error(" .mysqli_connect_error().')' .mysqli_connect_error());
   }
   else{
    $select="select email from login where email=? Limit 1 ";
    $insert="Insert into login values(?,?,?)";
    $con=$connect->prepare($select);
    $con->bind_param("s",$email);
    $con->execute();
    $con->bind_result($email);
    $con->store_result();
    $rown=$con -> num_rows();

    if($rown==0){
        $con->close();

        
        $con =$connect->prepare($insert);
        $con->bind_param("sss",$name,$email,$pass);
        $con->execute();
        echo'<script>alert("Registered succesfully")</script>';
        header("Refresh:0; url=signinpage.html");

    }
    else{
        echo'<script>alert("email already Exixt")</script>';
        header("Refresh:0; url=loginpage.html");
    }
    



   }

}

?>