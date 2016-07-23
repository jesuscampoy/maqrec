<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $census->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $census->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Censuses'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $census->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $census->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Censuses'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($census); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Census']) ?></legend>
    <?php
    echo $this->Form->input('area_id', ['options' => $areas]);
    echo $this->Form->input('name');
    echo $this->Form->input('contact_name');
    echo $this->Form->input('address');
    echo $this->Form->input('telephone');
    echo $this->Form->input('number_of_machines');
    echo $this->Form->input('current_provider');
    echo $this->Form->input('contract_end');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
