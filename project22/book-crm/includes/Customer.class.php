<?php
/*
   Represents a Customer (for the book case)
 */
error_reporting( E_ALL&~E_NOTICE );

class Customer
{
    var $name;
    var $id;
    var $email;
    var $university;
    var $addr;
    var $city;
    var $country;
    var $sales;
    function Customer($id,$name,$email,$university,$addr,$city,$country,$sales){
    	$this->name=$name;
    	$this->email=$email;
    	$this->id=$id;
    	$this->university=$university;
    	$this->addr=$addr;
    	$this->city=$city;
    	$this->country=$country;
    	$this->sales=$sales;
    }
}

function getCustomerList($url){
    $file = fopen($url, "r");
	$arr=array();
	$customerList=array();
	while(! feof($file))
	{
		$str= fgets($file);
		$arr= explode(";",$str);
		$id=$arr[0];
		$name=$arr[1]." ".$arr[2];
		$email=$arr[3];
		$university=$arr[4];
		$addr=$arr[5];
		$city=$arr[6];
		$country=$arr[8];
		$sales=$arr[11];
		$cus= new Customer($id,$name,$email,$university,$addr,$city,$country,$sales);
		array_push($customerList,$cus);

	}
	return $customerList;
	fclose($file);
}

$customerList=getCustomerList('./data/customers.txt');

?>