<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<title>計算成績結果</title>
<body>
<?php 
$sum = $_POST['ch'] + $_POST['ma'] + $_POST['en'];
$avg = $sum / 3;
?>
國文成績：<?php echo $_POST['ch'] ?><br>
數學成績：<?php echo $_POST['ma'] ?><br>
英文成績：<?php echo $_POST['en'] ?><br>
總分為：<?php echo $sum ?><br>
平均為：<?php echo $avg ?><br>
</body>
</html>