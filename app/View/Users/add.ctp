<!--div class="users form"</div>-->
<?php echo $this->Form->create('User'); ?>
<br><br>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username', array('class' => 'form-control'));
		echo $this->Form->input('password', array('class' => 'form-control'));
		echo $this->Form->input('full_name', array('class' => 'form-control'));
		//echo $this->Form->input('role');
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(__('Submit')); ?>
