<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClubState[]|\Cake\Collection\CollectionInterface $clubStates
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Club State'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clubStates index large-9 medium-8 columns content">
    <h3><?= __('Club States') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('club_state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('club_state_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('club_state_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_on') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clubStates as $clubState): ?>
            <tr>
                <td><?= $this->Number->format($clubState->club_state_id) ?></td>
                <td><?= h($clubState->club_state_name) ?></td>
                <td><?= h($clubState->club_state_code) ?></td>
                <td><?= h($clubState->status) ?></td>
                <td><?= h($clubState->created_on) ?></td>
                <td><?= h($clubState->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clubState->club_state_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clubState->club_state_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clubState->club_state_id], ['confirm' => __('Are you sure you want to delete # {0}?', $clubState->club_state_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
