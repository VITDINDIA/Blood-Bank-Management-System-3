<?php
require_once("http/init.php");		
$email=$_GET['q'];

$GetData=$Db_objects->search_by_id($email);
if($GetData != 0)        {

echo"<font color='red'><b><img src='public/img/wrong.jpg' />That username is taken. Try another.</b></font>";                                  
                         }
else                     {
echo"<font color='#00FF00'><b><img src='public/img/right.jpg' /> Yes! That username is available.</b></font>";
                        }                       
                   
?>