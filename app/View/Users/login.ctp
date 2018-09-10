<?php echo $this->Html->css('bootstrap.min.css');?>
<?php //echo $this->Html->javascript('jquery.js');?>
<?php //echo $this->Html->javascript('bootstrap.min.js');?>
<div class="container-fluid">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<fieldset>
    <legend>
        <?php echo __('Please enter your username and password'); ?>
    </legend>
    <?php echo $this->Form->input('username');
    echo $this->Form->input('password');
    ?>
</fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
