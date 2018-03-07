<?php

try {
    $conn = new PDO(DBCONNECTION, DBUSER, DBPASS);
     $query_id="";
    if(isset($_GET['museum'])){
    	$query_id = $_GET['museum'];
    }	
    echo '<select class="ui fluid dropdown" name="museum"><option value="">Select Artist</option>';
  foreach($conn->query('SELECT galleryname,galleryid FROM galleries ORDER BY galleryname') as $row){
  	$selected="";
  		if($row["galleryid"]==$query_id){
  			$selected="selected='selected'";
  		}
    echo '<option value="'.$row["galleryid"].'" '.$selected.'>'.utf8_encode($row["galleryname"]).'</option>';
      }
  echo '</select>';
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$conn=null;
?>