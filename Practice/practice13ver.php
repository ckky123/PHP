<?php
function verify($id,$user,$password,$userData){
    $check=false;
    for($i=0; $i<sizeof($user);$i++){
        if($id==$user[$i]){
        $check=true;
        break;
        }
    }
    if($check){
        if($password===$userData[$id]['password']){
        return $userData[$id]['email'];
        }
    return false;
    }
}
?>