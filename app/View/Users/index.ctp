<h1>Thank you for your registration! Enjoy our service!</h1>
<p>Please login here!</p>

<!-- <a href="users/login" class="btn btn-primary">login</a> -->
<?php echo $this->Html->link('login',
                             array('controller' => 'users', 'action' => 'login'),
                             array('class' => 'btn btn-success')); ?>
