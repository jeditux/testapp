<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="tasks form large-9 medium-8 columns content">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= __('Edit Task') ?></legend>
        <?php
            echo $this->Form->control('descr');
            echo $this->Form->control('priority');
            echo $this->Form->control('start_date');
            echo $this->Form->control('finish_date');
            echo $this->Form->control('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
	<?= $this->Html->link(__('Return'), ['action' => 'index'], ['class' => 'button']) ?>
    <?= $this->Form->end() ?>
</div>
