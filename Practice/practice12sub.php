<?php
$totalA= $_POST['firstA']+$_POST['secondA']+$_POST['thirdA'];
$totalB= $_POST['firstB']+$_POST['secondB']+$_POST['thirdB'];
echo "the total selling of salesA is:".$totalA."<br>";
echo "the total selling of salesB is:".$totalB."<br>";
if ($totalA > $totalB){
echo"salesA is better than salesB";
}
else if($totalA<$totalB){
echo"salesB is better than salesA";
}
else{
echo"salesA is as well as salesB";
}

?>