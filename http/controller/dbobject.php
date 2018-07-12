<?php
class db_objects
	{	
public $Blood_Groups;public $Blood_Name;public $myemail;public $mypassword;public $myname;
public $mycontact;public $myurl;public $mystreet;public $mylandmark;public $mypurpose;
public $mycity;public $created_at;public $myflag;public $mybloodgroup;public $myunit;
public $receiverid;public $hopitalid;public $myremark;public $mystatus;public $remark_date;public $post;

public static $db_ftable="my_blood_groups";public static $db_setable="my_hospital";
public static $db_thtable="my_hospital_blood";public static $db_fotable="my_receiver";
public static $db_fitable="my_receiver_request";
public static $db_setable_fields=array("myemail","mypassword","myname","mycontact","myurl","mystreet","mylandmark","mycity","created_at","myflag");
public static $db_thtable_fields=array("myemail","mybloodgroup","myunit");
public static $db_fotable_fields=array("myemail","mypassword","myname","mycontact","mybloodgroup","mypurpose","mystreet","mycity","created_at","myflag");
public static $db_fitable_fields=array("receiverid","hopitalid","mybloodgroup","myunit","mystatus","post","mypurpose");

public function search_blood_Request_Status($uid)
    {
global $database;$i=1;
$ResultSet=$database->query("SELECT * FROM `my_receiver_request` WHERE `receiverid`='$uid'");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
$fetchdata=mysqli_fetch_array($database->query("SELECT * FROM `my_hospital` WHERE `myemail`='$fetch[2]'"));            
?>   
      <tr>
        <td><?php   print $i;    ?></td>
        <td><a target="_new" title="View Site" href="<?php print $fetchdata[4]; ?>"><?php  print $fetchdata[2]; ?></a></td>
        <td><?php  $address= $fetchdata[5]." , ".$fetchdata[6]." , ".$fetchdata[7] ; ?>
        <a href="index.php?page=Google_Map&address=<?php print $address; ?>" target="_new">Google Map</a>
        </td>
        <td><?php  print $fetchdata[3]; ?></td><td><?php  print $fetch[3]; ?></td><td><?php  print $fetch[4]; ?></td>
        <td><?php  print $fetch[9];  ?> </td><td><?php  print $fetch[8];  ?> </td><td><?php  print $fetch[5];  ?> </td><td><?php  print $fetch[6];  ?> </td>
      </tr>
<?php 
$i++; 
        } 
      
        
    } 

public function search_processed_request_of_user($uid)
    {
global $database;$i=1;
$ResultSet=$database->query("SELECT `receiverid`,`mybloodgroup`,`myunit`,`post`,`mypurpose`,`myremark`,`mystatus`,`remark_date` FROM `my_receiver_request` WHERE `hopitalid`='$uid' and `mystatus`!='PENDING' order by `post`");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
$fetchdata=mysqli_fetch_array($database->query("SELECT `myname`,`mycontact`,`mypurpose`,`mystreet` FROM `my_receiver` WHERE `myemail`='$fetch[0]'"));            
?>   
<form method="post" action="#">
      <tr>
        <td><?php   print $i;    ?>
        </td>
        <td><?php  print $fetchdata[0]; ?></td><td><?php  print $fetchdata[3]; ?></td><td><?php  print $fetchdata[1]; ?></td>
        <td><?php  print $fetch[1]; ?></td>
        <td><?php  print $fetch[2]." Unit <br>($fetchdata[2])"; ?></td><td><?php  print $fetch[3]; ?></td>
        <td><?php  print $fetch[5]; ?></td><td><?php  print $fetch[6]; ?></td>
        <td><?php  print $fetch[7]; ?></td>
        
        </tr>
</form>
<?php 

$i++; 
        } 
      
        
    }

public function search_request_of_user($uid)
    {
global $database;$i=1;
$ResultSet=$database->query("SELECT `receiverid`,`mybloodgroup`,`myunit`,`post`,`cnt`,`mypurpose` FROM `my_receiver_request` WHERE `hopitalid`='$uid' and `mystatus`='PENDING' order by `post`");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
$fetchdata=mysqli_fetch_array($database->query("SELECT `myname`,`mycontact`,`mypurpose`,`mystreet` FROM `my_receiver` WHERE `myemail`='$fetch[0]'"));            
?>   
<form method="post" action="#">
      <tr>
        <td><?php   print $i;    ?>
        <input type="hidden" value="<?php   print $fetch[4];    ?>" name="cnt" />
        </td>
        <td><?php  print $fetchdata[0]; ?></td><td><?php  print $fetchdata[3]; ?></td><td><?php  print $fetchdata[1]; ?></td>
        <td><?php  print $fetch[1]; ?></td>
        <td><?php  print $fetch[2]." Unit <br>($fetch[5])"; ?></td><td><?php  print $fetch[3]; ?></td>
        <td><input type="text" class="form-control" required="" name="hospital_remark" id="hospital_remark" placeholder="Hospital Remark" /></td>
        <td><select name="status" required="" class="form-control" id="status" onchange="this.form.submit();">
          <option value="">Please Select</option>
          <option value="Approved">Approved</option>
          <option value="Rejected">Rejected</option>
          </select></td>
        
        </tr>
</form>
<?php 

$i++; 
        } 
      
        
    } 

