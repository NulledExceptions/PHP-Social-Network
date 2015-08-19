<?php
if(!isset($_SESSION)){session_start();}

if(isset($_COOKIE["user"])){
    echo "Weclcome ". $_COOKIE["user"]."</br>";
    echo $_COOKIE["user"];

  } else{

    header ('Location: http:www.marneezy.com');



}


?>
