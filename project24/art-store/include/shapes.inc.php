<?php

try {
    $conn = new PDO(DBCONNECTION, DBUSER, DBPASS);
    $query_id="";
    if(isset($_GET['shape'])){
    	$query_id = $_GET['shape'];
    }	
    echo '<select class="ui fluid dropdown" name="shape"><option value="">Select Artist</option>';

  foreach($conn->query('SELECT shapename FROM shapes ORDER BY shapename') as $row){
  		$selected="";
  		if($row["shapename"]==$query_id){
  			$selected="selected='selected'";
  		}
    	echo '<option value="'.$row["shapename"].'" '.$selected.'>'.$row["shapename"].'</option>';
      }
    echo '</select>';
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$conn=null;

?>