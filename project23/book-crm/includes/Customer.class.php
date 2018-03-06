<?php
/*
   Represents a Customer (for the book case)
 */
class Customer { 
  /* 成员变量 */ 
  var $id; 
  var $name; 
  var $email; 
  var $university; 
  var $addr; 
  var $city; 
  var $country; 
  var $sales; 
   
  /* 成员函数 */ 
  function setid($par){ 
     $this->id = $par; 
  } 
   
  function getid(){ 
     return $this->id; 
  } 
   
  function setname($par){ 
     $this->name = $par; 
  } 
   
  function getname(){ 
     return $this->name; 
  }

  function setemail($par){ 
     $this->email = $par; 
  } 

   function getemail(){ 
     return $this->email; 
   } 

     function setuniversity($par){ 
     $this->university = $par; 
    } 

   function getuniversity(){ 
     return $this->university; 
   } 

    function setaddr($par){ 
     $this->addr = $par; 
    } 

   function getaddr(){ 
     return $this->addr; 
   } 
    function setcountry($par){ 
     $this->country = $par; 
    } 

   function getcountry(){ 
     return $this->country; 
   } 
    function setcity($par){ 
     $this->city = $par; 
    } 

   function getcity(){ 
     return $this->city; 
   }  
     function setsales($par){ 
     $this->sales = $par; 
    } 

   function getsales(){ 
     return $this->sales; 
   } 
} 

?>