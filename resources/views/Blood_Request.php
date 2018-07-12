 <section class="py-5" >
      <div class="container" >
 <div class="jumbotron" style="height: inherit;">
  <h1>Pending Blood Requests</h1> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact No.</th>
        <th>Blood Group</th>
        <th>Blood Required (Purpose)</th>
        <th>Date</th>
        <th>Remarks</th>
        <th>Submit</th>
      </tr>
    </thead>
    <tbody>
    <?php    $Db_objects->search_request_of_user($_SESSION['my_blood_uidiu']);   ?>
      
      
    </tbody>
  </table>
</div>
 
        </div>
    </section>