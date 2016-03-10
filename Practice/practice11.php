<?php
function IsSym($a)
{
    if($a['i']['j']===$a['j']['i']){
    return ture;
    }
    else{
    return false;
    }
}

$a['i']=array(1,2,3,4,5);
$a['j']=array(1,2,3,5,4);
if(IsSym ($a)){
    echo'Yes';
}
else{
    echo'No';
}


?>