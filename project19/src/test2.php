<?php
$file = fopen("../data/orders.txt", "r");
$query = isset($_GET["qq"])?$_GET["qq"]:"";
/**
 * 另一种方法
 */
// if(is_set($_GET["do"])){
// $do = $_GET["do"];
// }
$arr=array();
$i=0;
while(! feof($file))
{
	$str= fgets($file);
	$arr= explode(",",$str);
	$id=$arr[1];
	echo $id.$query."<br>";
	if($query==$id){
		$i++;
		echo "id:".$arr[0]."name:".$arr[3]."<br>";
	}
}
if($i==0){
	echo "nothing";
}
fclose($file);
?>