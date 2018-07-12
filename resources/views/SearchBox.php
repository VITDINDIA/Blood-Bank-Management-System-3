<section class="py-5">
<?php if(!isset($_POST['search_blood'])){ ?>
      <div class="container" style="border:4px solid #B4122F;">
<center>
       <h1 style="color: #BC2332;">SEARCH BLOOD SAMPLE</h1>
       <form class="form-horizontal" action="#" method="post">
         <div class="form-group">
       <div class="col-sm-6"> 
       <label for="BloodGroup">Blood Group* <datalist id="BloodGroup">
       <select name="BloodGroup" id="BloodGroup" class="form-control">
       <?php
        $Db_objects->search_blood();  
        ?>  
        </select>
        
        </datalist>
        <input type="text" name="BloodGroup" list="BloodGroup" required="" class="form-control" />
        </label>
        </div>
        </div>
        <div class="form-group">
       <div class="col-sm-6"> 
       <label for="City">City* <datalist id="City">
       <select name="City" id="City" class="form-control">
       
       <?php
        $Db_objects->search_city();  
        ?> 
        </select>
        
        </datalist>
        <input type="text" name="City" list="City" class="form-control" required="" />
        </label>
        </div>
        </div>      
         
         <div class="form-group">
       <div class="col-sm-3"> 
       <button type="submit" name="search_blood" value="search" class="btn btn-danger btn-block">CLICK FOR SEARCH</button>
        </label>
        </div>
        </div> 
     </form>
       </center>
 </div>
 <?php              } else  { ?>
 
  <div class="container" style="border:4px solid #B4122F;">
<center>
       <h1 style="color: #BC2332;">List of Available Blood</h1>
       <h3 >City: <?php print $_POST['City'];  ?> | Blood Group: <?php print $_POST['BloodGroup'];  ?></h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Hospital Name</th>
        <th>Navigation</th>
        <th>Contact</th>
        <th>Available Quantity <br/>(In Unit)</th>
        <th>Required Quantity <br/>(In Unit)</th>
        <th>Purpose</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $Db_objects->search_blood_for_user($_POST['BloodGroup'],$_POST['City']);
    ?>
    </tbody>
  </table>      
       
</center>
</div> 
<?php                       } ?>      
    </section>      