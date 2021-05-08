<?php 
if($infoTable){
   echo '<ul>';
   foreach($infoTable as $infoLine){
      echo "<li>$infoLine</li>";
   }
   echo '</ul>';
}else{
   echo '<p>-</p>';
}