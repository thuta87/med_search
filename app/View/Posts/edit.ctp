<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout')); ?></li>
	</ul>
</div>
