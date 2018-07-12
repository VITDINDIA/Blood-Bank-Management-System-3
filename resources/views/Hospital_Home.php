 <section class="py-5" >
      <div class="container" >
 <div class="jumbotron" style="height: inherit;">
  <h1>Add Blood Unit</h1> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Blood Group</th>
        <th>Unit Available</th>
      </tr>
    </thead>
    <tbody>
    <form method="post">
         <tr>
        <td>
  <select class="form-control" required="" name="blood" id="blood" > 
        <?php
        $Db_objects->search_remain_blood($_SESSION['my_blood_uidiu']);
        
        ?> 
  </select></td>
        <td><input type="number" min="0"  name="unit" id="unit" required="" /> | 
        <button type="submit" name="AddBlood" class="btn btn-danger">Add Unit</button>
        </td>
      </tr>
     </form> 
    </tbody>
  </table>
<?php
if(isset($_POST['AddBlood']))
        {  
            
    $Db_objects->mybloodgroup=trim($_POST['blood']);$Db_objects->myunit=trim($_POST['unit']);  
    $Db_objects->myemail=$_SESSION['my_blood_uidiu'];             
    $Db_objects->add_blood(); 
    echo"<script>location.href='index.php?page=Hospital_Home';</script>"; 

        }

?>  
  <br/>
 <h3>Available Unit</h3> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Blood Group</th>
        <th>Unit Available</th>
      </tr>
    </thead>
    <tbody>
    
      <?php
      $Db_objects->search_available_blood($_SESSION['my_blood_uidiu']);   
      ?>
    
      <?php
        if(isset($_POST['updateblood']))  {
      $Db_objects->update_blood(trim($_POST['unit']),$_SESSION['my_blood_uidiu'],trim($_POST['bgroup']),
      trim($_POST['updateblood']));
                                        }
      ?>
    </tbody>
  </table>
</div>
 
        </div>
    </section>