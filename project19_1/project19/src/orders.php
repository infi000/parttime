<?php

$file = fopen("../data/orders.txt", "r");
$arr1=array();
while(!feof($file))
{
	$str= fgets($file);
	$arr= explode(",",$str);
	array_push($arr1, $arr[1]);
	
}
fclose($file);
if(in_array($id, $arr1)){
	echo '<tr><th></th><th>ISBN</th><th>title</th><th>category</th></tr>';
	$file = fopen("../data/orders.txt", "r");
	$arr=array();
	while(!feof($file)){
		$str= fgets($file);
		$arr= explode(",",$str);
		if($id==$arr[1]){
			echo '<tr><td><img src="../images/book/tinysquare/'.$arr[2].'.jpg" alt=""></td><td>'.$arr[2],'</td><td>'.$arr[3].'</td><td>'.$arr[4].'</td></tr>';
		}	
}
fclose($file);

}else{
	echo '<tr><td id="nodata">nodata</td></tr>';
}


?>