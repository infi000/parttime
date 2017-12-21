<!DOCTYPE html>
<html>
<head>
<mata charset=utf-8>
	<title></title>
</head>
<body>

</body>
</html>
<?php
$file = fopen("../data/customers.txt", "r");
$arr=array();
while(! feof($file))
{
$str= fgets($file);
 $arr= explode(",",$str);
echo "<tr><td><a href='./book.php?customers=".$arr[0]."&user=".$arr[1]." ".$arr[2]."'>".$arr[1]." ".$arr[2]."</a></td><td>".$arr[3]."</td><td>".$arr[4]."</td><td>".$arr[5]."</td></tr>";
}
fclose($file);

?>
