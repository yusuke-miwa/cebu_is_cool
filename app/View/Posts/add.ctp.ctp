<?php echo $this->Html->link('Back', array('action' => 'index')); ?>

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array('type'=>'file'));
echo $this->Form->input('title');
echo $this->Form->input('name');
echo $this->Form->input('body', array('rows' => '10'));
echo $this->Form->input('image',array('type'=>'file','label'=>'image'));
echo $this->Form->end('Save Post');
?>

