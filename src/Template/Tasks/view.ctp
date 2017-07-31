<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Task $task
  */
?>
<div class="tasks view large-9 medium-8 columns content">
    <h3><?= h($task->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descr') ?></th>
            <td><?= h($task->descr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($task->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($task->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= $this->Number->format($task->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($task->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Finish Date') ?></th>
            <td><?= h($task->finish_date) ?></td>
        </tr>
    </table>
	<?= $this->Html->link(__('Return'), ['action' => 'index'], ['class' => 'button']) ?>
</div>
