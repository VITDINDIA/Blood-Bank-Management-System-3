<?php

class database
{
public $connection;   
function __construct()
    {
$this->open_db_connection();   
    }    
public function open_db_connection()
    {
define('DB_HOST','localhost');define('DB_USER','root');define('DB_PASS','');define('DB_NAME','my_blood_bank_db'); 
//define('DB_HOST','localhost');define('DB_USER','naukarif_exam');define('DB_PASS','ansdjk1231@@@');define('DB_NAME','naukarif_my_blood_bank_db');   
$this->connection=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);    
if($this->connection->errno)
        {
die("Database connnection failed badly ". $this->connection->error);    
        }
    }
public function query($sql)
        {           
$result=$this->connection->query($sql);    
return $result;    
        }   
      
public function count_rows($result)
                {
return  mysqli_num_rows($result);   
                }
                
public function escape_string($string)
                {   
return $this->connection->real_escape_string($string);  
                }                                 
    
}
$database = new database();
?>