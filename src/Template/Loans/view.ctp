<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Loan'), ['action' => 'edit', $loan->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Loan'), ['action' => 'delete', $loan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loan->id)]) ?> </li>
<li><?= $this->Html->link(__('List Loans'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Loan'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Loan'), ['action' => 'edit', $loan->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Loan'), ['action' => 'delete', $loan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loan->id)]) ?> </li>
<li><?= $this->Html->link(__('List Loans'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Loan'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($loan->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($loan->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Client') ?></td>
            <td><?= $loan->has('client') ? $this->Html->link($loan->client->name, ['controller' => 'Clients', 'action' => 'view', $loan->client->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Quantity') ?></td>
            <td><?= $this->Number->format($loan->quantity) ?></td>
        </tr>
        <tr>
            <td><?= __('Loan Date') ?></td>
            <td><?= h($loan->loan_date) ?></td>
        </tr>
        <tr>
            <td><?= __('Due Date') ?></td>
            <td><?= h($loan->due_date) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($loan->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($loan->modified) ?></td>
        </tr>
    </table>
</div>

