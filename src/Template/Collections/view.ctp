<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Collection'), ['action' => 'edit', $collection->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Collection'), ['action' => 'delete', $collection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id)]) ?> </li>
<li><?= $this->Html->link(__('List Collections'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Collection'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Collection'), ['action' => 'edit', $collection->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Collection'), ['action' => 'delete', $collection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id)]) ?> </li>
<li><?= $this->Html->link(__('List Collections'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Collection'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($collection->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($collection->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Client') ?></td>
            <td><?= $collection->has('client') ? $this->Html->link($collection->client->name, ['controller' => 'Clients', 'action' => 'view', $collection->client->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Machine') ?></td>
            <td><?= $collection->has('machine') ? $this->Html->link($collection->machine->id, ['controller' => 'Machines', 'action' => 'view', $collection->machine->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Inputs') ?></td>
            <td><?= $this->Number->format($collection->inputs) ?></td>
        </tr>
        <tr>
            <td><?= __('Outputs') ?></td>
            <td><?= $this->Number->format($collection->outputs) ?></td>
        </tr>
        <tr>
            <td><?= __('Bruto Recaudado') ?></td>
            <td><?= $this->Number->format($collection->bruto_recaudado) ?></td>
        </tr>
        <tr>
            <td><?= __('Tolva') ?></td>
            <td><?= $this->Number->format($collection->tolva) ?></td>
        </tr>
        <tr>
            <td><?= __('Donation') ?></td>
            <td><?= $this->Number->format($collection->donation) ?></td>
        </tr>
        <tr>
            <td><?= __('Date') ?></td>
            <td><?= h($collection->date) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($collection->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($collection->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Comments') ?></td>
            <td><?= $this->Text->autoParagraph(h($collection->comments)); ?></td>
        </tr>
    </table>
</div>

