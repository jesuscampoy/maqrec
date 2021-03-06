<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $donation->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id)]
    )
    ?>
    </li>
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
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $donation->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id)]
    )
    ?>
    </li>
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
    <legend><?= __('Edit {0}', ['Donation']) ?></legend>
    <?php
    echo $this->Form->input('client_id', ['options' => $clients]);
    echo $this->Form->input('donation_type', ['options' => array("regalo", "donacion")]);
    echo $this->Form->input('quantity');
    echo $this->Form->input('date');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
