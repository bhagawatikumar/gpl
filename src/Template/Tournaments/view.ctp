<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tournament $tournament
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tournament'), ['action' => 'edit', $tournament->tournament_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tournament'), ['action' => 'delete', $tournament->tournament_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tournament->tournament_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tournaments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tournament'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tournaments view large-9 medium-8 columns content">
    <h3><?= h($tournament->tournament_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tournament Name') ?></th>
            <td><?= h($tournament->tournament_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $tournament->has('country') ? $this->Html->link($tournament->country->country_id, ['controller' => 'Countries', 'action' => 'view', $tournament->country->country_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tournament Id') ?></th>
            <td><?= $this->Number->format($tournament->tournament_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tournament Start Date') ?></th>
            <td><?= h($tournament->tournament_start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tournament End Date') ?></th>
            <td><?= h($tournament->tournament_end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($tournament->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated On') ?></th>
            <td><?= h($tournament->updated_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $tournament->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
