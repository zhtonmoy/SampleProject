<?php
/*include_once ('header1.php');
include_once ('navbar.php');
    echo '<p>Atlanta Bazaar Blog</p>';
    
    
       
       
       foreach ($rows as $r) {
       echo '<h4>'.$r->title.'</h5><br/>';
       echo '<h5> By:'.$r->author.'</h5><br/>';
       echo '<h6>'.$r->contents.'</h5><br/>';
        }
    
        
        
 include_once ('footer.php');*/

 ?>
<!doctype html>
<div class="reg_form">
<html>
    <head>
        <title>Blog data</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/pagiStyle.css" type="text/css">
        </head>
        <body>
            <div id="container">
             <?php echo $this->table->generate($records);?>
             <?php echo $this->pagination->create_links();?>
                </div>
            </body>
    </html>
    </div>
