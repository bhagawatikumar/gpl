<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->team_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->team_id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->team_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->team_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Team Name') ?></th>
            <td><?= h($team->team_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Logo') ?></th>
            <td><?= h($team->team_logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Id') ?></th>
            <td><?= $this->Number->format($team->team_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Club State') ?></th>
            <td><?= $this->Number->format($team->team_club_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($team->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated On') ?></th>
            <td><?= h($team->updated_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $team->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
