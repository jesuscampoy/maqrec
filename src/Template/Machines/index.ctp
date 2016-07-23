<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Machine'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('client_id'); ?></th>
            <th><?= $this->Paginator->sort('model'); ?></th>
            <th><?= $this->Paginator->sort('registration'); ?></th>
            <th><?= $this->Paginator->sort('taxes'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($machines as $machine): ?>
        <tr>
            <td>
                <?= $machine->has('client') ? $this->Html->link($machine->client->name, ['controller' => 'Clients', 'action' => 'view', $machine->client->id]) : '' ?>
            </td>
            <td><?= h($machine->model) ?></td>
            <td><?= h($machine->registration) ?></td>
            <td><?= $this->Number->format($machine->taxes) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $machine->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $machine->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $machine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
