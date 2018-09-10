<?php echo $this->Html->css('bootstrap.min.css');?>
<?php //echo $this->Html->javascript('jquery.js');?>
<?php //echo $this->Html->javascript('bootstrap.min.js');?>
<div class="container-fluid">
<div class="row">
	<div class="col">

	</div>
	<div class="col-2">
		<div class="card">
			<div class="row">
				<div class="col-6"><?php echo $this->Html->link(__('Listing'), array('action' => 'index')); ?></div>
	        	<div class="col-6"><?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout')); ?></div>
	        </div>
	    </div>
	</div>
</div>
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('article code');
		echo $this->Form->input('brand name');
		echo $this->Form->input('generic name');
		echo $this->Form->input('composition');
		echo $this->Form->input('category');
		echo $this->Form->input('indication');
		echo $this->Form->input('dosage');		
		echo $this->Form->input('side effect');
		echo $this->Form->input('other brand name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

