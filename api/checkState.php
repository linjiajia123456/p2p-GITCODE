<?php
session_start();
if(isset($_SESSION["username"])){
    $username=$_SESSION["username"];
    $result=["isSuccess"=>true,"msg"=>"登录成功!","username"=>$username];
    echo json_encode($result);
   }
   else{
        $result=["isSuccess"=>false,"msg"=>"请登录!"];
        echo json_encode($result);
   } 


?>