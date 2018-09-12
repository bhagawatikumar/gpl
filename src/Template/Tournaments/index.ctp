<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tournament[]|\Cake\Collection\CollectionInterface $tournaments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tournament'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tournaments index large-9 medium-8 columns content">
    <h3><?= __('Tournaments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('tournament_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tournament_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tournament_start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tournament_end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tournament_country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_on') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tournaments as $tournament): ?>
            <tr>
                <td><?= $this->Number->format($tournament->tournament_id) ?></td>
                <td><?= h($tournament->tournament_name) ?></td>
                <td><?= h($tournament->tournament_start_date) ?></td>
                <td><?= h($tournament->tournament_end_date) ?></td>
                <td><?= $tournament->has('country') ? $this->Html->link($tournament->country->country_id, ['controller' => 'Countries', 'action' => 'view', $tournament->country->country_id]) : '' ?></td>
                <td><?= h($tournament->status) ?></td>
                <td><?= h($tournament->created_on) ?></td>
                <td><?= h($tournament->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tournament->tournament_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tournament->tournament_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tournament->tournament_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tournament->tournament_id)]) ?>
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
