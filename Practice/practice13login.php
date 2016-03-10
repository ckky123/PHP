<?php
include('practice13sub.php');
include('practice13ver.php');

$result= verify($_POST['username'],$user,$_POST['password'],$userData);
    if($result){
    echo 'Hi '.$_POST['username'].'<br>your email is:'.$result;     
    }     
    else{
    echo'username or password error';  
    }


?>
