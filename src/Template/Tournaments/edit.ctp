<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tournament $tournament
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tournament->tournament_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tournament->tournament_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tournaments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tournaments form large-9 medium-8 columns content">
    <?= $this->Form->create($tournament) ?>
    <fieldset>
        <legend><?= __('Edit Tournament') ?></legend>
        <?php
            echo $this->Form->control('tournament_name');
            echo $this->Form->control('tournament_start_date', ['empty' => true]);
            echo $this->Form->control('tournament_end_date', ['empty' => true]);
            echo $this->Form->control('tournament_country_id', ['options' => $countries, 'empty' => true]);
            echo $this->Form->control('status');
            echo $this->Form->control('created_on');
            echo $this->Form->control('updated_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
