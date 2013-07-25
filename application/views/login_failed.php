<!DOCTYPE HTML>

<div id="login_form">
    <?php
    
    echo '<h1> Wrong credentials. Please try again:</h1>';
    echo form_open("LoginController/validate_credentials");
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
    <?php
    echo '<br/>';
    echo form_submit('submit','Submit');
    echo anchor('User_Reg_Controller','Create Account');
    ?>
</div>
