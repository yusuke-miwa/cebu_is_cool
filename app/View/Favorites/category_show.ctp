<p><?php echo $this->Html->link('Top', array('controller' => 'tops', 'action' => 'index')); ?></p>

<li class="active"><a href="javascript:;">
<?php echo $this->Html->link('<i class="glyphicon glyphicon-backward"></i> Back', array('action' => 'index'), array('escape' => false)); ?>
</a></li>


<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<h1><?php echo h($category_shows[0]['Category']['name']); ?> Favorite</h1>

<!-- <?php echo $this->Html->link(
    'Create Blog',
    array('controller' => 'posts', 'action' => 'add'),
    array('class' => 'btn btn-default pull-right')); ?>
 -->

<table>

   <?php foreach ($category_shows as $category_show): ?>
    <tr>
      <div class="row">
        <div class="col-xs-8">
            <h3><strong><?php echo $this->Html->link($category_show['Favorite']['title'], array('action' => 'view', $category_show['Favorite']['category_id'])); ?></strong></h3>
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
          <?php echo h($category_show['Favorite']['body']); ?>
          </p>
          <p><?php echo $this->Html->link('Readmore', array('action' => 'view', $category_show['Favorite']['category_id']), array('class' => 'btn btn-default')); ?></p>
        </div>
      </div>

<!-- <div class="row">
        <div class="col-xs-8">
          <p></p>
          <p>
          <i class="fa fa-user"></i> by <?php echo $post['Post']['user_name']; ?>
          | <span><i class="fa fa-calendar"></i> <?php echo $post['Post']['created']; ?></span>
          </p>
        </div>
      </div>
 -->

    </tr>
    <?php endforeach; ?>

</table>
