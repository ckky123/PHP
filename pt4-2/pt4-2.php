<html>
<head>
  <meta http-equiv="Content-Type" content="text/html">
  <title> pt4-2</title>
</head>
<body>
<?php
$sum1=0;
$sum2=0;
$sum3=0;
$sum4=0;
$sum5=0;
$sum6=0;

for($i=0;$i<=10000;$i++)
{
 $random=rand(1,6);

if($random==1)
{
$sum1++;
}
else if($random==2)
{
$sum2++;
}
else if($random==3)
{
$sum3++;
}
else if($random==4)
{
$sum4++;
}
else if($random==5)
{
$sum5++;
}
else if($random==6)
{
$sum6++;
}
}


echo '點數1共出現'.$sum1.'次，機率為'.($sum1/100).'%<br>';
echo '點數2共出現'.$sum2.'次，機率為'.($sum2/100).'%<br>';
echo '點數3共出現'.$sum3.'次，機率為'.($sum3/100).'%<br>';
echo '點數4共出現'.$sum4.'次，機率為'.($sum4/100).'%<br>';
echo '點數5共出現'.$sum5.'次，機率為'.($sum5/100).'%<br>';
echo '點數6共出現'.$sum6.'次，機率為'.($sum6/100).'%<br>';
?>
</body>

