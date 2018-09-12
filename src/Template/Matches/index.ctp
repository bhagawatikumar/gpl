<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Match[]|\Cake\Collection\CollectionInterface $matches
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matches index large-9 medium-8 columns content">
    <h3><?= __('Matches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('match_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('venue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_on') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matches as $match): ?>
            <tr>
                <td><?= $this->Number->format($match->match_id) ?></td>
                <td><?= $this->Number->format($match->team_1) ?></td>
                <td><?= $this->Number->format($match->team_2) ?></td>
                <td><?= h($match->match_on) ?></td>
                <td><?= h($match->venue) ?></td>
                <td><?= h($match->status) ?></td>
                <td><?= h($match->created_on) ?></td>
                <td><?= h($match->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $match->match_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $match->match_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $match->match_id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->match_id)]) ?>
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
