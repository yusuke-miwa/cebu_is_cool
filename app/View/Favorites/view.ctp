<?php echo $this->Html->link('Back', array('action' => 'index')); ?>

<h1><?php echo h($favorite['Favorite']['title']); ?></h1>

<!-- <p><small>Created: <?php echo $favorite['Favorite']['created']; ?></small></p> -->
<?php echo $this->Html->link('Edit', array('action' => 'edit', $favorite['Favorite']['id'])); ?>

<p><?php echo h($favorite['Favorite']['body']); ?></p>

