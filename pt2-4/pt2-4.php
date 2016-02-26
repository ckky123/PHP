<html>
	<head>
		<title>課堂練習2-4</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	
	<body>
	
    <form method="POST" action="submit.php">
	<div align="center"> <font size="+3"><b>用餐滿意度問卷</b></font> </div>
	<hr>
	<p>你的姓名:<input type="text" size="10"> </p>
	<p>今天點的餐點:
	<input type="checkbox" name="var1" value="牛小排"> 牛小排
	<input type="checkbox" name="var2" value="魚排"> 魚排
	<input type="checkbox" name="var3" value="義大利麵"> 義大利麵
	<input type="checkbox" name="var4" value="披薩"> 披薩
	</p>
	<p>您對今日用餐滿意度: 
	<input type="radio" name="var" value="很好"=>很好
	<input type="radio" name="var" value=" 滿意"=> 滿意
	<input type="radio" name="var" value="差"=>差
	</p>
    有甚麼其他的意見嗎: <textarea name="text" cols="25" rows="5"></textarea>
    <hr>
    <div align="center"><input type="submit" name="sub" value="確定送出你的問卷"></div>
	</form>
    </body>
</html>