<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Donation'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List DonationTypes'), ['controller' => 'DonationTypes', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Donation Type'), ['controller' => 'DonationTypes', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('client_id'); ?></th>
            <th><?= $this->Paginator->sort('donation_type'); ?></th>
            <th><?= $this->Paginator->sort('quantity'); ?></th>
            <th><?= $this->Paginator->sort('date'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($donations as $donation): ?>
        <tr>
            <td>
                <?= $donation->has('client') ? $this->Html->link($donation->client->name, ['controller' => 'Clients', 'action' => 'view', $donation->client->id]) : '' ?>
            </td>
            <td><?= h($donation->donation_type) ?></td>
            <td><?= $this->Number->format($donation->quantity) ?></td>
            <td><?= h($donation->date) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'edit', $donation->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $donation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
