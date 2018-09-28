<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Match $match
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $match->match_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $match->match_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="matches form large-9 medium-8 columns content">
    <?= $this->Form->create($match) ?>
    <fieldset>
        <legend><?= __('Edit Match') ?></legend>
        <?php
            echo $this->Form->control('team_1');
            echo $this->Form->control('team_2');
            echo $this->Form->control('match_on');
            echo $this->Form->control('venue');
            echo $this->Form->control('status');
            echo $this->Form->control('created_on');
            echo $this->Form->control('updated_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
