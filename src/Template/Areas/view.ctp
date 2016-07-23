<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]) ?> </li>
<li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Censuses'), ['controller' => 'Censuses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Census'), ['controller' => 'Censuses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]) ?> </li>
<li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Censuses'), ['controller' => 'Censuses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Census'), ['controller' => 'Censuses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($area->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($area->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($area->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Clients') ?></h3>
    </div>
    <?php if (!empty($area->clients)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Name') ?></th>
                <th><?= __('Contact Name') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Telephone') ?></th>
                <th><?= __('Contract End') ?></th>
                <th><?= __('User') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($area->clients as $clients): ?>
                <tr>
                    <td><?= h($clients->name) ?></td>
                    <td><?= h($clients->contact_name) ?></td>
                    <td><?= h($clients->address) ?></td>
                    <td><?= h($clients->telephone) ?></td>
                    <td><?= h($clients->contract_end) ?></td>
                    <td><?= h($clients->user_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Clients', 'action' => 'view', $clients->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Clients', 'action' => 'edit', $clients->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->name), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Clients</p>
    <?php endif; ?>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Censuses') ?></h3>
    </div>
    <?php if (!empty($area->censuses)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Name') ?></th>
                <th><?= __('Contact Name') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Telephone') ?></th>
                <th><?= __('Number Of Machines') ?></th>
                <th><?= __('Current Provider') ?></th>
                <th><?= __('Contract End') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($area->censuses as $censuses): ?>
                <tr>
                    <td><?= h($censuses->name) ?></td>
                    <td><?= h($censuses->contact_name) ?></td>
                    <td><?= h($censuses->address) ?></td>
                    <td><?= h($censuses->telephone) ?></td>
                    <td><?= h($censuses->number_of_machines) ?></td>
                    <td><?= h($censuses->current_provider) ?></td>
                    <td><?= h($censuses->contract_end) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Censuses', 'action' => 'view', $censuses->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Censuses', 'action' => 'edit', $censuses->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Censuses', 'action' => 'delete', $censuses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $censuses->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Censuses</p>
    <?php endif; ?>
</div>

