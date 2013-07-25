<div class="reg_form">
            <h3 id='adHead'>Advertisement Information:</h2>
        
        <fieldset>
        <lgend>Edit ad details:</legend>
        
        <?php echo validation_errors('<p class="error">');?>
        <?php echo form_open_multipart('SubmitAdController/checkEditedData');?>
        <?php 
        $rec=$this->session->userdata('mod_rec');
        $pcat="";
        foreach($rec->result() as $v){
           $pcat=$v->category; 
        }
        $categories = array(
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
        <label for="lcategories">Categories:</label><br/><?php echo form_dropdown('category',$categories,$pcat);?><br/>
        <?php 
        $rec=$this->session->userdata('mod_rec');
        $pn="";
        foreach($rec->result() as $v){
           $pn=$v->productName; 
        }
        $prodName = array(
              'name'        => 'productName',
              'placeholder' => 'Product Name',
              'value'       =>  $pn,
              'maxlength'   => '50',
              'size'        => '20',
            );
        ?>
        <label for="lprodName">Product Name:</label><br/><?php echo form_input($prodName);?><br/>
        <?php 
        $rec=$this->session->userdata('mod_rec');
        $pt="";
        foreach($rec->result() as $v){
           $pt=$v->title; 
        }
        $tit = array(
              'name'        => 'title',
              'placeholder' => 'Title of the Ad',
              'value'       => $pt,
              'maxlength'   => '100',
              'size'        => '20',
            );
        ?>
        <label for="ltitle">Title:</label><br/><?php echo form_input($tit);?><br/>
        <?php 
        $rec=$this->session->userdata('mod_rec');
        $pd="";
        foreach($rec->result() as $v){
           $pd=$v->description; 
        }
        $desc = array(
              'name'        => 'description',
              'placeholder'=>'Description',
              'value'       => $pd,
              'rows'        =>'4',
              'cols'        =>'18',
            );
        ?>
        <label for="ldescription">Description:</label><br/><?php echo form_textarea($desc);?><br/>
        <?php 
        $rec=$this->session->userdata('mod_rec');
        $pp="";
        foreach($rec->result() as $v){
           $pp=$v->price; 
        }
        $price = array(
              'name'        => 'price',
              'placeholder' => 'Price',
              'value'       =>  $pp,
              'maxlength'   => '100',
              'size'        => '20',
            );
        ?>
        <label for="lprice">Price $:</label><br/><?php echo form_input($price);?><br/>
        <?php 
        $rec=$this->session->userdata('mod_rec');
        $pc="";
        foreach($rec->result() as $v){
           $pc=$v->contact; 
        }
        $cont = array(
              'name'        => 'contact',
              'placeholder'=>'Contact',
              'value'       => $pc,
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
        Image:<?php 
        $rec=$this->session->userdata('mod_rec');
        $imgs='';
        foreach($rec->result() as $v){
        $imgs=$v->image_thumbs;
        $mdcd=$v->mod_code;
        }
        echo form_upload($img).'<img src='.$imgs.'>';
        echo form_hidden('mod_code', $mdcd);;
        ?><br/>

        <?php echo form_submit('submit', 'Store Ad Information');?>
        </fieldset>
        <?php echo form_close();?>
        </div>