<?php $this->Html->css("signin.css", null, array("inline"=>false)); ?>

<?php

	echo $this->Form->create('User', array('class' => 'form-signin'));
	echo "<h1 class='form-signin-heading'>Log in</h1>";
	echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'username', 'required' => 'autofocus', 'label' => false));
	echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'password', 'label' => false));
	echo $this->Form->button('Login', array('class' => 'btn btn-primary btn-block login'));

?>
