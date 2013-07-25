<div class="reg_form">
            <h3 id='adHead'>Advertisement Information:</h2>
            <?php if($this->session->userdata('upl_ano')==TRUE) 
            {
             $this->session->set_userdata('upl_ano',FALSE);
             echo '<script>';
             echo'{';
             echo 'document.getElementById("adHead").innerHTML=\'Advertisement information has been uploaded and ad data modification code has been sent to your email.Upload another:\';';
             echo '}';
             echo '</script>';
            }
            ?>
        
        <fieldset>
        <lgend>Input ad details:</legend>
        
        <?php echo validation_errors('<p class="error">');?>
        <?php echo form_open_multipart('SubmitAdController/checkUpload');?>
        <?php $categories = array(
              'laptop'      =>  'Laptop and Accessories',
              'mobile'      =>  'Mobile and Accessories',
              'house'       =>  'House and Flats',
              'books'       =>  'Books and Magazines',
              'games'       =>  'Games',
              'homeApp'     =>  'Home Appliance',
              'jobs'        =>  'Jobs',
              'sports'      =>  'Sports',
              'tolet'       =>  'To Let',
              'tutor'       =>  'Tutor',
            );
        ?>
        <label for="lcategories">Categories:</label><br/><?php echo form_dropdown('category',$categories,'laptop');?><br/>
        <?php $prodName = array(
              'name'        => 'productName',
              'placeholder' => 'Product Name',
              'value'       =>  set_value('productName'),
              'maxlength'   => '50',
              'size'        => '20',
            );
        ?>
        <label for="lprodName">Product Name:</label><br/><?php echo form_input($prodName);?><br/>
        <?php $tit = array(
              'name'        => 'title',
              'placeholder' => 'Title of the Ad',
              'value'       =>  set_value('title'),
              'maxlength'   => '100',
              'size'        => '20',
            );
        ?>
        <label for="ltitle">Title:</label><br/><?php echo form_input($tit);?><br/>
        <?php $desc = array(
              'name'        => 'description',
              'placeholder'=>'Description',
              'value'       =>  set_value('description'),
              'rows'        =>'4',
              'cols'        =>'18',
            );
        ?>
        <label for="ldescription">Description:</label><br/><?php echo form_textarea($desc);?><br/>
        <?php $price = array(
              'name'        => 'price',
              'placeholder' => 'Title of the Ad',
              'value'       =>  set_value('price'),
              'maxlength'   => '100',
              'size'        => '20',
            );
        ?>
        <label for="lprice">Price $:</label><br/><?php echo form_input($price);?><br/>
        <?php $cont = array(
              'name'        => 'contact',
              'placeholder'=>'Contact',
              'value'       =>  set_value('contact'),
              'maxlength'   => '50',
              'size'        => '20',
            );
        ?>
        <label for="lcontact">Contact:</label><br/><?php echo form_input($cont);?><br/>
        <?php echo form_hidden('curDate', date(DATE_ATOM));?>
        <?php echo form_hidden('curTime', now());?>
        <?php $img = array(
              'name'        => 'userfile',
            );
        ?>
        Image:<?php echo form_upload($img);?><br/>
        <?php echo form_submit('submit', 'Store Ad Information');?>
        </fieldset>
        <?php echo form_close();?>
        </div>