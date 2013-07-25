        <div class="reg_form">
        <h2>Registration Form:</h2>
        
        <fieldset>
        <lgend>Personal information:</legend>
        
        <?php echo validation_errors('<p class="error">');?>
        <?php echo form_open('User_Reg_Controller/checkReg');?>
        <?php $fn = array(
              'name'        => 'firstname',
              //'id'          => 'email',
              'placeholder'=>'First Name',
              'value'       =>  set_value('lastname'),
              'maxlength'   => '100',
              'size'        => '30',
              //'style'       => 'width:50%',
            );
        ?>
        <label for="lfirstname">First Name:</label><br/><?php echo form_input($fn);?><br/>
        <?php $ln = array(
              'name'        => 'lastname',
              //'id'          => 'email',
              'placeholder'=>'Last Name',
              'value'       =>  set_value('lastname'),
              'maxlength'   => '100',
              'size'        => '30',
              //'style'       => 'width:50%',
            );
        ?>
        <label for="llastname">Last Name:</label><br/><?php echo form_input($ln);?><br/>
        <?php $emaild = array(
              'name'        => 'email',
              //'id'          => 'email',
              'placeholder'=>'Email',
              'value'       =>  set_value('email'),
              'maxlength'   => '100',
              'size'        => '30',
              //'style'       => 'width:50%',
            );
        ?>
        <label for="lemail">Email:</label><br/><?php echo form_input($emaild);?><br/>
        <?php $zcode = array(
              'name'        => 'zipcode',
              //'id'          => 'email',
              'placeholder'=>'Zip code',
              'value'       =>  set_value('zipcode'),
              'maxlength'   => '100',
              'size'        => '30',
              //'style'       => 'width:50%',
            );
        ?>
        <label for="lzcode">Zip code:</label><br/><?php echo form_input($zcode);?><br/>
        </fieldset>
        <fieldset>
        <legend>Login Info</legend>
        <?php $uname = array(
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
        <?php $cpass = array(
              'name'        => 'cpassword',
              'placeholder'=>'Confirm Password',
              'maxlength'   => '100',
              'size'        => '30',
            );
        ?>
        <label for="lcpass">Confirm Password:</label><br/><?php echo form_password($cpass);?><br/>
        <?php echo form_submit('submit', 'Create Account');?>
        </fieldset>
        <?php echo form_close();?>
        </div>

