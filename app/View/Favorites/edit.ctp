<h1>Edit Favorite</h1>
<?php
echo $this->Form->create('Favorite');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Favorite');
?>
