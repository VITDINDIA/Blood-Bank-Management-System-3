<?php
class session 
{
public $signed_in=false;public $user_id;    
function __construct()
        {
session_start();  
$this->check_user_login_in();
        }    
public function check_user_login_in()
        {   
if(isset($_SESSION["my_blood_uidiu"]))
            {
$this->user_id=$_SESSION["my_blood_uidiu"];
$this->signed_in=true;

            }
else
            {
$this->signed_in=false;     
            }                    
        }
public function is_signed_in()
        {
return $this->signed_in;    
        }
public function unset_session()
    {
unset($_SESSION['my_blood_uidiu']); 
$this->signed_in=false;   
    }
public function login($uid,$user)
    {
if($uid)    
        {           
$_SESSION['my_blood_uidiu']=$uid;
$_SESSION['my_blood_user']=$user;     
$this->signed_in=true;    
        }                 
    }
public function logout()
    {
           
unset($_SESSION['my_blood_uidiu']);
unset($_SESSION['my_blood_user']);     
$this->signed_in=false; 
echo"<script>location.href='index.php';</script>";   
                
    }                                   
        
}
$session = new session();


?>