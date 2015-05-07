<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<h1>CebuCool Blog</h1>

<?php echo $this->Html->link(
    'Create Blog',
    array('controller' => 'posts', 'action' => 'add'),
    array('class' => 'btn btn-default pull-right')
); ?>

<table>
   <!-- <tr>
        <th>Id</th>
        <th>Title</th>
	<th>Action</th>
        <th>Created</th>
    </tr> -->

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <!--  <td><?php  echo $post['Post']['id']; ?></td> -->
      <div class="row">
        <div class="col-xs-8">
            <h3><strong><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?></strong></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </div>
        <div class="col-xs-6">      
          <p>
          <?php echo h($post['Post']['body']); ?>
	  </p>
          <p><?php echo $this->Html->link('Readmore', array('action' => 'view', $post['Post']['id']), array('class' => 'btn btn-default')); ?></p>
        </div>
      </div>
        <!-- <td>
	   <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
        </td> -->
      <div class="row">
        <div class="col-xs-8">
          <p></p>
          <p>
	  <i class="fa fa-user"></i> by <?php echo $post['Post']['user_name']; ?>
          | <span><i class="fa fa-calendar"></i> <?php echo $post['Post']['created']; ?></span>
	  </p>
        </div>
      </div>
    </tr>
    <?php endforeach; ?>
</table>
