<div class="reg_form">
    
    <?php
    $rec=$this->session->userdata('allRec');
    $i=0;
    foreach($rec->result() as $v){
      $imgs=$v->image_thumbs;
      $image_path=$v->image;
      echo '<pre>Event Name    : '.$v->eventName.'<br>';
      echo 'Venue         : '.$v->venue.'<br>';
      echo 'Event Details : '.$v->eventDetails.'<br>';
      echo 'Contact       : <a href=mailto:'.$v->contact.'>'.$v->contact.'</a><br>';
      echo 'Entry Fee     :$ '.$v->entryFee.'<br>';
      echo 'Posted On     : '.$v->created_on.'<br>';
      echo 'Image         : Click on image to expand<br><a href='.$image_path.'><img src='.$imgs.'></a></pre>';
      $i=$i+1;
      echo '<hr>';
    }
    if($i==0){echo 'No item found..';}
    ?>
</div>
