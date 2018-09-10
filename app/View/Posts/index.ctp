<?php echo $this->Html->css('bootstrap.min.css');?>
<?php //echo $this->Html->javascript('jquery.js');?>
<?php //echo $this->Html->javascript('bootstrap.min.js');?>

<div class="container-fluid">
	<div class="row">
	<div class="col">
	<h2><?php //echo __('Medicines Search'); ?></h2>
	</div>

	<div class="col-2">
	<div class="card">
		<div class="row">			
			<?php
					if (!is_null($status) && $status==1)
					{
			?>
			<div class="col-6"><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></div>
	        <div class="col-6"><?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout')); ?></div>
	        <?php
	        		}
	        		else
	        		{
	        ?>
	        <div class="col-6"><?php echo $this->Html->link(__('Login'), array('controller' => 'Users', 'action' => 'login')); ?></div>
			<?php
					}
			?>	        
		</div>
	</div>

    </div>

    </div>


	<!-- Searching Section -->
    <div class="container">
    <div class="search-tab active_search_tab"></div>

    <div class="col-md-12 purple search_box">
    <?php
    echo $this->Form->create('Post', array('type' => 'get'));
    echo $this->Form->input('search', array('between'=>'<label for="search" class="main_search">Search</label><br>','label'=>false,'autofocus'));
    echo $this->Form->button('Search', array('class'=>'btn btn-success'));
    echo $this->Form->end
    ?>
    </div>
    </div>
    <!-- Searching Section -->

<?php

$str="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


if(strpos($str, 'search=') == TRUE) 
  {

?>

<div class="container">
	<div class="row">
		<div class="col-sm"><?php echo 'ID'; ?></div>
		<div class="col-sm"><?php echo 'Article Code'; ?></div>
		<div class="col-sm"><?php echo 'Brand Name'; ?></div>
		<div class="col-sm"><?php echo 'Generic Name'; ?></div>
		<div class="col-sm"><?php echo 'Composition'; ?></div>
		<div class="col-sm"><?php echo 'Category'; ?></div>
		<!--
		<div class="col-sm"><?php echo 'Indication'; ?></div>
		<div class="col-sm"><?php echo 'Dosage'; ?></div>
		<div class="col-sm"><?php echo 'Side Effect'; ?></div>
		-->
		<div class="col-sm"><?php echo 'Other Brand Name'; ?></div>
			<?php
			if (!is_null($status) && $status==1)
			{			
			?>			
			<div class="col-sm"><?php echo __('Actions'); ?></div>
			<?php
			}
			?>

	</div>	
	<?php foreach ($posts as $post): ?>		
	<a href=<?php echo "/search/posts/view/".$post['Post']['id']; ?> >	
	<div class="row">
			<div class="col-sm"><?php echo h($post['Post']['id']); ?>&nbsp;</div>
			<div class="col-sm"><?php echo h($post['Post']['article code']); ?>&nbsp;</div>
			<div class="col-sm"><?php echo h($post['Post']['brand name']); ?>&nbsp;</div>
			<div class="col-sm"><?php echo h($post['Post']['generic name']); ?>&nbsp;</div>
			<div class="col-sm"><?php echo h($post['Post']['composition']); ?>&nbsp;</div>
			<div class="col-sm"><?php echo h($post['Post']['category']); ?>&nbsp;</div>
			<!--
			<div class="col-sm"><?php echo h($post['Post']['indication']); ?>&nbsp;</div>
			<div class="col-sm"><?php echo h($post['Post']['dosage']); ?>&nbsp;</div>
			<div class="col-sm"><?php echo h($post['Post']['side effect']); ?>&nbsp;</div>
			-->
			<div class="col-sm"><?php echo h($post['Post']['other brand name']); ?>&nbsp;</div>
			<?php
			if (!is_null($status) && $status==1)
			{			
			?>
			<div class="col-sm">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
			</div>
			<?php
			}
			?>			
	
	</div>
	</a>
	<?php endforeach; ?>		
</div>
	<p>
	<?php	
	
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
<?php
}
?>
</div>

<style>
a {
	color:#000000; /*new colour*/
    text-decoration: none;
}
a span {
	color:#aaaaaa; /*originalcolour*/
}
/** 
a:visited {
    color: blue;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: red;
    background-color: transparent;
    text-decoration: none;
}
a:active {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
**/
</style>
