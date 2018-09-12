<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Match $match
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Match'), ['action' => 'edit', $match->match_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Match'), ['action' => 'delete', $match->match_id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->match_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matches view large-9 medium-8 columns content">
    <h3><?= h($match->match_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Venue') ?></th>
            <td><?= h($match->venue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match Id') ?></th>
            <td><?= $this->Number->format($match->match_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team 1') ?></th>
            <td><?= $this->Number->format($match->team_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team 2') ?></th>
            <td><?= $this->Number->format($match->team_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match On') ?></th>
            <td><?= h($match->match_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($match->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated On') ?></th>
            <td><?= h($match->updated_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $match->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
