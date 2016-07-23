<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
<li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
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
    <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
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
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($client->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Area') ?></td>
            <td><?= h($client->area->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Contract End') ?></td>
            <td><?= h($client->contract_end) ?></td>
        </tr>
        <tr>
            <td><?= __('Contact Name') ?></td>
            <td><?= h($client->contact_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Address') ?></td>
            <td><?= h($client->address) ?></td>
        </tr>
        <tr>
            <td><?= __('Telephone') ?></td>
            <td><?= $this->Number->format($client->telephone) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= h($client->user->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($client->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Machines') ?></h3>
    </div>
    <?php if (!empty($client->machines)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?= __('Model') ?></th>
                    <th><?= __('Registration') ?></th>
                    <th><?= __('Taxes') ?></th>
                    <th><?= __('Gain') ?></th>
                    <th><?= __('Coin') ?></th>
                    <th><?= __('Tolva') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client->machines as $machines): ?>
                    <tr>
                        <td><?= h($machines->model) ?></td>
                        <td><?= h($machines->registration) ?></td>
                        <td><?= h($machines->taxes) ?></td>
                        <td><?= h($machines->gain) ?></td>
                        <td><?= h($machines->coin) ?></td>
                        <td><?= h($machines->tolva) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('', ['controller' => 'Machines', 'action' => 'view', $machines->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                            <?= $this->Html->link('', ['controller' => 'Machines', 'action' => 'edit', $machines->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                            <?= $this->Form->postLink('', ['controller' => 'Machines', 'action' => 'delete', $machines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machines->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body"><?= __('No Related Machines') ?></p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Collections') ?></h3>
    </div>
    <?php if (!empty($client->collections)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?= __('Machine Id') ?></th>
                    <th><?= __('Date') ?></th>
                    <th><?= __('Inputs') ?></th>
                    <th><?= __('Outputs') ?></th>
                    <th><?= __('Bruto Recaudado') ?></th>
                    <th><?= __('Tolva') ?></th>
                    <th><?= __('Donation') ?></th>
                    <th><?= __('Comments') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client->collections as $collections): ?>
                    <tr>
                        <td><?= h($collections->machine_id) ?></td>
                        <td><?= h($collections->date) ?></td>
                        <td><?= h($collections->inputs) ?></td>
                        <td><?= h($collections->outputs) ?></td>
                        <td><?= h($collections->bruto_recaudado) ?></td>
                        <td><?= h($collections->tolva) ?></td>
                        <td><?= h($collections->donation) ?></td>
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
        <p class="panel-body"><?= __('No Related Collections') ?></p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Donations') ?></h3>
    </div>
    <?php if (!empty($client->donations)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <th><?= __('Date') ?></th>
                    <th><?= __('Donation Type Id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client->donations as $donations): ?>
                    <tr>
                        <td><?= h($donations->quantity) ?></td>
                        <td><?= h($donations->date) ?></td>
                        <td><?= h($donations->donation_type->title) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('', ['controller' => 'Donations', 'action' => 'view', $donations->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                            <?= $this->Html->link('', ['controller' => 'Donations', 'action' => 'edit', $donations->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                            <?= $this->Form->postLink('', ['controller' => 'Donations', 'action' => 'delete', $donations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donations->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body"><?= __('No Related Donations') ?></p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Loans') ?></h3>
    </div>
    <?php if (!empty($client->loans)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <th><?= __('Loan Date') ?></th>
                    <th><?= __('Due Date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client->loans as $loans): ?>
                    <tr>
                        <td><?= h($loans->quantity) ?></td>
                        <td><?= h($loans->loan_date) ?></td>
                        <td><?= h($loans->due_date) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('', ['controller' => 'Loans', 'action' => 'view', $loans->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                            <?= $this->Html->link('', ['controller' => 'Loans', 'action' => 'edit', $loans->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                            <?= $this->Form->postLink('', ['controller' => 'Loans', 'action' => 'delete', $loans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loans->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body"><?= __('No Related Loans') ?></p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Refunds') ?></h3>
    </div>
    <?php if (!empty($client->refunds)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <th><?= __('Date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client->refunds as $refunds): ?>
                    <tr>
                        <td><?= h($refunds->quantity) ?></td>
                        <td><?= h($refunds->date) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('', ['controller' => 'Refunds', 'action' => 'view', $refunds->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                            <?= $this->Html->link('', ['controller' => 'Refunds', 'action' => 'edit', $refunds->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                            <?= $this->Form->postLink('', ['controller' => 'Refunds', 'action' => 'delete', $refunds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refunds->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body"><? __('No Related Refunds') ?></p>
    <?php endif; ?>
</div>
