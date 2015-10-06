<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<br><br>               
   
<h1 class="page-header">Create a new post</h1>
<?php

	echo $this->Form->create('Post');
	echo $this->Form->input('body');
	echo $this->Form->end('Create Topic');

?>

</div><!-- /col-lg-12-->
</div><!-- /row-->
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->