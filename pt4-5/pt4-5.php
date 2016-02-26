<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title> pt4-5 </title>
</head>
<body>
<?php 
	$input=$_POST['input'];
	
	if(is_numeric($input))
	{
		$flag = ture;
		echo 'Input :' . $input . '<br>';
		echo 'abs :' . abs($input) . '<br>';
		echo 'round :' . round($input) . '<br>';
        echo 'ceil: ' . ceil($input) . '<br>';
		echo 'floor :' . floor($input) . '<br>';
	}
	else
	{
		echo '請輸入數字!';
	}
?>
</body>
</html>