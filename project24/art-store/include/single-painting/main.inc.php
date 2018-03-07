<?php
error_reporting( E_ALL&~E_NOTICE );


class painting
{
    var $paintingid;
    var $title;
    var $artist;
    var $rate;
    var $desc;
    var $year;
    var $country;
    var $medium;
    var $width;
    var $height;
    var $museum;
    var $museum_copyright;
    var $museum_link;
    var $museum_Assession;
    var $genres;
    var $googlelink;
    var $wikilink;
    var $googledesc;
    var $image;
    var $msrp;
    function Painting($paintingid,$title,$artist,$rate,$desc,$year,$country,$medium,$width,$height,$museum,$museum_copyright,$museum_link,$museum_Assession,$genres,$googlelink,$wikilink,$googledesc,$image,$msrp){
        $this->paintingid=$paintingid;
        $this->title=$title;
        $this->artist=$artist;
        $this->rate=$rate;
        $this->desc=$desc;
        $this->year=$year;
        $this->country=$country;
        $this->medium=$medium;
        $this->width=$width;
        $this->height=$height;
        $this->museum=$museum;
        $this->museum_copyright=$museum_copyright;
        $this->museum_link=$museum_link;
        $this->museum_Assession=$museum_Assession;
        $this->genres=$genres;
        $this->googlelink=$googlelink;
        $this->wikilink=$wikilink;
        $this->googledesc=$googledesc;
        $this->image=$image;
        $this->msrp=$msrp;
    }
}
class select{
    var $title;
    var $type;
    function Select($title,$type){
        $this->title=$title;
        $this->type=$type;
    }
}

function getSelect($params,$title,$type){
    $conn = new PDO(DBCONNECTION, DBUSER, DBPASS);
    $fram=array();
    foreach ($conn->query('SELECT * FROM '.$params.'' ) as $row){
        $_title=$row[$title];
        $_type=$row[$type];
        $f=new Select($_title,$_type);
        array_push($fram,$f);

    };
    return $fram;
}

function getPainting($id){
    $conn = new PDO(DBCONNECTION, DBUSER, DBPASS);
    foreach ($conn->query('SELECT * FROM paintings WHERE paintingid='.$id.'' ) as $row){
        $paintingid=$row["PaintingID"];
        $title=$row["Title"];
        $artistid=$row["ArtistID"];
        foreach($conn->query('SELECT firstname,lastname FROM artists WHERE artistid='.$artistid.' LIMIT 0, 30') as $row_2){
            $fn= utf8_encode($row_2['firstname']);
            $ln= utf8_encode($row_2['lastname']);
            $artist=$fn.$ln;
        };
        $rate=4;
        $desc=$row["Description"];
        $year=$row["YearOfWork"];
        $msrp=$row["MSRP"];
        $country="none";
        $medium=$row["Medium"];
        $width=$row["Width"];
        $height=$row["Height"];
        $googlelink=$row["GoogleLink"];
        $googledesc=$row["GoogleDescription"];
        $wikilink=$row["WikiLink"];
        $museumid=$row["GalleryID"];
        $image=$row["ImageFileName"];
        $museum_copyright=$row["CopyrightText"];
        $museum_Assession=$row["AccessionNumber"];
        $museum_link=$row["MuseumLink"];
        foreach($conn->query('SELECT * FROM galleries WHERE GalleryID='.$museumid.' LIMIT 0, 30') as $row_3){
            $museum= utf8_encode($row_3['GalleryName']);
        };
        $genres=array();
        foreach($conn->query('SELECT paintinggenres.GenreID, genres.GenreID, genres.GenreName, paintinggenres.PaintingID FROM paintinggenres,genres WHERE paintingid='.$id.' AND genres.GenreID = paintinggenres.GenreID ') as $row_3){
           array_push($genres,$row_3['GenreName']);
        };
    }  

    $conn=null;

    return new Painting($paintingid,$title,$artist,$rate,$desc,$year,$country,$medium,$width,$height,$museum,$museum_copyright,$museum_link,$museum_Assession,$genres,$googlelink,$wikilink,$googledesc,$image,$msrp);
}
if(isset($_GET['id'])){
   $query_id = $_GET['id'];
   $choosed_painting=getPainting($query_id);
   $painting_frames=getSelect('typesframes','Title','Price');
   $painting_glass=getSelect('typesglass','Title','Price');
   $painting_matt=getSelect('typesmatt','Title','ColorCode');
}else{
    $choosed_painting="";
    $painting_frames="";
}  
?>



