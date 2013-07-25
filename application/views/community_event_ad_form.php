<div class="reg_form">
            <h3 id='adHead'>Advertisement Information:</h2>
            <?php if($this->session->userdata('upl_ano')==TRUE) 
            {
             $this->session->set_userdata('upl_ano',FALSE);
             echo '<script>';
             echo'{';
             echo 'document.getElementById("adHead").innerHTML=\'Advertisement information has been uploaded.Upload another:\';';
             echo '}';
             echo '</script>';
            }
            ?>
        
        <fieldset>
        <lgend>Input ad details:</legend>
        
        <?php echo validation_errors('<p class="error">');?>
        <?php echo form_open_multipart('community_ad_controller/check_upload');?>
        <?php $categories = array(
              'Bangladeshi'      =>  'Bengali',
              'West Bengal'     =>  'West Bengal',
              'Indian'			=>  'Indian',
              'Srilankan'       =>  'Srilankan',
              'Pakistani'       =>  'Pakistani',
            );
        ?>
        <label for="lcategories">Community Name:</label><br/><?php echo form_dropdown('category',$categories,'Bangladeshi');?><br/>
        <?php $eventName = array(
              'name'        => 'eventName',
              'placeholder' => 'Event Name',
              'value'       =>  set_value('eventName'),
              'maxlength'   => '50',
              'size'        => '20',
            );
        ?>
        <label for="lprodName">Event Name:</label><br/><?php echo form_input($eventName);?><br/>
        <?php $venue = array(
              'name'        => 'venue',
              'placeholder' => 'Venue Name',
              'value'       =>  set_value('venue'),
              'maxlength'   => '100',
              'size'        => '20',
            );
        ?>
        <label for="ltitle">Venue:</label><br/><?php echo form_input($venue);?><br/>
        <?php $desc = array(
              'name'        => 'eventDetails',
              'placeholder'=>'Details of the event e.g date, time',
              'value'       =>  set_value('eventDetails'),
              'rows'        =>'4',
              'cols'        =>'18',
            );
        ?>
        <label for="ldescription">Event Details:</label><br/><?php echo form_textarea($desc);?><br/>
        <?php $price = array(
              'name'        => 'entryFee',
              'placeholder' => 'Entry Fee',
              'value'       =>  set_value('entryFee'),
              'maxlength'   => '100',
              'size'        => '20',
            );
        ?>
        <label for="lprice">Entry Fee $:</label><br/><?php echo form_input($price);?><br/>
        <?php $cont = array(
              'name'        => 'contact',
              'placeholder'=>'Contact for details',
              'value'       =>  set_value('contact'),
              'maxlength'   => '50',
              'size'        => '20',
            );
        ?>
        <label for="lcontact">Contact Person:</label><br/><?php echo form_input($cont);?><br/>
        <?php echo form_hidden('curDate', date(DATE_ATOM));?>
        <?php $img = array(
              'name'        => 'userfile',
            );
        ?>
        Image:<?php echo form_upload($img);?><br/>
        <?php echo form_submit('submit', 'Store Event');?>
        </fieldset>
        <?php echo form_close();?>
        </div>