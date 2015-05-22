<p><?php echo $this->Html->link('Top', array('controller' => 'tops', 'action' => 'index')); ?></p>

<?php echo $this->Html->link('Favorite List', array('action' => 'index')); ?>

<h1>Add Favorite</h1>
<?php
echo $this->Form->create('Favorite', array('type' => 'file'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('image',array('type'=>'file','label'=>'image'));
echo $this->Form->input('category_id');
echo $this->Form->end('Save Post');
?>
