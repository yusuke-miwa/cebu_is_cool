<?php echo $this->Html->link('Back', array('action' => 'index')); ?>

<h1>Add Favorite</h1>
<?php
echo $this->Form->create('Favorite');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('category_id');
echo $this->Form->end('Save Post');
?>
