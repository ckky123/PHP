<title>計算結果</title>
<body>
<?php 
$i = 0;
$amount = array(
    array($_POST['bafirst'], $_POST['basecond'], $_POST['bathird']),
	array($_POST['huafirst'], $_POST['huasecond'], $_POST['huathird'])
);

$sum = array(0, 0);

for ($i = 0; $i < sizeof($amount); $i++)
{
	for ($j = 0; $j < sizeof($amount[$i]); $j++)
	{
		$sum[$i] += $amount[$i][$j];
	}
}
echo '這季阿寶的總業績是：' . $sum[0] . '千元' . '<br>';
echo '這季阿花的總業績是：' . $sum[1] . '千元' . '<br>';

if ($sum[0] > $sum[1])
{
	echo '<font color="red">這季阿寶比較棒喔！阿花請加油！</font>';
}
elseif ($sum[1] > $sum[0])
{
	echo '<font color="red">這季阿花比較棒喔！阿寶請加油！</font>';
}
else
{
	echo '兩人平手！';
}

?>
</body>
</html>