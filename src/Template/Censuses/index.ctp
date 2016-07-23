<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Census'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('area_id'); ?></th>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th><?= $this->Paginator->sort('contact_name'); ?></th>
            <th><?= $this->Paginator->sort('address'); ?></th>
            <th><?= $this->Paginator->sort('telephone'); ?></th>
            <th><?= $this->Paginator->sort('number_of_machines'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($censuses as $census): ?>
        <tr>
            <td>
                <?= $census->has('area') ? $this->Html->link($census->area->name, ['controller' => 'Areas', 'action' => 'view', $census->area->id]) : '' ?>
            </td>
            <td><?= h($census->name) ?></td>
            <td><?= h($census->contact_name) ?></td>
            <td><?= h($census->address) ?></td>
            <td><?= $this->Number->format($census->telephone) ?></td>
            <td><?= $this->Number->format($census->number_of_machines) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $census->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $census->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $census->id], ['confirm' => __('Are you sure you want to delete # {0}?', $census->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
