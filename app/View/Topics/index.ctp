
<?php if(AuthComponent::user('role') == 1 || AuthComponent::user('role') == 2) : ?> 
<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<?php endif; ?>
<br><br>               

<h1 class="page-header">Category</h2>

<?php if(AuthComponent::user('role') == 2) : ?>
    <?php 

        echo $this->Html->link ('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;Create a new category', array('controller' => 'categories','action' => 'add'), array('class' => 'btn btn-sm btn-primary', 'escape' => FALSE)); 
    ?>
<br><br>
<?php endif; ?>

<ul>
    <?php foreach($categories as $key => $value) : ?>
    <li>
    
        <?php echo $value; ?>
        <?php if(AuthComponent::user('role') == 2) : ?>

            <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$this->html->link('<span class="glyphicon glyphicon-pencil"></span>', array('controller' => 'categories','action'=>'edit', $key), array('class' => 'btn btn-xs btn-success', 'escape' => FALSE)); ?>

            <?php echo $this->Form->postLink ('<span class="glyphicon glyphicon-trash "></span>', array('controller' => 'categories','action' => 'delete', $key), array('class' => 'btn btn-xs btn-danger', 'escape' => FALSE), array('confirm' => 'Are you sure want to delete this?')); ?>

        <?php endif; ?>
        <?php echo '<p>'; ?>

    </li>
    <?php endforeach; ?>
</ul>

<br><br>

<h2>Topics</h2>

<?php 

    echo $this->Html->link ('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;Create a new topic', array('controller' => 'topics','action' => 'add'), array('class' => 'btn btn-sm btn-primary', 'escape' => FALSE));

?>

<div class"col-md-6">
<table class="table table-striped">
    <thead>
    <tr>
        <th>Title</th>
        <th>Category</th>
        <th>User</th>
		<th>Created</th>
        <th>Modified</th>
        <?php if(AuthComponent::user('role') == 2) : ?> 
        <th>Published</th>
		<th>Edit</th>
		<th>Delete</th>
        <?php endif; ?>
    </tr>
    </thead>
    <tbody>
   <?php foreach ($topics as $topic) : ?>
    <tr>

    <?php if(AuthComponent::user('role') == 2) : ?>  

        <td><?php echo $this->Html->link ($topic['Topic']['title'], array('controller' => 'topics','action' => 'view', $topic['Topic']['id']), array('class' => 'btn btn-link')); ?></td>
        <td><?php echo $topic['Category']['name']; ?></td> <!--add category-->
        <td><?php echo $topic['User']['username']; ?></td>
        
        <td><?php echo $topic['Topic']['created']; ?></td>
        <td><?php echo $topic['Topic']['modified']; ?></td>
        <?php if(AuthComponent::user('role') == 2) : ?>
            <td>
                <?php 
                    if($topic['Topic']['visible'] == 1) {
                        echo 'Yes';
                    } 
                    else {
                        echo 'No';

                }; ?>
            </td>  
             <td><?php echo $this->Html->link ('<span class="glyphicon glyphicon-pencil"></span>', array('controller' => 'topics','action' => 'edit', $topic['Topic']['id']), array('class' => 'btn btn-success', 'escape' => FALSE)); ?></td>

            <td><?php echo $this->Form->postLink ('<span class="glyphicon glyphicon-trash "></span>', array('controller' => 'topics','action' => 'delete', $topic['Topic']['id']), array('confirm' => 'Are you sure want to delete this?','class' => 'btn btn-danger', 'escape' => FALSE)); ?></td>

        <?php endif; ?>
    </tr>
    <?php endif; ?>

    <?php if(AuthComponent::user('role') == 1 || !AuthComponent::user()) : ?> 
        <?php if($topic['Topic']['visible'] == 1) : ?>

        <td><?php echo $this->Html->link ($topic['Topic']['title'], array('controller' => 'topics','action' => 'view', $topic['Topic']['id']), array('class' => 'btn btn-link')); ?></td>
        <td><?php echo $topic['Category']['name']; ?></td> <!--add category-->
        <td><?php echo $topic['User']['username']; ?></td>
        
        <td><?php echo $topic['Topic']['created']; ?></td>
        <td><?php echo $topic['Topic']['modified']; ?></td>
        <?php if(AuthComponent::user('role') == 2) : ?> 
            <td>
                <?php 
                    if($topic['Topic']['visible'] == 1) {
                        echo 'Yes';
                    } 
                    else {
                        echo 'No';

                }; ?>
            </td>  
            <td><?php echo $this->Html->link ('Edit', array('controller' => 'topics','action' => 'edit', $topic['Topic']['id']), array('class' => 'btn btn-default')); ?></td>
            <td><?php echo $this->Form->postLink ('Delete', array('controller' => 'topics','action' => 'delete', $topic['Topic']['id']), array('class' => 'btn btn-danger'), array('confirm' => 'Are you sure want to delete this?')); ?></td>
        <?php endif; ?>
    </tr>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<? unset($topic); ?>
</tbody>
</table>
</div>

<div class="pagination">
   <ul class="pagination pagination-large pull-right">
        <?php
            echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
            echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        ?>
    </ul>
</div>


</div><!-- /col-lg-12-->
</div><!-- /row-->
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->