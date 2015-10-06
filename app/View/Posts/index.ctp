<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<br><br>               
   
<h1 class="page-header">Posts</h1>

<div class"col-md-6">
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Topic ID</th>
    </tr>

    <?php $counter = 1; ?>
    <?php foreach ($posts as $post): ?>

    <tr>
		<td><?php echo $this->Html->link ($counter, array('controller' => 'posts','action' => 'view',  $post['Post']['id']), array('class' => 'btn btn-link')); ?></td>

        <td><?php echo $this->Html->link ($post['Topic']['title'], array('controller' => 'posts','action' => 'view', $post['Post']['id']), array('class' => 'btn btn-link')); ?></td>
    </tr>
    <?php $counter++; ?>
    <?php endforeach; ?>
	<?php unset($post);?>
</table>
</div>

</div><!-- /col-lg-12-->
</div><!-- /row-->
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->