<div data-aos="fade-up" data-aos-duration="2000" class="cobot" id="cobot<?php echo $i+1?>">
   <div class="activity-row">
      <h2 class="headline-over-image">Year <?php echo 2017+$i;?>. Cobot <?php echo $i+1;?></h2>
      <div class="activity-img">
         <img onclick="modalImgClicked('<?php echo $img[$i];?>', '<?php echo $imgDescriptions[$i];?>')" class="img"
            src="public/img/<?php echo $img[$i]?>" alt="Activity Image">
      </div>
      <div class="activity-body">
         <h2 class="headline-over-body">Year <?php echo 2017+$i;?>. Cobot <?php echo $i+1;?></h2>
         <p><?php echo $activityBody[$i]?></p>
      </div>
   </div>
</div>