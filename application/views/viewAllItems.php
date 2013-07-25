<div class="reg_form">
    
    <?php
    $rec=$this->session->userdata('allRec');
    $i=0;
    foreach($rec->result() as $v){
      $imgs=$v->image_thumbs;
      $image_path=$v->image;
      echo '<pre>Product Name: '.$v->productName.'<br>';
      echo 'Title       : '.$v->title.'<br>';
      echo 'Description : '.$v->description.'<br>';
      echo 'Contact     : <a href=mailto:'.$v->contact.'>'.$v->contact.'</a><br>';
      echo 'Price       :$ '.$v->price.'<br>';
      echo 'Posted On   : '.$v->created_on.'<br>';
      echo 'Image       : Click on image to expand<br><a href='.$image_path.'><img src='.$imgs.'></a></pre>';
      $i=$i+1;
      echo '<hr>';
    }
    if($i==0){echo 'No item found..';}
    ?>
</div>
