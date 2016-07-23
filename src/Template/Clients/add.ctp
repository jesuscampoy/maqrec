<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Donations'), ['controller' => 'Donations', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Donation'), ['controller' => 'Donations', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Loans'), ['controller' => 'Loans', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Loan'), ['controller' => 'Loans', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Refunds'), ['controller' => 'Refunds', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Refund'), ['controller' => 'Refunds', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Donations'), ['controller' => 'Donations', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Donation'), ['controller' => 'Donations', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Loans'), ['controller' => 'Loans', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Loan'), ['controller' => 'Loans', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Refunds'), ['controller' => 'Refunds', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Refund'), ['controller' => 'Refunds', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($client); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Client']) ?></legend>
    <?php
    echo $this->Form->input('name');
    echo $this->Form->input('area_id', ['options' => $areas]);
    echo $this->Form->input('user_id', ['options' => $users]);
    echo $this->Form->input('contract_end', array('class' => 'datepicker', 'type' => 'text'));
    echo $this->Form->input('contact_name');
    echo $this->Form->input('address');
    echo $this->Form->input('telephone');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>

<?= $this->element('datepicker-js') ?>