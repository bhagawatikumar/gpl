<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClubState $clubState
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Club State'), ['action' => 'edit', $clubState->club_state_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Club State'), ['action' => 'delete', $clubState->club_state_id], ['confirm' => __('Are you sure you want to delete # {0}?', $clubState->club_state_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Club States'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club State'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clubStates view large-9 medium-8 columns content">
    <h3><?= h($clubState->club_state_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Club State Name') ?></th>
            <td><?= h($clubState->club_state_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Club State Code') ?></th>
            <td><?= h($clubState->club_state_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Club State Id') ?></th>
            <td><?= $this->Number->format($clubState->club_state_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($clubState->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated On') ?></th>
            <td><?= h($clubState->updated_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $clubState->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
