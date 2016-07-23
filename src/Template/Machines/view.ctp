<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Machine'), ['action' => 'edit', $machine->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Machine'), ['action' => 'delete', $machine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id)]) ?> </li>
<li><?= $this->Html->link(__('List Machines'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Machine'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Machine'), ['action' => 'edit', $machine->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Machine'), ['action' => 'delete', $machine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id)]) ?> </li>
<li><?= $this->Html->link(__('List Machines'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Machine'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($machine->model) . " - " . h($machine->registration) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Client') ?></td>
            <td><?= $machine->has('client') ? $this->Html->link($machine->client->name, ['controller' => 'Clients', 'action' => 'view', $machine->client->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Model') ?></td>
            <td><?= h($machine->model) ?></td>
        </tr>
        <tr>
            <td><?= __('Registration') ?></td>
            <td><?= h($machine->registration) ?></td>
        </tr>
        <tr>
            <td><?= __('Init Inputs') ?></td>
            <td><?= $this->Number->format($machine->init_inputs) ?></td>
        </tr>
        <tr>
            <td><?= __('Init Outputs') ?></td>
            <td><?= $this->Number->format($machine->init_outputs) ?></td>
        </tr>
        <tr>
            <td><?= __('Taxes') ?></td>
            <td><?= $this->Number->format($machine->taxes) ?></td>
        </tr>
        <tr>
            <td><?= __('Gain') ?></td>
            <td><?= $this->Number->format($machine->gain) ?></td>
        </tr>
        <tr>
            <td><?= __('Coin') ?></td>
            <td><?= $this->Number->format($machine->coin) ?></td>
        </tr>
        <tr>
            <td><?= __('Tolva') ?></td>
            <td><?= $this->Number->format($machine->tolva) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($machine->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($machine->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Active') ?></td>
            <td><?= $machine->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Collections') ?></h3>
    </div>
    <?php if (!empty($machine->collections)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Client Id') ?></th>
                <th><?= __('Machine Id') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Inputs') ?></th>
                <th><?= __('Outputs') ?></th>
                <th><?= __('Bruto Recaudado') ?></th>
                <th><?= __('Tolva') ?></th>
                <th><?= __('Donation') ?></th>
                <th><?= __('Comments') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($machine->collections as $collections): ?>
                <tr>
                    <td><?= h($collections->id) ?></td>
                    <td><?= h($collections->client_id) ?></td>
                    <td><?= h($collections->machine_id) ?></td>
                    <td><?= h($collections->date) ?></td>
                    <td><?= h($collections->inputs) ?></td>
                    <td><?= h($collections->outputs) ?></td>
                    <td><?= h($collections->bruto_recaudado) ?></td>
                    <td><?= h($collections->tolva) ?></td>
                    <td><?= h($collections->donation) ?></td>
                    <td><?= h($collections->comments) ?></td>
                    <td><?= h($collections->created) ?></td>
                    <td><?= h($collections->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Collections', 'action' => 'view', $collections->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Collections', 'action' => 'edit', $collections->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Collections', 'action' => 'delete', $collections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collections->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Collections</p>
    <?php endif; ?>
</div>
