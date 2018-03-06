<?php

try {
    $conn = new PDO(DBCONNECTION, DBUSER, DBPASS);
      $query_id="";
    if(isset($_GET['artist'])){
    	$query_id = $_GET['artist'];
    }	
    echo '<select class="ui fluid dropdown" name="artist"><option value="">Select Artist</option>';
  foreach($conn->query('SELECT artistid,firstname,lastname FROM artists ORDER BY lastname') as $row){
  		$selected="";
  		if($row["artistid"]==$query_id){
  			$selected="selected='selected'";
  		}
    echo '<option value="'.$row["artistid"].'" '.$selected.'>'.$row["firstname"].' '. $row['lastname'].'</option>';
      }
  echo '</select>';
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$conn=null;
?>