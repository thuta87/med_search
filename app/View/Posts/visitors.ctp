<?php echo $this->Html->css('bootstrap.min.css');?>
<?php //echo $this->Html->javascript('jquery.js');?>
<?php //echo $this->Html->javascript('bootstrap.min.js');?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2><?php //echo __('Posts'); ?></h2>
        </div>
        <div class="col-2">
            <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $this->Html->link(__('Login'), array('controller' => 'Users', 'action' => 'login')); ?></li>
            </ul>
            </div>

        </div>
    </div>

    <!-- Searching Section -->
    <div class="container">
    <div class="search-tab active_search_tab"></div>

    <div class="col-md-12 purple search_box">
    <?php
    echo $this->Form->create('Post', array('type' => 'get'));
    echo $this->Form->input('search', array('between'=>'<label for="search" class="main_search">Search</label><br>','label'=>false));
    echo $this->Form->button('Search', array('class'=>'btn btn-success'));
    echo $this->Form->end
    ?>
    </div>
    </div>
    <!-- Searching Section -->

    <table class="table-hover">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('brand name'); ?></th>
            <th><?php echo $this->Paginator->sort('generic name'); ?></th>
            <th><?php echo $this->Paginator->sort('category'); ?></th>
            <th><?php echo $this->Paginator->sort('indication'); ?></th>
            <th><?php echo $this->Paginator->sort('dosage'); ?></th>
            <th><?php echo $this->Paginator->sort('side effect'); ?></th>
            <th><?php echo $this->Paginator->sort('other brand name'); ?></th>            
        </tr>
        </thead>
        <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['brand name']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['generic name']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['category']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['indication']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['dosage']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['side effect']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['other brand name']); ?>&nbsp;</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
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
</div>

