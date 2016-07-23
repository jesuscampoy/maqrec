<?php
/* @var $this \Cake\View\View */
use Cake\Routing\Router;

$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Client'), ['action' => 'add']); ?></li>
    <?= $this->element('default-nav-sidebar') ?>

<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<?= $this->element('delete-modal'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th><?= $this->Paginator->sort('contact_name'); ?></th>
            <th><?= $this->Paginator->sort('contract_end'); ?></th>
            <th><?= $this->Paginator->sort('telephone'); ?></th>
            <th><?= $this->Paginator->sort('area_id'); ?></th>
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clients as $client): ?>
        <tr>
            <td><?= h($client->name) ?></td>
            <td><?= h($client->contact_name) ?></td>
            <td><?= h($client->contract_end) ?></td>
            <td><?= $this->Number->format($client->telephone) ?></td>
            <td><?= $client->has('area') ? h($client->area->name) : '' ?></td>
            <td><?= $client->has('user') ? h($client->user->name) : '' ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $client->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $client->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Html->link('', ['action' => '#'], ['title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash', 
                    'escape' => false, 'data-toggle'=> 'modal', 'data-target' => '#confirmDelete', 
                    'data-action' => Router::url(array('action'=>'delete', $client->id)), 
                    'data-name' => $client->name]) ?>
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

<?= $this->element('delete-modal-js', array("title" => __('Confirm deletion'))); ?>