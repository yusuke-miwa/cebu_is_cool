 
 <div class="container"> 

<!--Video Section-->
<section class="content-section video-section">
  <div class="pattern-overlay">
  <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=48aRX_fImvo',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h1></h1>  
        <h3></h3>
     </div>
      </div>
    </div>
  </div>
</section>
<!--Video Section Ends Here-->

<table>
   <h2><?php echo $this->Html->link('Favorites', array('controller' => 'favorites', 'action' => 'index')); ?></h2>
<table>
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
