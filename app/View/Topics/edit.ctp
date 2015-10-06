<?php $this->Html->css("animate.css", null, array("inline"=>false)); ?>
<?php $this->Html->css("backend.css", null, array("inline"=>false)); ?>

<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<br><br>               
   
<h1 class="page-header">Edit Topics</h1>

<?php
	echo $this->Form->Create('Topic', array('class' => 'form-horizontal'));
	echo $this->Form->input('title', array('class' => 'form-control'));
	echo $this->Form->input('visible', array('class' => 'form-control'));
	echo $this->Form->input('category_id', array('class' => 'form-control'));
	echo $this->Form->input('biography', array('label' => 'Body', 'class' => 'ckeditor'));
	echo $this->Form->input('notes', array('class' => 'form-control'));
	echo '<div class="form-group" style="margin-top: 80px;">';
	echo '<div class="col-sm-offset-6 col-sm-10">';
	echo '<div class="action-fixed-bottom animated bounceInUp">';
	echo $this->Form->submit('Save', array('class' => 'btn btn-sm btn-primary'));
	echo $this->Html->link ('Back To List', array('controller' => 'topics','action' => 'index'), array('class' => 'btn btn-sm btn-warning')); 
	echo '</div></div></div>';
?>

</div><!-- /col-lg-12-->
</div><!-- /row-->
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->