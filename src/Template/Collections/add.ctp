<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Collections'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Collections'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($collection); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Collection']) ?></legend>
    <?php
    echo $this->Form->input('client_id', ['options' => $clients]);
    echo $this->Form->input('machine_id', ['options' => $machines]);
    echo $this->Form->input('date');
    echo $this->Form->input('inputs');
    echo $this->Form->input('outputs');
    echo $this->Form->input('bruto_recaudado');
    echo $this->Form->input('tolva');
    echo $this->Form->input('donation');
    echo $this->Form->input('comments');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
