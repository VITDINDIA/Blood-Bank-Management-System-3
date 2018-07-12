<section class="py-5">
  <div class="container" style="border:4px solid #B4122F;">
<center>
       <h1 style="color: #BC2332;">Request Status</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Hospital</th>
        <th>Navigation</th>
        <th>Contact</th>
        <th>Blood Group</th>
        <th>Applied Quantity <br/>(In Unit)</th>
        <th>Purpose</th>
        <th>Date</th>
        <th>Hospital Remark </th>
        <th>Status </th>
      </tr>
    </thead>
    <tbody>
    <?php
    $Db_objects->search_blood_Request_Status($_SESSION['my_blood_uidiu']);
    ?>
    </tbody>
  </table>      
       
</center>
</div>     
    </section>      