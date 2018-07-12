
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> BLOOD BANK SYSTEM </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php
        if(isset($_SESSION['my_blood_user']))  {
        if($_SESSION['my_blood_user']== "HOSPITAL")
        {

        ?>
        <ul class="navbar-nav ml-auto">
            <li <?php if(@$_GET['page']=="Hospital_Home") { ?> class="nav-item active" <?php } else { ?>  class="nav-item" <?php } ?> >
              <a class="nav-link" href="index.php?page=Hospital_Home"><i class="glyphicon glyphicon-home">
              </i> <?php print $Db_objects->search_name($_SESSION['my_blood_uidiu'],$_SESSION['my_blood_user']);     ?> 
              </a>
            </li>
            <li <?php if(@$_GET['page']=="Blood_Request") { ?> class="nav-item active" <?php } else { ?>  
            class="nav-item" <?php } ?> >
              <a class="nav-link" href="index.php?page=Blood_Request"><i class="glyphicon glyphicon-heart">
              </i> PENDING REQUESTS
              </a>
            </li>
            <li <?php if(@$_GET['page']=="Processed_Request") { ?> class="nav-item active" <?php } else { ?>  
            class="nav-item" <?php } ?> >
              <a class="nav-link" href="index.php?page=Processed_Request"><i class="glyphicon glyphicon-heart">
              </i> PROCESSED REQUESTS
              </a>
            </li>
            <li <?php if(@$_GET['page']=="ABOUT") { ?> class="nav-item active" <?php } else { ?>  class="nav-item" <?php } ?> class="nav-item">
              <a class="nav-link" href="index.php?page=ABOUT"><i class="glyphicon glyphicon-book"></i> ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=logout"  ><i class="glyphicon glyphicon-log-out">
              </i> LOGOUT</a>
            </li>
          </ul>
        <?php
        }
        else
        {
        ?>
          <ul class="navbar-nav ml-auto">
            <li <?php if(@$_GET['page']=="Receiver_Home") { ?> class="nav-item active" <?php } else { ?>  class="nav-item" <?php } ?> >
              <a class="nav-link" href="index.php?page=Receiver_Home"><i class="glyphicon glyphicon-home">
              </i> <?php print $Db_objects->search_name($_SESSION['my_blood_uidiu'],$_SESSION['my_blood_user']);     ?> 
              </a>
            </li>
            <li <?php if(@$_GET['page']=="Request_Status") { ?> class="nav-item active" <?php } else { ?>  class="nav-item" <?php } ?> class="nav-item">
              <a class="nav-link" href="index.php?page=Request_Status"><i class="glyphicon glyphicon-book"></i> Request Status</a>
            </li>
            <li <?php if(@$_GET['page']=="ABOUT") { ?> class="nav-item active" <?php } else { ?>  class="nav-item" <?php } ?> class="nav-item">
              <a class="nav-link" href="index.php?page=ABOUT"><i class="glyphicon glyphicon-book"></i> ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=logout"  ><i class="glyphicon glyphicon-log-out">
              </i> LOGOUT</a>
            </li>
          </ul>
         <?php
         }
                }
         else
        {
        ?>
          <ul class="navbar-nav ml-auto">
            <li <?php  if(@$_GET['page']=="HOME" or !isset($_GET['page'])   ) { ?> class="nav-item active" <?php } else { ?>  class="nav-item" <?php } ?> >
              <a class="nav-link" href="index.php?page=HOME"><i class="glyphicon glyphicon-home"></i> HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li <?php if(@$_GET['page']=="ABOUT") { ?> class="nav-item active" <?php } else { ?>  class="nav-item" <?php } ?> class="nav-item">
              <a class="nav-link" href="index.php?page=ABOUT"><i class="glyphicon glyphicon-book"></i> ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-user"></i> HOSPITAL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal1" ><i class="glyphicon glyphicon-user"></i> RECEIVER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-log-in"></i>  LOGIN</a>
            </li>
          </ul>
         <?php
         }
         ?> 
        </div>
      </div>
    </nav>
   
   
   <!-- Modal For HOSPITAL-->
    
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">REGISTRATION FORM ( FOR HOSPITAL )</h4>
      </div>
      <div class="modal-body">
        <?php
        require_once('Hospital_Registration.php');
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal For RECEIVER-->
    
    <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">REGISTRATION FORM ( FOR RECEIVER )</h4>
      </div>
      <div class="modal-body">
        <?php
        require_once('Receiver_Registration.php');
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal For LOGIN-->
    
    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #B60C2E; color:white;" >
          <h4><span class="glyphicon glyphicon-log-in"></span> LOGIN</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
           <?php
            require_once('login.php');
           ?>
        </div>
   
      </div>
      
    </div>
  </div> 