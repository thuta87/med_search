<?php echo $this->Html->css('bootstrap.min.css');?>
<!-- <div class="posts view"> -->
<div class="row">	
<div class="col-md-9">
</div>
<?php	
if (!is_null($status) && $status==1)
{
?>
<div class="col-md-5">	
	<div class="row">
		<div class="col-md-2">
			<?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?>
		</div>
		<div class="col-md-2">
		<?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
		</div>
		<div class="col-md-2">
		<?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?>
		</div>
		<div class="col-md-2">
		<?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?>
		</div>
		<div class="col-md-2">
	    <?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout')); ?>
	    </div>
	</div>
</div>
<?php
}
else
{
?>	
<div class="col-md-2">
	<div class="row">
		<div class="col-md-3">
			<?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> 
		</div>
		<div class="col-md-3">
	    <?php echo $this->Html->link(__('Login'), array('controller' => 'Users', 'action' => 'login')); ?>
		</div>
	</div>
</div>
<?php
}
?>
</div>

<div class="container-fluid">

<div class="container">
<h2><?php echo h($post['Post']['brand name']); ?></h2>

	<div class="row">			
		<div class="col-sm">
			<?php echo __('ID').' : <b>'.h($post['Post']['id']) .'</b>' ; ?>
			&nbsp;
		</div>
		<div class="col-sm">
			<?php echo __('Article Code').' : <b>'.h($post['Post']['article code']) .'</b>' ; ?>
			&nbsp;
		</div>
		<div class="col-sm">		
			<?php echo __('Brand Name').' : <b>'.h($post['Post']['brand name']) .'</b>' ; ?>
			&nbsp;
		</div>
	</div>
	<div class="d-flex flex-column">
		<div class="p2">		
			<?php echo __('Generic Name').' : <p class="text-justify font-weight-bold">'. h($post['Post']['generic name']) .'</p>' ; ?>
			&nbsp;
		</div>
		<div class="p2">		
			<?php echo __('Composition').' : <p class="text-justify font-weight-bold">'. h($post['Post']['composition']) .'</p>' ; ?>
			&nbsp;
		</div>
		<div class="p2">		
			<?php echo __('Category').' : <p class="text-justify font-weight-bold">'. h($post['Post']['category']) . '</p>'; ?>
			&nbsp;
		</div>
		<div class="p2">		
			<?php echo __('Indication').' : <p class="text-justify font-weight-bold">'. h($post['Post']['indication']) . '</p>'; ?>
			&nbsp;
		</div>
		<div class="p2">
			<?php echo __('Dosage').' : <p class="text-justify font-weight-bold">'.h($post['Post']['dosage']) . '</p>'; ?>
			&nbsp;
		</div>
		<div class="p2">
			<?php echo __('Side Effect').' : <p class="text-justify font-weight-bold"> '.h($post['Post']['side effect']) . ' </p>'; ?>
			&nbsp;
		</div>
		<div class="p2">
			<?php echo __('Other Brand Name').' : <p class="text-justify font-weight-bold">'.h($post['Post']['other brand name']) . '</p>'; ?>
			&nbsp;
		</div>
	</div>

</div>	
</div>
<?php 

if (!is_null($status) && $status==1)
{
?>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout')); ?></li>
	</ul>
</div>
-->
<?php
}
?>
