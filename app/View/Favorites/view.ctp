<p><?php echo $this->Html->link('Top', array('controller' => 'tops', 'action' => 'index')); ?></p>

<?php echo $this->Html->link('Favorite List', array('action' => 'index')); ?>

<h1><?php echo h($favorite['Favorite']['title']); ?></h1>

<!-- <p><small>Created: <?php echo $favorite['Favorite']['created']; ?></small></p> -->
<?php echo $this->Html->link('Edit', array('action' => 'edit', $favorite['Favorite']['id'])); ?>

<p><?php echo h($favorite['Favorite']['body']); ?></p>