public function search_blood_for_user($BloodGroup,$City)
    {
global $database;$i=1;
$ResultSet=$database->query("SELECT * FROM `my_hospital` WHERE `mycity`='$City'");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
$fetchdata=mysqli_fetch_array($database->query("SELECT `myunit` FROM `my_hospital_blood` WHERE `myemail`='$fetch[0]' and `mybloodgroup`='$BloodGroup'"));            
if($fetchdata[0] != "") {
?>   
<form method="post" action="#">
      <tr>
        <td><?php   print $i;    ?>
        <input type="hidden" value="<?php   print $fetch[0];    ?>" name="hospital_id" />
        <input type="hidden" value="<?php   print $BloodGroup;    ?>" name="bloodgroup" />
        </td>
        <td><a target="_new" title="View Site" href="<?php print $fetch[4]; ?>"><?php  print $fetch[2]; ?></a></td>
        <td><?php  $address= $fetch[5]." , ".$fetch[6]." , ".$fetch[7] ; ?> 
        <a href="index.php?page=Google_Map&address=<?php print $address; ?>" target="_new">Google Map</a>
        </td>
        <td><?php  print $fetch[3]; ?></td><td><?php  print $fetchdata[0]; ?></td>
        <td><input type="number" class="form-control" min="0" max="<?php  print $fetchdata[0]; ?>"  name="quantity" id="quantity" required="" /></td>
        <td><input type="text" class="form-control" name="mypurpose" id="mypurpose" required="" /></td>
        <td><button type="submit" name="RequestForBlood" <?php if(!isset($_SESSION['my_blood_uidiu']))  {   ?> disabled="" title="Login For Request"<?php  }  ?> class="btn btn-danger">REQUEST</button></td>
      </tr>
</form>
<?php 

                        }
$i++; 
        } 
      
        
    } 

public function count_hospital()
    {
global $database;
$ResultSet=$database->query("SELECT count(`myemail`) FROM   ". self::$db_setable );  
$fetch=mysqli_fetch_array($ResultSet);
return $fetch[0];      
    }
public function count_receivers()
    {
global $database;
$ResultSet=$database->query("SELECT count(`myemail`) FROM   ". self::$db_fotable );  
$fetch=mysqli_fetch_array($ResultSet);
return $fetch[0];      
    }
public function search_blood()
    {
global $database;
$ResultSet=$database->query("SELECT `Blood_Groups` FROM ". self::$db_ftable ." order by `Blood_Groups`");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
?>
<option value="<?php   print $fetch[0];  ?>" ><?php   print $fetch[0];  ?></option>
<?php  
        } 
      
        
    }
public function search_city()
    {
global $database;
$ResultSet=$database->query("SELECT DISTINCT(`mycity`) FROM  ". self::$db_setable ." order by `mycity`");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
?>
<option value="<?php   print $fetch[0];  ?>" ><?php   print $fetch[0];  ?></option>
<?php  
        } 
      
        
    }
public function cities()
    {
global $database;
$ResultSet=$database->query("SELECT DISTINCT(`mycity`) FROM  ". self::$db_setable ." order by `mycity`");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
?>
<p > <?php  print $fetch[0];    ?> </p>
<?php  
        } 
      
        
    }         
public function search_available_blood($uid)
    {
global $database;
$ResultSet=$database->query("SELECT * FROM ". self::$db_thtable ."  WHERE `myemail`='$uid'  order by `mybloodgroup`");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
?>   <form method="post" action="#">
      <tr>
        <td><?php   print $fetch[2];    ?>
        <input type="hidden" value="<?php   print $fetch[2];    ?>" name="bgroup" />
        </td>
        <td><input type="number"  value="<?php   print $fetch[3];    ?>" min="0" required="" name="unit" id="unit" /> | 
        <button type="submit" name="updateblood" value="Update" class="btn btn-success">Update</button>  | 
        <button type="submit" name="updateblood" value="Delete" class="btn btn-danger">Delete</button>
        </td>
      </tr>
      </form>
<?php  
        } 
      
        
    }    
