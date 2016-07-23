<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Refund'), ['action' => 'edit', $refund->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Refund'), ['action' => 'delete', $refund->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refund->id)]) ?> </li>
<li><?= $this->Html->link(__('List Refunds'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Refund'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Refund'), ['action' => 'edit', $refund->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Refund'), ['action' => 'delete', $refund->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refund->id)]) ?> </li>
<li><?= $this->Html->link(__('List Refunds'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Refund'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($refund->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($refund->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Client') ?></td>
            <td><?= $refund->has('client') ? $this->Html->link($refund->client->name, ['controller' => 'Clients', 'action' => 'view', $refund->client->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Quantity') ?></td>
            <td><?= $this->Number->format($refund->quantity) ?></td>
        </tr>
        <tr>
            <td><?= __('Date') ?></td>
            <td><?= h($refund->date) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($refund->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($refund->modified) ?></td>
        </tr>
    </table>
</div>

