<!DOCTYPE HTML>
<!--<html>
    <head>
        <title>Forum Login System</title>
    </head>
    <body>
        <h1>Login:</h1>
        <?//php echo validation_errors();?>//This code is working
        <?//php echo form_open('index.php/LoginController/checkLogin');?>
        User Name:<br/>
        <input type="text" name="username" size="30"/></br>
        Password:<br/>
        <input type="text" name="password" size="30"/>
        <input type="submit" value="Login" name="login"/>
        </form>
    </body>
</html>-->
<div id="login_form">
    <?php
    if($this->session->userdata('login_ex')){
        echo '<h3>You are not logged in or your session is expired.Please login again:</h3>';
        $this->session->set_userdata('login_ex',FALSE);
    }
    echo '<h1> Please Login:</h1>';
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
