<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BLOOD BANK SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

  </head>

  <body>
   
    
    <?php 
    require_once('http/init.php'); 
    require_once('http/route.php');

    ?>
     <?php 
    
    if(isset($_POST['hospital_submit']))
        {  
    $Db_objects->myemail=trim($_POST['email1']);        
    if($Db_objects->search_by_id($Db_objects->myemail) == 0)    {        
    $Db_objects->mypassword=trim($_POST['pwd1']); $Db_objects->myname=trim($_POST['name']); 
    $Db_objects->mycontact=trim($_POST['cnum1']); $Db_objects->myurl=trim($_POST['url']); $Db_objects->mystreet=trim($_POST['street']); 
    $Db_objects->mylandmark=trim($_POST['landmark']); $Db_objects->mycity=trim($_POST['city']); $Db_objects->created_at=@date('Y-m-d');
    $Db_objects->myflag=1;             
    $Db_objects->create_hospital();
    $session->login($Db_objects->myemail,"HOSPITAL");    
    echo"<script>location.href='index.php?page=Hospital_Home';</script>"; 
                                                                }
                                                                else
                                                                {
    echo"<script>alert('Email Id is already Exist.');location.href='index.php?page=Home';</script>";                                                              
                                                                }
        }
    else if(isset($_POST['receiver_submit']))
        {  
            
    $Db_objects->myemail=trim($_POST['email1']); 
         
    if($Db_objects->search_by_id($Db_objects->myemail) == 0)    {  
        
    $Db_objects->mypassword=trim($_POST['pwd1']); $Db_objects->myname=trim($_POST['name']); 
    $Db_objects->mycontact=trim($_POST['cnum1']); $Db_objects->mybloodgroup=trim($_POST['blood']); 
    $Db_objects->mypurpose=trim($_POST['breq']); 
    $Db_objects->mystreet=trim($_POST['add1']); $Db_objects->mycity=trim($_POST['city']); 
    $Db_objects->created_at=@date('Y-m-d');
    $Db_objects->myflag=1;             
    $Db_objects->create_receiver();
    $session->login($Db_objects->myemail,"RECEIVER");    
    echo"<script>location.href='index.php?page=Receiver_Home';</script>"; 
                                                                }
                                                                else
                                                                {

   echo"<script>alert('Email Id is already Exist.');location.href='index.php?page=Home';</script>";                                                              
                                                                }
        }
     else if(isset($_POST['login']))
        {     
    if($user->varify_user(trim($_POST['usrname']),trim($_POST['psw']),trim($_POST['user'])) == 1)    {   
    $session->login(trim($_POST['usrname']),trim($_POST['user']));
    if($_POST['user'] == "RECEIVER")    {   
    echo"<script>location.href='index.php?page=Receiver_Home';</script>"; 
                                         }
                                         else
                                        {
     echo"<script>location.href='index.php?page=Hospital_Home';</script>";                                       
                                        } 
                                                                }
                                                                else
                                                                {
     echo"<script>alert('You are not registered with us. Please sign up.');</script>";                                                              
                                                                }
        }    
    else if(isset($_POST['RequestForBlood']))
        {        
          $Db_objects->hopitalid=$_POST['hospital_id'];$Db_objects->myunit=$_POST['quantity'];
          $Db_objects->mystatus="PENDING";$Db_objects->post=date('Y-m-d');$Db_objects->mypurpose=trim($_POST['mypurpose']);
          $Db_objects->mybloodgroup=$_POST['bloodgroup'];$Db_objects->receiverid=$_SESSION['my_blood_uidiu'];
          $Db_objects->create_blood_request();
          echo"<script>location.href='index.php?page=Request_Status';</script>"; 
        }
     else if(isset($_POST['status']))
        {        
          $Db_objects->update_by_hospital(trim($_POST['hospital_remark']),$_POST['status'],date('Y-m-d'),$_POST['cnt']);
          echo"<script>location.href='index.php?page=Blood_Request';</script>"; 
           
        }   
        
    ?>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
