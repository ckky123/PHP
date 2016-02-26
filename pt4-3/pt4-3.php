
 <?php

 $user1='allan';
 $user2='bill';
 $pwd1=1234;
 $pwd2=5678;
 

 if ( (strtolower( trim( $_POST[user] ) ) == $user1)&& ($_POST[pass]==$pwd1) )
 {
  echo '<div align="center">'.'登入成功 hi allan';
 }
 else if ( (strtolower( trim( $_POST[user] ) ) == $user2)&& ($_POST[pass]==$pwd2) )
 {
  echo '<div align="center">'.'登入成功 hi bill';
 }
 else 
 {
  echo '登入失敗';
 }

?>
