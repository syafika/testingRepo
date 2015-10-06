<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<br><br>               
   
<h1 class="page-header">Add a new category</h1>

<?php
	echo $this->form->create('Category');
	echo $this->form->input('parent_id', array('label'=>'List of category'));
	echo $this->form->input('name', array('label'=>'Name'));
	//echo $this->form->input('id', array('label'=> false));
	echo $this->form->end('Add');
?>

</div><!-- /col-lg-12-->
</div><!-- /row-->
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->