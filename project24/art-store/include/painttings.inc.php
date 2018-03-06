<?php
try {
    $conn = new PDO(DBCONNECTION, DBUSER, DBPASS);

    $query_artist="";
    $query_museum="";
    $query_shape="";
    $sql_where="";
    if(isset($_GET['artist'])){
      $query_artist = $_GET['artist'];
    } 
    if(isset($_GET['museum'])){
      $query_museum = $_GET['museum'];
    }   
    if(isset($_GET['shape'])){
      $query_shape = $_GET['shape'];
    }
    // if(isset($_GET['artist'])||isset($_GET['museum'])||isset($_GET['shape'])){
    //   $sql_where="WHERE";
    // }

  foreach ($conn->query('SELECT title, msrp,description,imagefilename,artistid FROM paintings  LIMIT 0, 30') as $row) {
  		foreach($conn->query('SELECT firstname,lastname FROM artists where artistid='.$row["artistid"].' LIMIT 0, 30') as $row_2){
  			$fn= $row_2['firstname'];
  			$ln= $row_2['lastname'];
  		}
       echo '<li class="item">
                  <a class="ui small image" href="single-painting.php?id='.$row["artistid"].'"><img src="images/art/works/square-medium/'.$row["imagefilename"].'.jpg"></a>
                    <div class="content">
                        <a class="header" href="single-painting.php?id='.$row["artistid"].'">'.$row["title"].'</a>
                        <div class="meta"><span class="cinema">'.$fn.' '.$ln.'</span></div>
                        <div class="description">
                            <p>'.$row["description"].'</p>
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