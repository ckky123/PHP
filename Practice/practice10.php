<?php
function IsEqu ($a){     
    if($a['i']===$a['j']){
    return true;
    }
    else{
    return false;
    }    
}

$a['i']=array(1,2,3,4,5);
$a['j']=array(1,2,3,5,4);
sort($a);
if(IsEqu ($a)){
    echo'the elements are the same';
}
else{
    echo'the elements are not the same';
}

?>