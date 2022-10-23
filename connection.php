<?php
$db=new PDO('mysql:host=localhost;dbname=dbms_bbms','root','');
if($db)
{
    "Connected";
}
else
{
    "Not Connected";
}
?>