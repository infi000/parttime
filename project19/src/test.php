<?php
// header("content-type:text/html; charset=gb2312"); 
$file = fopen("../data/customers.txt", "r");
$user=array();
$i=0;
while(! feof($file))
{
$str= fgets($file);
 $user[$i]= explode(",",$str);
 $i++;
}
fclose($file);
$user=array_filter($user);
echo json_encode($user); 

// echo 'KφhlerKφhlerKφhlerKφhlerKφhlerKφhlerKφhlerKφhlerKφhlerKφhlerKφhlerKφhlerKφhler'


// $file = fopen("../data/customers.txt", "r");
// $arr=array();
// $i=0;
// while(! feof($file))
// {
// $str= fgets($file);
//  $arr= explode(",",$str);
// echo "<tr><td>".$arr[0]." ".$arr[1]."</td><td>".$arr[3]."</td><td>".$arr[3].
// }
// fclose($file);
// $user=array_filter($user);
// echo json_encode($user); 
?>