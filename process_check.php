<?php

$_POST['num'];

if($num %2 == 0){
    echo "<h2 style='color:red; margin: 50px;'>เลขที่คุณส่งมาคือ เลข".$num." คือ<br>;
    echo "<h2 style='color:red; margin: 20px;'> เลขคู่</h2>";
}else{
    echo "<h2 style='color:red; margin: 50px;'>เลขที่คุณส่งมาคือ เลข".$num." คือ<br>;
    echo "<h2 style='color:red; margin: 100px;'> เลขคี่</h2>";
}
?>