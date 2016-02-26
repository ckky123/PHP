<?php
echo '現在是民國<font color="red">' . (date('Y')-1911) . '</font>年<font color="red">'. date('m') .'</font>月<font color="red">'. date('d') .'</font>日<br>';
if ((date('a') == 'am'))
{
	echo '上午<font color="red">' . date('h') .'</font>時<font color="red">'. date('i') .'</font>分<font color="red">' . date('s') . '</font>秒';
}
else
{
	echo '下午<font color="red">' . date('h') .'</font>時<font color="red">'. date('i') .'</font>分<font color="red">' . date('s') . '</font>秒';
}
?>