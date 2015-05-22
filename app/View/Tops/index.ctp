 



<div class="container" align="center">
     <h1><?php echo $this->Html->link('Favorites', array('controller' => 'favorites', 'action' => 'index')); ?></h1>
     <div class="row form-group product-chooser">

          <?php //foreach ($favorites as $favorite): ?>
          <a href = "/cebu_is_cool/favorites/category_show/1"> 
	  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item selected background-white">
	  <img src="https://thecitemblog.files.wordpress.com/2015/01/mango.jpg", class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" >
		      <?php // echo  $this->Upload->uploadImage($favorite,'Favorite.image',array('style'=>'thumb')); ?>
		      <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12 background-white">
			<table>
			    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

			    <tr>
				<span class="title"><font size="6"><div align="center">
				    <?php echo $this->Html->link('Food',
			array('controller' => 'favorites', 'action' => 'category_show', $favorites[0]['Favorite']['id'])); ?>
				</div></font></span>
			<span class="description"><?php // echo $food['Favorite']['body']; ?></span></br>
				<span class="description"><?php // echo $this->Html->link($food['Category']['name'], array('controller' => 'favorites', 'action' => 'category_show', $foods[0]['Favorite']['category_id'])); ?></span>
			    </tr>
			    <?php unset($food); ?>
			</table>
                     </div>
		     <div class="clear"></div></a>
                </div>
          </div>
	  <?php //endforeach; ?>
	  

          <a href = "/cebu_is_cool/favorites/category_show/2">
	  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item selected background-white">
	  <img src="http://static.wixstatic.com/media/4668e3_e8fa7cdf84ce4f7b87061d1918c5be94.jpg_srz_4200_2800_85_22_0.50_1.20_0.00_jpg_srz", class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" >
		      <?php // echo  $this->Upload->uploadImage($favorite,'Favorite.image',array('style'=>'thumb')); ?>
		      <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12 background-white">
			<table>
			    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

			    <tr>
				<span class="title"><font size="6"><div align="center">
				    <?php echo $this->Html->link('Spot',
			array('controller' => 'favorites', 'action' => 'category_show', $spots[0]['Favorite']['id'])); ?>
				</div></font></span>
			<span class="description"><?php // echo $food['Favorite']['body']; ?></span></br>
				<span class="description"><?php // echo $this->Html->link($food['Category']['name'], array('controller' => 'favorites', 'action' => 'category_show', $foods[0]['Favorite']['category_id'])); ?></span>
			    </tr>
			    <?php unset($food); ?>
			</table>
                     </div>
		     <div class="clear"></div></a>
                </div>
          </div>
          

	  <a href = "/cebu_is_cool/favorites/category_show/3">


	  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item selected background-white">
	  <img src="http://kawasanfalls.net/wp-content/uploads/2011/04/kawasan-falls-pana-4.jpg", class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" >
		      <?php // echo  $this->Upload->uploadImage($favorite,'Favorite.image',array('style'=>'thumb')); ?>
		      <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12 backgraund-white">
			<table>
			    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

			    <tr>
				<span class="title"><font size="6"><div align="center">
				    <?php echo $this->Html->link('Activity',
			array('controller' => 'favorites', 'action' => 'category_show', $activities[0]['Favorite']['id'])); ?>
				</div></font></span>
			<span class="description"><?php // echo $food['Favorite']['body']; ?></span></br>
				<span class="description"><?php // echo $this->Html->link($food['Category']['name'], array('controller' => 'favorites', 'action' => 'category_show', $foods[0]['Favorite']['category_id'])); ?></span>
			    </tr>
			    <?php unset($food); ?>
			</table>
                     </div>
		     <div class="clear"></div>
                </div>
          </div>

    </div>
</div>


<!--
<table>
   <h2><?php echo $this->Html->link('Favorites', array('controller' => 'favorites', 'action' => 'index')); ?></h2>
    <tr>
        <th>Title</th>
        <th>Body</th>
        <th>category</th> 
    </tr>

-->

<!--    <?php foreach ($favorites as $favorite): ?>
    <tr>
        <td><?php echo $favorite['Favorite']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($favorite['Favorite']['title'],
array('controller' => 'favorites', 'action' => 'view', $favorite['Favorite']['id'])); ?>
        </td>
        <td><?php echo $favorite['Favorite']['body']; ?></td>
        <td><?php echo $favorite['Category']['name']; ?></td> 
    </tr>
    <?php endforeach; ?>
    <?php unset($favorite); ?>
</table>

-->

<div align="center">
<h2><?php echo $this->Html->link('Blogs', array('controller' => 'posts', 'action' => 'index')); ?></h2></div>
		   
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
