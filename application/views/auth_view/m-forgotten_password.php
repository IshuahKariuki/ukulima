<p class="title">Forgotten Password Request</p>
<br />
<p>Please enter your <b>username</b> and <b>phone number</b> so that we send you the reset password code.</p>
<?php echo $this->session->flashdata('message').'<br />'; ?>
<?php echo validation_errors(); ?>
<?php echo form_open('auth/forgotten_password'); ?>
<p><label for="phonenumber">Phone Number:</label> </p>
    <p>
    <?php
        $data_country = array('250' => '+250','251' => '+251','257' => '+257','254' => '+254',  '255' => '+255', '256' => '+256');

        echo form_dropdown('code', $data_country, '254');
    ?>
        &nbsp;
    <?php
        $data = array(
            'name' => 'phonenumber',
            'maxlength' => 9,
            'value' => set_value('phonenumber')
        );
        echo form_input($data); ?></p>
    <br />
<p><?php echo form_submit('submit', 'Login'); ?></p><br />
<?php echo form_close(''); ?>
<br /><br />
<p>Please enter your <b>username</b> and <b>the code</b> so that you reset your password.</p>
<?php echo $this->session->flashdata('message').'<br />'; ?>
<?php echo validation_errors(); ?>
<?php echo form_open('auth/forgotten_password_complete'); ?>
<p><label for="email">Username:</label> <br /><?php echo form_input(array('name' => 'username', 'class' => 'text-input')); ?></p><br />
<p><label for="code">Verification Code:</label> <br /><?php echo form_input(array('name' => 'code')); ?></p><br />
<p><?php echo form_submit('submit', 'Login'); ?></p><br />
<?php echo form_close(''); ?>