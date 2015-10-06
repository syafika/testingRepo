<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<br><br>               
   
<?php 
	App::import('Controller','Users');
?>

<h1 class="page-header"><?php echo $topic['Topic']['title']; ?></h1>

<?php echo $this->Html->link ('Create a post in this topic', array('controller' => 'posts','action' => 'add', $topic['Topic']['id']), array('class' => 'btn btn-sm btn-primary')); ?>

<!--<pre><?php print_r($topic)?></pre>-->

<br><br>

<div class"col-md-6">
<table class="table table-striped">

	<tr>
		<td>Sr.No</td>
		<td>User</td>
		<td>Post</td>
	</tr>
<?php
	$counter = 1;
	foreach ($topic['Post'] as $post) {

		$ucontroller = new Userscontroller;
		$uname = $ucontroller->getUsernameById($post['user_id']);
		echo "<tr><td>".$counter."</td><td>".$uname['User']['username']."</td><td>".$post['body']."</td></tr>";
		$counter++;
	}
?>
</table>
</div>

</div><!-- /col-lg-12-->
</div><!-- /row-->
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->