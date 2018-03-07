<?php
try {
    $conn = new PDO(DBCONNECTION, DBUSER, DBPASS);

    $query_artist="";
    $query_museum="";
    $query_shape="";
    $sql_where="";
    if(!empty($_GET['artist'])){
      $query_artist = $_GET['artist'];
      $sql_where="AND artistid=".$query_artist." ";
    } 
    if(!empty($_GET['museum'])){
      $query_museum = $_GET['museum'];
      $temp=$sql_where;
      $sql_where=$temp."AND galleryid=".$query_museum." ";
    }   
    if(!empty($_GET['shape'])){
      $query_shape = $_GET['shape'];
      $temp=$sql_where;
      $sql_where=$temp."AND shapeid=".$query_shape." ";
    }
  foreach ($conn->query('SELECT title,paintingid, msrp,description,imagefilename,artistid FROM paintings WHERE 1=1 '.$sql_where.' LIMIT 0, 30') as $row) {
  		foreach($conn->query('SELECT firstname,lastname FROM artists where artistid='.$row["artistid"].' LIMIT 0, 30') as $row_2){
  			$fn= utf8_encode($row_2['firstname']);
  			$ln= utf8_encode($row_2['lastname']);
  		}
       echo '<li class="item">
                  <a class="ui small image" href="single-painting.php?id='.$row["paintingid"].'"><img src="images/art/works/square-medium/'.$row["imagefilename"].'.jpg"></a>
                    <div class="content">
                        <a class="header" href="single-painting.php?id='.$row["paintingid"].'">'.utf8_encode($row["title"]).'</a>
                        <div class="meta"><span class="cinema">'.$fn.' '.$ln.'</span></div>
                        <div class="description">
                            <p>'.utf8_encode($row["description"]).'</p>
                        </div>
                        <div class="meta">
                            <strong>$'.$row["msrp"].'</strong>
                        </div>
                        <div class="extra">
                            <a class="ui icon orange button" href="cart.php?id=565"><i class="add to cart icon"></i></a>
                            <a class="ui icon button" href="favorites.php?id=565"><i class="heart icon"></i></a>
                        </div>
                    </div>
                </li>';
    }
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$conn=null;

?>