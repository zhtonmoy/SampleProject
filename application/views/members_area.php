
<div class="reg_form">
    <div class="wrapper">
    <p id="mem_op">You can perform the following operations:</p>
    <?php if($this->session->userdata('already_loggedin')==TRUE)
    {
    echo '<script>';
    echo'{';
    echo 'document.getElementById("mem_op").innerHTML=\'You are already logged in. You can perform the following operations:\';';
    echo '}';
    echo '</script>';
    }?>
    <ul>
        <li><a class="user_area" href="<?php echo base_url();?>SubmitAdController">Put an Advertisement</a></li><br><br>
        <li><a class="user_area" href="<?php echo base_url();?>SubmitAdController/modifyAdData">Change Ads data</a></li><br><br>
        <li><a class="user_area" href="<?php echo base_url();?>site/logout">Logout</a></li>
    </ul>
    </div>
</div>
