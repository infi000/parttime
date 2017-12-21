
<?php
$files = fopen("../data/orders.txt", "r");
$arrs=array();
while(!feof($files))
{
	$str= fgets($files);
	$arr= explode(",",$str);
	array_push($arrs, $arr[1]);
	
}
fclose($files);
if(in_array($id,$arrs)){
 	echo $user;
}else{
	echo "no orders for that customers";
}

?>