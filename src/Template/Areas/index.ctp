<?php
/* @var $this \Cake\View\View */
use Cake\Routing\Router;

$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Area'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Censuses'), ['controller' => 'Censuses', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Census'), ['controller' => 'Censuses', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<?= $this->element('delete-modal-js'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($areas as $area): ?>
        <tr>
            <td><?= h($area->name) ?></td>
            <td><?= h($area->created) ?></td>
            <td><?= h($area->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $area->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $area->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Html->link('', ['action' => '#'], ['title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash', 
                 'escape' => false, 'data-toggle'=> 'modal', 'data-target' => '#confirmDelete', 
                 'data-action' => Router::url(array('action'=>'delete', $area->id)), 
                 'data-name' => $area->name]) ?>
			</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>

<?= $this->element('delete-modal-js', array("title_modal" => __('Confirm deletion'))); ?>