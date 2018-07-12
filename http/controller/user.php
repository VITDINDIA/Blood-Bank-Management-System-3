<?php
class user extends db_objects
        {
public function varify_user($uid,$pass,$user)
            {
if($user == "HOSPITAL")
    {
$sql="SELECT * FROM `my_hospital` WHERE `myemail`='$uid'  ";    
$sql.=" and `mypassword`= '$pass'"; 
    }
else if($user == "RECEIVER")
    {
$sql="SELECT * FROM `my_receiver` WHERE `myemail`='$uid'  ";    
$sql.=" and `mypassword`= '$pass'"; 
    }
return $this->find_query_by_id($sql);    
            }    
    
        }
$user=new user();

?>