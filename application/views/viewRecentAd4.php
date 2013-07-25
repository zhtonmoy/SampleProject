<div class="reg_form">
    
    <?php
    $rec=$this->session->userdata('LatestRec');
    $i=0;
    foreach($rec->result() as $v){
      if($i==3){
      $image_path=$v->image;
      echo '<pre>Product Name:'.$v->productName.'<br/>';
      echo 'Title       :'.$v->title.'<br/>';
      echo 'Description :'.$v->description.'<br/>';
      echo 'Contact     :<a href=mailto:'.$v->contact.'>'.$v->contact.'</a><br/>';
      echo 'Price       :$'.$v->price.'<br/>';
      echo 'Posted On   :'.$v->created_on.'<br/>';
      echo 'Image       :<br><img src='.$image_path.'></pre></hr>';
      }
      $i=$i+1;
      if($i==4)
                    break;
    }
    if($i==0){echo 'No item found..';}
    ?>
</div>
