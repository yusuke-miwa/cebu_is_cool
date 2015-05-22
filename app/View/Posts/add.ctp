
<?php echo $this->Html->link('Back', array('action' => 'index')); ?>


<h1>Add Post</h1>
<div class="container">
  <div class="row">  
      <?php
      echo $this->Form->create('Post', array('type'=>'file'));
      echo $this->Form->input('title', array('class'=>'col-sm-8', 'placeholder'=>'Title','required'=>'required', 'label'=>false));
      echo $this->Form->input('name', array('class'=>'col-sm-8', 'placeholder'=>'Name','required'=>'required', 'label'=>false));
      echo $this->Form->input('body', array('class'=>'col-sm-12', 'rows' => '20', 'placeholder'=>'Body','required'=>'required', 'label'=>false));
      echo $this->Form->input('image',array('type'=>'file','label'=>false));
      echo $this->Form->end('Save Post');
      ?>   
  </div>
</div> 

      
      
