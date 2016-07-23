<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $machine->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Machines'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $machine->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Machines'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($machine); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Machine']) ?></legend>
    <?php
    echo $this->Form->input('client_id', ['options' => $clients]);
    echo $this->Form->input('model');
    echo $this->Form->input('registration');
    echo $this->Form->input('init_inputs');
    echo $this->Form->input('init_outputs');
    echo $this->Form->input('taxes');
    echo $this->Form->input('gain');
    echo $this->Form->input('coin');
    echo $this->Form->input('tolva');
    echo $this->Form->input('active');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
