<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('name') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
<?= $this->Html->link(__('Registration'), ['controller' => 'Users', 'action' => 'add']) ?>