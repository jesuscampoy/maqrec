<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Census'), ['action' => 'edit', $census->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Census'), ['action' => 'delete', $census->id], ['confirm' => __('Are you sure you want to delete # {0}?', $census->id)]) ?> </li>
<li><?= $this->Html->link(__('List Censuses'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Census'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Census'), ['action' => 'edit', $census->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Census'), ['action' => 'delete', $census->id], ['confirm' => __('Are you sure you want to delete # {0}?', $census->id)]) ?> </li>
<li><?= $this->Html->link(__('List Censuses'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Census'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($census->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($census->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Area') ?></td>
            <td><?= $census->has('area') ? $this->Html->link($census->area->name, ['controller' => 'Areas', 'action' => 'view', $census->area->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($census->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Contact Name') ?></td>
            <td><?= h($census->contact_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Address') ?></td>
            <td><?= h($census->address) ?></td>
        </tr>
        <tr>
            <td><?= __('Current Provider') ?></td>
            <td><?= h($census->current_provider) ?></td>
        </tr>
        <tr>
            <td><?= __('Telephone') ?></td>
            <td><?= $this->Number->format($census->telephone) ?></td>
        </tr>
        <tr>
            <td><?= __('Number Of Machines') ?></td>
            <td><?= $this->Number->format($census->number_of_machines) ?></td>
        </tr>
        <tr>
            <td><?= __('Contract End') ?></td>
            <td><?= h($census->contract_end) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($census->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($census->modified) ?></td>
        </tr>
    </table>
</div>

