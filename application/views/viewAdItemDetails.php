<div class="reg_form">
    <?php
    $rec=$this->session->userdata('im_path');
    $itm=$this->session->userdata('itm');
    //foreach($rec as $v){
      //$imgs=$v->image;
      //$image_path=$rec->image;
      //$url=base_url().'DisplayAdController/viewItemDetails';
     // $altMsg="Image not available for this item";
      //echo 'Category:'.$v->category.'<br>';
      //echo 'Product Name:'.$v->productName.'<br>';
      //echo 'Description:'.$v->description.'<br>';
      //echo 'Contact:'.$v->contact.'<br>';
      //echo 'Image:<img src='.$imgs.' alt='.$altMsg.'>'.'<br>';
     // $this->session->set_userdata('item',$v);
      //echo '<a href='.$url.'>Click to view details</a>';
      echo $rec;
      echo $itm.'ssss';
      //echo curPageURL();
   // }
    ?>
    <?php
function curPageURL() {
 $pageURL = 'http';
 
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
</div>