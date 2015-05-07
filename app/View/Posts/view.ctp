<div class="container">
	<div class="row">
	         <div class="col-sm-2 paddingTop20">
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="javascript:;"><?php echo $this->Html->link('<i class="glyphicon glyphicon-backward"></i> Back', array('action' => 'index', $post['Post']['id']), array('escape' => false)); ?></a></li>
                    <li><a href="javascript:;"><?php echo $this->Html->link('Blog Edit', array('action' => 'edit', $post['Post']['id'])); ?></a></li>
                    <li class="nav-divider"></li>
                    <li><a href="javascript:;"><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                </ul>
            </nav>
        </div>  

        <div class="col-md-10 blogShort">
                     <h1><?php echo h($post['Post']['title']); ?></h1>
                     <p><?php echo h($post['Post']['body']); ?></p>
        </div>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

	</div>
</div>
