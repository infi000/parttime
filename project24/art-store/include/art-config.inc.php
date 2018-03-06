<?php
define('DBCONNECTION', 'mysql:host=localhost;dbname=art');
define('DBUSER', 'root');
define('DBPASS', 'root');



try {
    $conn = new PDO(DBCONNECTION, DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT *  FROM paintings LIMIT 0 , 30"); 
    $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     $res=$stmt->fetchAll();
     // echo  $stmt;
   print_r (each($res));
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$conn=null
?>
