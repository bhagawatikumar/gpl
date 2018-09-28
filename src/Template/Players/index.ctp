<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player[]|\Cake\Collection\CollectionInterface $players
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="players index large-9 medium-8 columns content">
    <h3><?= __('Players') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_jersey_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_on') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player): ?>
            <tr>
                <td><?= $this->Number->format($player->player_id) ?></td>
                <td><?= h($player->player_name) ?></td>
                <td><?= h($player->player_image) ?></td>
                <td><?= $this->Number->format($player->player_jersey_number) ?></td>
                <td><?= $player->has('country') ? $this->Html->link($player->country->country_id, ['controller' => 'Countries', 'action' => 'view', $player->country->country_id]) : '' ?></td>
                <td><?= h($player->status) ?></td>
                <td><?= h($player->created_on) ?></td>
                <td><?= h($player->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $player->player_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $player->player_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $player->player_id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->player_id)]) ?>
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
