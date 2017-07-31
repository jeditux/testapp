<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $tasks
  */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>-->

<div class="jumbotron">
    <div class="container">
        <div class="shadow">
			<h3><?= __('Tasks') ?></h3>
			<div class="view-box">
			<?= $this->Html->link(__('New Task'), ['action' => 'add'], ['class' => 'btn btn-sm btn-info']) ?>
			<?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'btn btn-sm btn-info']) ?>
			<table class="table table-striped display" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th scope="col"><?= $this->Paginator->sort('id') ?></th>
						<th scope="col"><?= $this->Paginator->sort('descr') ?></th>
						<th scope="col"><?= $this->Paginator->sort('priority') ?></th>
						<th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
						<th scope="col"><?= $this->Paginator->sort('finish_date') ?></th>
						<th scope="col"><?= $this->Paginator->sort('comment') ?></th>
						<th scope="col" class="actions"><?= __('Actions') ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tasks as $task): ?>
					<tr>
						<td><?= $this->Number->format($task->id) ?></td>
						<td><?= h($task->descr) ?></td>
						<td><?= $this->Number->format($task->priority) ?></td>
						<td><?= h($task->start_date) ?></td>
						<td><?= h($task->finish_date) ?></td>
						<td><?= h($task->comment) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('View'), ['action' => 'view', $task->id], ['class' => 'btn btn-xs btn-primary view']) ?>
							<?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id], ['class' => 'btn btn-xs btn-primary edit']) ?>
							<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
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
		</div>
	</div>
</div>
