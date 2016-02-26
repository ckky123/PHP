<html>
<head>
</head>


<html><body>
<?php
$i = 0;
echo "<table width=\"100%\">";
for($j=0;$j<9;$j++)
{
echo "<tr>";
while($i < 100)
{  
    
    if($i%10 == 0&&$i!=0){ echo "</tr>";}
    echo "<td>".$i."<td>";
    $i=$i+1;
}
echo "</table>";
}
?>
</body></html>

