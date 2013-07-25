<!DOCTYPE HTML>
        <div class="reg_form">
        <h2>Feedback Form:</h2>
        <fieldset>
        <lgend>Type Feedback:</legend>
        <?php echo validation_errors('<p class="error">');?>
        <?php echo form_open('FeedbackController/checkFeedback');?>
        Email:<br/>
        <?php $emaildata=array('name'=>'email','placeholder'=>'Type your email','value'=>  set_value('email'),'size'=> '39');?>
        <?php echo form_input($emaildata);?><br/>
        Subject:<br/>
        <?php $fbsub=array('name'=>'feedsub','placeholder'=>'Type subject','value'=>  set_value('feedsub'),'size'=> '39');?>
        <?php echo form_input($fbsub);?><br/>
        
        <?php $fdtxt = array(
              'name'        => 'feedtext',
              'placeholder'=>'Type feedback',
              'value'       =>  set_value('feedtext'),
              'cols'        => '32',
              'rows'        => '10',
            );
        ?>
        <label for="lfdtxt">Feedback:</label><br><?php echo form_textarea($fdtxt);?><br/>
        <?php echo form_submit('submit', 'Send Feedback');?>
        <?php echo form_reset('reset', 'Clear');?>
        </fieldset>
        <?php echo form_close();?>
        </div>
