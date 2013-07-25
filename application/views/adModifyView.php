<div id="login_form">
    <?php
        if($this->session->userdata('noRecExist')==TRUE){
           $this->session->set_userdata('noRecExist',FALSE);
           echo '<h5>No record found. Please input a correct Modification code</h5>';
        }elseif ($this->session->userdata('edit_suc')==TRUE) {
            $this->session->set_userdata('edit_suc',FALSE);
            echo '<h5>Your Advertisement data is updated. Modify Another:</h5>';
        }  
        else {
            echo '<h3>Please input your Ad modification code:</h3>';
        }
        
    echo form_open("SubmitAdController/checkModiCode");
    $mc = array(
              'name'        => 'mod_code',
              'placeholder'=>'Modification Code',
              'value'       =>  set_value('mod_code'),
              'maxlength'   => '15',
              'size'        => '15',
            );
        ?>
        <label for="lmod_code">Enter Modification Code:</label><br/><?php echo form_input($mc);?><br/>
    <?php    
    echo form_submit('submit','Submit');
    ?>
</div>

