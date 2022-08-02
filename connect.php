<?php
     $name=$_POST['name'];
     $username=$_POST['username'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $password=$_POST['password'];
     $cpass=$_POST['cpass'];\

     //Database connection
     $conn=new mysqli('localhost','root','','car_rental');
     if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error)
     }else{
        $stmt = $conn->prepare("insert into registration (name,username,email,phone,password,cpass) values(?,?,?,?,?,?)");
        $stmt -> bind_param("sssssi",$name,$username,$email,$phone,$password,$cpass);
        $stmt -> execute();
        echo "registration successfully.....";
        $stmt -> close();
        $conn -> close();
     }
?>