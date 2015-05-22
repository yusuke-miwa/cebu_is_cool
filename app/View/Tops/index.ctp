 


<table>
   <h2><?php echo $this->Html->link('Favorites', array('controller' => 'favorites', 'action' => 'index')); ?></h2>
    <tr>
        <th>Title</th>
        <th>Body</th>
<!--        <th>category</th> -->
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($favorites as $favorite): ?>
    <tr>
        <!-- <td><?php echo $favorite['Favorite']['id']; ?></td> -->
        <td>
            <?php echo $this->Html->link($favorite['Favorite']['title'],
array('controller' => 'favorites', 'action' => 'view', $favorite['Favorite']['id'])); ?>
        </td>
        <td><?php echo $favorite['Favorite']['body']; ?></td>
<!--        <td><?php echo $favorite['Category']['name']; ?></td> -->
    </tr>
    <?php endforeach; ?>
    <?php unset($favorite); ?>
</table>


<h2><?php echo $this->Html->link('Blogs', array('controller' => 'posts', 'action' => 'index')); ?></h2>
		   
<table>
<?php foreach ($posts as $post): ?>
    <tr>
      <!--  <td><?php  echo $post['Post']['id']; ?></td> -->
      <div class="row">
        <div class="col-xs-8">
            <h3><strong><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></strong></h3>
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
          <p><?php echo $this->Html->link('Readmore', array('controller' => 'posts', 'action' => 'view', $post['Post']['id']), array('class' => 'btn btn-default')); ?></p>
        </div>
      </div>
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
