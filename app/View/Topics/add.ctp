<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<br><br>               
   
<h1 class="page-header">Create Topics</h1>

<?php
	echo $this->Form->Create('Topic', array('class' => 'form-horizontal'));
	//echo $this->Form->input('user_id');

	echo $this->Form->input('title', array('class' => 'form-control'));
	//echo $this->Form->input('visible');

	if(AuthComponent::user('role') == 2) {
		echo $this->Form->select('visible', array('1' => 'Published', '2' => 'Hidden'), array('empty' => false));
	}

	echo $this->Form->input('biography', array('label' => 'Body', 'class' => 'ckeditor'));
	echo $this->Form->input('notes', array('type' => 'textarea', 'escape' => false,'class' => 'form-control'));
	echo '<br>';
	echo $this->Form->submit('Save Topic');
?>

</div><!-- /col-lg-12-->
</div><!-- /row-->
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->