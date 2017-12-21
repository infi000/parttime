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
if(in_array($id, $arrs)){
	echo '<tr><th></th><th>ISBN</th><th>title</th><th>category</th></tr>';
	$files = fopen("../data/orders.txt", "r");
	$arr=array();
	while(!feof($files)){
		$str= fgets($files);
		$arr= explode(",",$str);
		if($id==$arr[1]){
			echo '<tr><td><img src="../images/book/tinysquare/'.$arr[2].'.jpg" alt=""></td><td>'.$arr[2],'</td><td>'.$arr[3].'</td><td>'.$arr[4].'</td></tr>';
		}	
}
fclose($files);

}


?>