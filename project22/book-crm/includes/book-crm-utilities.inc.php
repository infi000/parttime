<?php
/*
    Place utility functions here
*/

include 'includes/Customer.class.php';
include 'includes/Order.class.php';

function createDom_customer($customerList){
	$arrlength=count($customerList);
	$html="";
	for($x=0;$x<$arrlength;$x++) {
	  	$arr=$customerList[$x];
	  	$id=$arr->id;
		$name=$arr->name;
		$university=$arr->university;
		$city=$arr->city;
		$sales=$arr->sales;
	  	$html=$html.' <tr><td class="mdl-data-table__cell--non-numeric "><a href="?customer='.$id.'">'.$name.'</a></td><td class="mdl-data-table__cell--non-numeric">'.$university.'</td><td class="mdl-data-table__cell--non-numeric">'.$city.'</td><td><span class="inlinesparkline">'.$sales.'</span></td></tr>';
	}	
	return $html;
}

function createDom_customerDetail($customerList){
	$html="";
	if (isset($_GET['customer'])){
		$query_id = $_GET['customer'];
		$arrlength=count($customerList);
		
		for($x=0;$x<$arrlength;$x++) {
		  	$arr=$customerList[$x];
		  	$id=$arr->id;
			$name=$arr->name;
			// $email=$arr[3];
			$university=$arr->university;
			$addr=$arr->addr;
			$city=$arr->city;
			$country=$arr->country;
			$sales=$arr->sales;
			if($query_id==$id){
				$html=$html.'<h3>'.$name.'</h3><p>'.$university.'</p><p>'.$addr.'</p><p>'.$city.', '.$country.'</p>';
			}
		}	
	}
		return $html;
}


function createDom_orderDetail($orderList){
	
	if (isset($_GET['customer'])){
		$html_table_th='<table class="mdl-data-table  mdl-shadow--2dp"><thead><tr><th class="mdl-data-table__cell--non-numeric">Cover</th><th class="mdl-data-table__cell--non-numeric">ISBN</th><th class="mdl-data-table__cell--non-numeric">Title</th></tr></thead><tbody>';
		$html="";
		$query_id = $_GET['customer'];
		$arrlength=count($orderList);
		for($x=0;$x<$arrlength;$x++) {
		  	$arr=$orderList[$x];
		  	$id=$arr->id;
			$isbn=$arr->isbn;
			$type=$arr->type;
			$title=$arr->title;
			if($query_id==$id){
				$html=$html.'<tr><td class="mdl-data-table__cell--non-numeric"><img src="./images/tinysquare/'.$isbn.'.jpg" alt=""></td><td class="mdl-data-table__cell--non-numeric">'.$isbn.'</td><td class="mdl-data-table__cell--non-numeric"><a>'.$title.'</a></td></tr>';
			}
		}
		if($html==''){
			$html='NO ORDERS!';
		}else{
			$html=$html_table_th.$html.'</tobdy></table>';
		}	
	}else{
		$html='';
	}
	
	return $html;
}


$dom_customer=createDom_customer($customerList);
$dom_customerDetail=createDom_customerDetail($customerList);
$dom_orderDetail=createDom_orderDetail($orderList);

?>