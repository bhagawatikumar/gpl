<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player $player
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->player_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->player_id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->player_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="players view large-9 medium-8 columns content">
    <h3><?= h($player->player_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Player Name') ?></th>
            <td><?= h($player->player_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player Image') ?></th>
            <td><?= h($player->player_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $player->has('country') ? $this->Html->link($player->country->country_id, ['controller' => 'Countries', 'action' => 'view', $player->country->country_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player Id') ?></th>
            <td><?= $this->Number->format($player->player_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player Jersey Number') ?></th>
            <td><?= $this->Number->format($player->player_jersey_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($player->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated On') ?></th>
            <td><?= h($player->updated_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $player->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
