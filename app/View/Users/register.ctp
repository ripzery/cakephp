<h1>CakePHP Registration Form</h1>

<?php
echo $this->Form->create('User', array('action' => 'register'));
echo $this->Form->input('username');
echo $this->Form->input('password', array('type' => 'password'));
echo $this->Form->input('password_confirm', array('type' => 'password'));
echo $this->Form->submit();
echo $this->Form->end();
?>
