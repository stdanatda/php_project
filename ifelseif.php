<?php

   //if 1 conditiion => true
   // odd => 0 2 4 6 8
   // even => 1 3 5 7 9
   $num =56814;
   if($num%2==0){
        echo "เลขคู่";
   }


   echo "<hr color='red'>";

   //if eles
   $num2 =785465;
   if($num2 %2 == 0){
    echo "เลขคู่";
    }else{
    echo "เลขคี่";
}

echo "<hr color='red'>";
//
$prefix = "ด.ช.";
if($prefix == "นาง"){
    echo "ผู้หญิง";
}elseif($prefix == "นางสาว"){
    echo "ผู้หญิง";
}elseif($prefix == "ด.ช."){
    echo "ผู้ชาย";
}elseif($prefix == "ด.ญ."){
    echo "ผู้หญิง";
}else{
    echo"ผู้ชาย";

}
echo "<hr color='red'>";
//
switch($prefix){
    case 'นาย':
        echo"male";
        break;
    case 'ด.ช.':
        echo"male";
        break;
    case 'นาง':
        echo"female";
        break;
    case 'นาง':
        echo"female";
        break;
    default:
        echo"famale";
        break;
}

   


?>