<?php
/*
    Place utility functions here
*/

    function readCustomers($url){
        $file = fopen($url, "r"); 
        $arr=array();
        $res="";
        while(! feof($file))
        {
            $str= fgets($file);
            $arr= explode(";",$str);
            $tem="<tr><td class='mdl-data-table__cell--non-numeric'>".$arr[1]." ".$arr[2]."</td><td     class='mdl-data-table__cell--non-numeric'>".$arr[4]."</td><td   class='mdl-data-table__cell--non-numeric'>".$arr[6]."</td><td><span class='inlinesparkline'>".    $arr[11]."</span></td></tr>";
            $res=$res.$tem;
        }
        fclose($file);
        return $res;
    };

?>