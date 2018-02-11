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
		// $email=$arr[3];
		$university=$arr->university;
		// $addr=$arr[5];
		$city=$arr->city;
		// $country=$arr[8];
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
	$html="";
	if (isset($_GET['customer'])){
		$query_id = $_GET['customer'];
		$arrlength=count($orderList);
		for($x=0;$x<$arrlength;$x++) {
		  	$arr=$orderList[$x];
		  	$id=$arr->id;
			$isbn=$arr->isbn;
			// $type=$arr->type;
			// $title=$arr->title;
			echo json_encode($arr)."\n";
			if($query_id==$id){
				// echo $query_id.'======>'.$id;
				// echo "/bn";
				// $html=$html.'<tr><td class="mdl-data-table__cell--non-numeric"><img src="./images/tinysquare/'.$isbn.'.jpg" alt=""></td><td class="mdl-data-table__cell--non-numeric">'.$isbn.'</td><td class="mdl-data-table__cell--non-numeric">'.$title.'</td></tr>';

				$html=$html."aaaaaaaaaaaaaa";
				
			}
		}	
	}
	// echo $html; 
		return $html;
}

$dom_customer=createDom_customer($customerList);
$dom_customerDetail=createDom_customerDetail($customerList);
$dom_orderDetail=createDom_orderDetail($customerList);

?>