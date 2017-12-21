<?php



$file = fopen("../data/customers.txt", "r");
$arr=array();
while(! feof($file))
{
$str= fgets($file);
 $arr= explode(",",$str);
echo "<tr><td><a href='./book.php?customers=".$arr[0]."'>".$arr[1]." ".$arr[2]."</a></td><td>".$arr[3]."</td><td>".$arr[4]."</td><td>".$arr[5]."</td></tr>";
}
fclose($file);

?>
