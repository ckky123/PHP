<?php
echo '�{�b�O����<font color="red">' . (date('Y')-1911) . '</font>�~<font color="red">'. date('m') .'</font>��<font color="red">'. date('d') .'</font>��<br>';
if ((date('a') == 'am'))
{
	echo '�W��<font color="red">' . date('h') .'</font>��<font color="red">'. date('i') .'</font>��<font color="red">' . date('s') . '</font>��';
}
else
{
	echo '�U��<font color="red">' . date('h') .'</font>��<font color="red">'. date('i') .'</font>��<font color="red">' . date('s') . '</font>��';
}
?>