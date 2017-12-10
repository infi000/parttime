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
var_dump($user)
 // json_encode($user); 
// echo $user;
// print_r $user


// $file = fopen("../data/customers.txt", "r");
// $arr=array();
// while(! feof($file))
// {
// $str= fgets($file);
//  $arr= explode(",",$str);
// echo "<tr><td><a href='./book.php?customers=".$arr[0]."'>".$arr[1]." ".$arr[2]."</a></td><td>".$arr[3]."</td><td>".$arr[4]."</td><td>".$arr[5]."</td></tr>";
// }
// fclose($file);

?>