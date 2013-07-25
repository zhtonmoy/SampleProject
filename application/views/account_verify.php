<div id="login_form">
    <?php
    echo '<h1> Please verify your account:</h1>';
    echo form_open("User_Reg_Controller/verify_reg_data");
     $uname = array(
              'name'        => 'username',
              'placeholder'=>'Username',
              'value'       =>  set_value('username'),
              'maxlength'   => '100',
              'size'        => '30',
            );
        ?>
        <label for="luname">Username:</label><br/><?php echo form_input($uname);?><br/>
        <?php $upass = array(
              'name'        => 'password',
              'placeholder'=>'Password',
              'maxlength'   => '100',
              'size'        => '30',
            );
        ?>
        <label for="lpass">Password:</label><br/><?php echo form_password($upass);?><br/>
    <?php $ver_c = array(
              'name'        => 'ver_code',
              'placeholder' => 'Verification Code',
              'maxlength'   => '100',
              'size'        => '30',
            );
        ?>
        <label for="lvcode">Verification Code:</label><br/><?php echo form_password($ver_c);?><br/>
    <?php
    echo '<br/>';
    echo form_submit('submit','Submit');
    ?>
</div>

