
 <?php

 $user1='allan';
 $user2='bill';
 $pwd1=123456;
 $pwd2=56785678;
 $pwd='1234';

 if ( (strtolower( trim( $_POST[user] ) ) == $user1)&& ($_POST[pass]==$pwd1) )
 {
  echo '<div align="center">'.'登入成功 hi allan';
 }
 else if ( (strtolower( trim( $_POST[user] ) ) == $user2)&& ($_POST[pass]==$pwd2) )
 {
  echo '<div align="center">'.'登入成功 hi bill';
 }
 else if(strlen($_POST[pass])<6)
 {
  echo '密碼太短';
 }
  else if(strlen($_POST[pass])>12)
 {
  echo '密碼太長';
 }
  else 
 {
  echo '登入失敗';
 }


?>
