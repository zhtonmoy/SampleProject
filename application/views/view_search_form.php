<div class="reg_form">
            <?php echo form_open('search_controller/search_view');?>
            <?php $search = array(
              'name'        => 'search_data',
              'placeholder'=>'Search',
              'value'       =>  set_value(''),
              'maxlength'   => '100',
              'size'        => '20',
            );
        ?>
         <label for="lsrch">Search for:</label><br/><?php echo form_input($search);?>
        <?php echo form_submit('submit', 'Search');?></div>
