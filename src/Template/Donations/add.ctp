<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Donations'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Donation Types'), ['controller' => 'DonationTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Donation Type'), ['controller' => 'DonationTypes', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Donations'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Donation Types'), ['controller' => 'DonationTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Donation Type'), ['controller' => 'DonationTypes', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($donation); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Donation']) ?></legend>
    <?php
    echo $this->Form->input('client_id', ['options' => $clients]);
    echo $this->Form->input('donation_type', ['options' => array("regalo", "donacion")]);
    echo $this->Form->input('quantity');
    echo $this->Form->input('date');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
