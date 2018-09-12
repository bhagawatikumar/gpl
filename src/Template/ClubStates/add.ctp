<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClubState $clubState
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Club States'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clubStates form large-9 medium-8 columns content">
    <?= $this->Form->create($clubState) ?>
    <fieldset>
        <legend><?= __('Add Club State') ?></legend>
        <?php
            echo $this->Form->control('club_state_name');
            echo $this->Form->control('club_state_code');
            echo $this->Form->control('status');
            echo $this->Form->control('created_on');
            echo $this->Form->control('updated_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
