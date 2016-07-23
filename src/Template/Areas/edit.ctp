<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $area->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Censuses'), ['controller' => 'Censuses', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Census'), ['controller' => 'Censuses', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $area->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Censuses'), ['controller' => 'Censuses', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Census'), ['controller' => 'Censuses', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($area); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Area']) ?></legend>
    <?php
    echo $this->Form->input('name');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
