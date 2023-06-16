<?php
   

if(isset($_POST['email']) && isset($_POST['password'])){
    $host="localhost";
    $username="root";
    $password="";
    $dname="login";
    $connect=mysqli_connect($host,$username,$password,$dname);
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $query="select * from login where email='$email' and password='$pass'";
    
    $res=mysqli_query($connect,$query);
    $count=mysqli_num_rows($res);
    if($count>0){
        
        echo'<script>alert("Login succesfull")</script>';
        header("Refresh:0; url=signinpage.html");
    }
    else{
        
        echo'<script>alert("User Details Not Found")</script>';
        header("Refresh:0; url=signinpage.html");
    }
       
   


   
  

    
}
?>