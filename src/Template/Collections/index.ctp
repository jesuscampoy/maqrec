<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Collection'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('client_id'); ?></th>
            <th><?= $this->Paginator->sort('machine_id'); ?></th>
            <th><?= $this->Paginator->sort('date'); ?></th>
            <th><?= $this->Paginator->sort('inputs'); ?></th>
            <th><?= $this->Paginator->sort('outputs'); ?></th>
            <th><?= $this->Paginator->sort('bruto_recaudado'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($collections as $collection): ?>
        <tr>
            <td><?= h($collection->id) ?></td>
            <td>
                <?= $collection->has('client') ? $this->Html->link($collection->client->name, ['controller' => 'Clients', 'action' => 'view', $collection->client->id]) : '' ?>
            </td>
            <td>
                <?= $collection->has('machine') ? $this->Html->link($collection->machine->id, ['controller' => 'Machines', 'action' => 'view', $collection->machine->id]) : '' ?>
            </td>
            <td><?= h($collection->date) ?></td>
            <td><?= $this->Number->format($collection->inputs) ?></td>
            <td><?= $this->Number->format($collection->outputs) ?></td>
            <td><?= $this->Number->format($collection->bruto_recaudado) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $collection->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $collection->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $collection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