public function search_remain_blood($uid)
    {
global $database;
$ResultSet=$database->query("SELECT `Blood_Groups` FROM ". self::$db_ftable ." WHERE `Blood_Groups` 
not in (SELECT `mybloodgroup` FROM ". self::$db_thtable ." WHERE `myemail`='$uid')");  
while($fetch=mysqli_fetch_array($ResultSet))
        {
?>
<option value="<?php   print $fetch[0];  ?>" ><?php   print $fetch[0];  ?></option>
<?php  
        } 
      
        
    }
 

public function update_blood($unit,$uid,$bgroup,$type)
    {
global $database;
if($type=="Update"){
$sql="update ". self::$db_thtable ." set `myunit`='$unit' where `myemail`='$uid' and `mybloodgroup`='$bgroup'";
                   }
else if($type=="Delete")  
                    {
$sql="delete from ". self::$db_thtable ." where `myemail`='$uid' and `mybloodgroup`='$bgroup'";    
                    }                                       
$ResultSet=$database->query($sql);
echo"<script>location.href='index.php?page=Hospital_Home';</script>";                 
    }
public function update_by_hospital($myremark,$mystatus,$remark_date,$cnt)
    {
global $database;
$sql="update ". self::$db_fitable ." set `myremark`='$myremark', `mystatus`='$mystatus', `remark_date`='$remark_date'
  where `cnt`='$cnt'";
$ResultSet=$database->query($sql);      
    
    } 
public function find_query_by_id($sql)
    {
global $database;
$ResultSet=$database->query($sql);  
return $database->count_rows($ResultSet);      
        
    }
        
public function search_name($uid,$user)
        {
global $database;            
if($user == "HOSPITAL"){
$sql="SELECT `myname` FROM  ". self::$db_setable ." WHERE `myemail` ='$uid'";
                        }
else
                    {
$sql="SELECT `myname` FROM  ". self::$db_fotable ." WHERE `myemail` ='$uid'";   
                    }                                         
$ResultSet=$database->query($sql);
$fetch=mysqli_fetch_array($ResultSet);
return $fetch[0];   
        }    
    
    
    
public function search_by_id($uid)
        {
global $database;            
$sql="SELECT count(*) FROM ((SELECT `myemail` as email FROM ". self::$db_setable ." as t1) UNION 
(SELECT `myemail` as email FROM ". self::$db_fotable ." as t2))
 as t3 WHERE email ='$uid'";  
$ResultSet=$database->query($sql);
$fetch=mysqli_fetch_array($ResultSet);
return $fetch[0];   
        }
public function add_blood()
		{		  
global $database;
$properties=$this->clean_properties(self::$db_thtable_fields);
$sql="insert into ". self::$db_thtable ."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";
if($database->query($sql))
			{		
return true;		
			}
else
			{
return false;	
			}		

		}
          
public function create_blood_request()
		{		  
global $database;	
$properties=$this->clean_properties(self::$db_fitable_fields);
$sql="insert into ". self::$db_fitable ."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";
if($database->query($sql))
			{		
return true;		
			}
else
			{
return false;	
			}		

		}               
public function create_receiver()
		{		  
global $database;	
$properties=$this->clean_properties(self::$db_fotable_fields);
$sql="insert into ". self::$db_fotable ."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";
if($database->query($sql))
			{		
return true;		
			}
else
			{
return false;	
			}		

		}        
public function create_hospital()
		{		  
global $database;global $session;	
$properties=$this->clean_properties(self::$db_setable_fields);
$sql="insert into ". self::$db_setable ."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";
if($database->query($sql))
			{		
return true;		
			}
else
			{
return false;	
			}		

		}
protected function clean_properties($fdb_ftable_fields)
	{
global $database;
$clean_properties=array();	
foreach($this->properties($fdb_ftable_fields) as $key=>$value)
			{	
$clean_properties[$key]= $database->escape_string($value);	
			}		
return $clean_properties;		
	
	}        
protected function properties($fdb_ftable_fields)
		{
$properties=array();
foreach($fdb_ftable_fields as $db_fields)
	{	
if(property_exists($this,$db_fields)){		
$properties[$db_fields]=$this->$db_fields;	
									 }									 
	}
return 	$properties;	
		}


	}
$Db_objects= new db_objects();	
?>