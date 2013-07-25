<div class="reg_form">
    <script type="text/javascript">

        // Wait for the page to load first
        //window.onload = function() {
        function myJsFunc(){

          //Get a reference to the link on the page
          // with an id of "mylink"
          var a = document.getElementById("mylink");
           
          //Set code to run when the link is clicked
          // by assigning a function to "onclick"
          
          a.onclick = function() {
        var y = a.getAttribute("href");
        document.write('Hello Script');
        document.write(y);
            // Your code here...

            //If you don't want the link to actually 
            // redirect the browser to another page,
            // "google.com" in our example here, then
            // return false at the end of this block.
            // Note that this also prevents event bubbling,
            // which is probably what we want here, but won't 
            // always be the case.
            //return false;
          }
        }
    </script>
    <?php
    $rec=$this->session->userdata('rec');
    $i=0;
    foreach($rec->result() as $v){
      $imgs=$v->image_thumbs;
      $image_path=$v->image;
      //$url=base_url().'DisplayAdController/viewItemDetails';
      //$altMsg="Image not available for this item";
      echo 'Product Name::'.$v->productName.'<br>';
      echo 'Title:'.$v->title.'<br>';
      echo 'Description:'.$v->description.'<br>';
      echo 'Contact:<a href=mailto:'.$v->contact.'>'.$v->contact.'</a><br>';
      echo 'Price:$'.$v->price.'<br>';
      echo 'Posted On:'.$v->created_on.'<br>';
      //$this->session->set_userdata('im_path',$image_path);
      //echo 'Image:<img src='.$imgs.' alt='.$altMsg.'>'.'<br>';
      //$this->session->set_userdata('itm',$imgs);
      echo '<a href='.$image_path.'><img src='.$imgs.'></a>';
      $i=$i+1;
      echo '<hr>';
    }
    if($i==0){echo 'No item found..';}
    ?>
</div>
