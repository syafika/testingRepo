 <?php if(AuthComponent::user('role') == 1 || AuthComponent::user('role') == 2) : ?> 

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">cakeBlog</a>
    </div>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-dashboard"></span>&nbsp;&nbsp;&nbsp;Dashboard', array('controller' => 'topics','action' => 'index'),array('escape' => FALSE)); ?>
            </li>
            <li>
                <?php echo $this->Html->link ('<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;User', array('controller' => 'users','action' => 'index'),array('escape' => FALSE)); ?>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-triangle-right"></i>&nbsp;&nbsp;&nbsp;Topic<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <?php echo $this->Html->link ('List topic', array('controller' => 'topics','action' => 'index')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link ('Add topic', array('controller' => 'topics','action' => 'add')); ?>
                    </li>
                </ul>
            </li>
            <li>
                <?php echo $this->Html->link ('<span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Post', array('controller' => 'posts','action' => 'index'),array('escape' => FALSE)); ?>
            </li>
            <li>
               <?php echo $this->Html->link ('<span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;Logout', array('controller' => 'users','action' => 'logout'),array('escape' => FALSE)); ?>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<?php endif ?>

 <?php if(!AuthComponent::user()) : ?>

<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">cakeBlog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li>
              <?php echo $this->Html->link ('Login', array('controller' => 'users','action' => 'login')); ?>
            </li>
            <li>
              <?php echo $this->Html->link ('Register', array('controller' => 'users','action' => 'add')); ?>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php endif; ?>