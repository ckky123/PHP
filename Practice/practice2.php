<html>
<head>
</head>
<body>
<?php

echo '<table widith=\"100%\" >';

for($i=0;$i<=9;$i++)
{
    echo '<tr>';
 for($j=0;$j<=9;$j++)
 {
    echo '<td>'.$i,$j.'</td>';
    if($i%10==0&& $i!=0)
    {
        echo'</tr>';
    }
 }
}

?>
</body>
</html>