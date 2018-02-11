<?php
/*
   Represents a Order (for the book case)
 */
error_reporting( E_ALL&~E_NOTICE );

class Order
{
    var $title;
    var $id;
    var $isbn;
    var $type;
    function Order($id,$title,$isbn,$type){
    	$this->title=$title;
    	$this->isbn=$isbn;
    	$this->id=$id;
    	$this->type=$type;


    }
}

function getOrderList($url){
    $file = fopen($url, "r");
	$arr=array();
	$order=array();
	while(! feof($file))
	{
		$str= fgets($file);
		$arr= explode(",",$str);
		$id=$arr[1];
		$title=$arr[3];
		$isbn=$arr[2];
		$type=$arr[4];
		// echo "hahahah/////";
		$ord= new Order($id,$title,$isbn,$type);
		// $ord= new Order(1,2,3,4);
		array_push($order,$ord);
	}
	return $order;
	fclose($file);
}

$orderList=getOrderList('./data/orders.txt');

?>