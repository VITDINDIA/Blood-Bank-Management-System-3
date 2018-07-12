<section class="py-5 bg-image-full" style="background-image: url('public/img/banner_down.jpg');">
<div style="height: 200px;text-align: center;" >
      <strong><label style="color: gray"><i class="glyphicon glyphicon-home"></i> Total Hospitals: <?php print $Db_objects->count_hospital(); ?></label> </strong> | 
      <strong><label style="color: gray"><i class="glyphicon glyphicon-user"></i> Total Blood Recipients: <?php print $Db_objects->count_receivers(); ?></label> </strong> 
</div>
</section>