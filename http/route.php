<?php
if(isset($_GET['page']))    {
if($_GET['page'] == "ABOUT")
            {
              
require_once('resources/views/Navigation.php');                     
require_once('resources/views/About.php');     
require_once('resources/views/MidView.php');   
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php'); 
            }
else if($_GET['page'] == "Hospital_Home")
            {
if($session->signed_in == true) {                
require_once('resources/views/Navigation.php');                     
require_once('resources/views/Hospital_Home.php');
require_once('resources/views/MidView.php');
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php');       
                                }
else
                                {
echo"<script>location.href='index.php';</script>";                                      
                                }                                
            }
else if($_GET['page'] == "Processed_Request")
            {
if($session->signed_in == true) {                 
require_once('resources/views/Navigation.php');                     
require_once('resources/views/Processed_Request.php');
require_once('resources/views/MidView.php'); 
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php');      
                                }  
            }          
else if($_GET['page'] == "Blood_Request")
            {
if($session->signed_in == true) {                 
require_once('resources/views/Navigation.php');                     
require_once('resources/views/Blood_Request.php');
require_once('resources/views/MidView.php'); 
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php');      
                                }
else
                                {
echo"<script>location.href='index.php';</script>";                                      
                                } 
            }            
else if($_GET['page'] == "Receiver_Home")
            {     
if($session->signed_in == true) {                 
require_once('resources/views/Navigation.php');      
require_once('resources/views/SearchBox.php');  
require_once('resources/views/MidView.php');   
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php');
                                }
else
                                {
echo"<script>location.href='index.php';</script>";                                      
                                }   
            }
else if($_GET['page'] == "Google_Map")
            {                     
require_once('resources/views/Navigation.php');     
require_once('resources/views/google_api.php');  
require_once('resources/views/MidView.php');   
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php');
            }             
else if($_GET['page'] == "Request_Status")
            {     
if($session->signed_in == true) {                 
require_once('resources/views/Navigation.php');      
require_once('resources/views/Request_Status.php');  
require_once('resources/views/MidView.php');   
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php');
                                }
else
                                {
echo"<script>location.href='index.php';</script>";                                      
                                }   
            }                                       
else if($_GET['page'] == "logout")
            {
              
$session->logout();
            }
else
            {
require_once('resources/views/Navigation.php');     
require_once('resources/views/main_header.php'); 
require_once('resources/views/SearchBox.php');  
require_once('resources/views/MidView.php');   
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php');   
    
            }            
      
                    }
else 
        {
require_once('resources/views/Navigation.php');     
require_once('resources/views/main_header.php'); 
require_once('resources/views/SearchBox.php');  
require_once('resources/views/MidView.php');   
require_once('resources/views/BottomView.php'); 
require_once('resources/views/main_footer.php');     
    
        }

?>