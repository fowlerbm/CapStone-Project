<?php


//if user is logged on show logout button
if(!isset($_SESSION["login"])){
    echo  "Please login to view this page";
}

?>