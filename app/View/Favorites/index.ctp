<p><?php echo $this->Html->link('Top', array('controller' => 'tops', 'action' => 'index')); ?></p>

<?php echo $this->Html->link(
    'Add favorite',
    array('controller' => 'favorites', 'action' => 'add')
); ?>


<div class="container">
     <h1><?php echo $this->Html->link('Food', array('controller' => 'favorites', 'action' => 'category_show', $foods[0]['Favorite']['category_id'])); ?></h1>
     <div class="row form-group product-chooser">

          <?php foreach ($foods as $food): ?>
	  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item selected">
		      <img src="http://www.smsupermalls.com/sites/default/files/styles/movie_full_image/public/store-images/Coffee_Dream_big_1.jpg" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="">
		      <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
			<table>
			    <!-- <tr>
				<th>Title</th>
				<th>Body</th>
				<th>category</th>
			    </tr> --> 

			    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

			    <tr>
				<!-- <td><?php echo $food['Favorite']['id']; ?></td> -->
				<span class="title">
				    <?php echo $this->Html->link($food['Favorite']['title'],
			array('controller' => 'favorites', 'action' => 'view', $food['Favorite']['id'])); ?>
				</span>
				<span class="description"><?php echo $food['Favorite']['body']; ?></span></br>
				<span class="description">カテゴリー : <?php echo $this->Html->link($food['Category']['name'], array('controller' => 'favorites', 'action' => 'category_show', $foods[0]['Favorite']['category_id'])); ?></span>
			    </tr>
			    <?php unset($food); ?>
			</table>
                     </div>
		     <div class="clear"></div>
                </div>
          </div>
	  <?php endforeach; ?>
    </div>
</div>


<div class="container">
     
     <h1><?php echo $this->Html->link('Spot', array('controller' => 'favorites', 'action' => 'category_show', $spots[0]['Favorite']['category_id'])); ?></h1>
     <div class="row form-group product-chooser">

	 <a href="#">
         <?php foreach ($spots as $spot): ?>
	 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item selected">
		      <img src="https://mycoffeevic.files.wordpress.com/2013/01/730770_522502801115814_1435102708_n.jpg" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="">
		      <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
			<table>

			    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

			    <tr>
				<!-- <td><?php echo $spot['Favorite']['id']; ?></td> -->
				<span class="title">
				    <?php echo $this->Html->link($spot['Favorite']['title'],
			array('controller' => 'favorites', 'action' => 'view', $spot['Favorite']['id'])); ?>
				</span>
				<span class="description"><?php echo $spot['Favorite']['body']; ?></span></br>
				<span class="description">カテゴリー : <?php echo $this->Html->link($spot['Category']['name'], array('controller' => 'favorites', 'action' => 'category_show', $spots[0]['Favorite']['category_id'])); ?></span>
			    </tr>
			    <?php unset($spot); ?>
			</table>
                     </div>
		     <div class="clear"></div>
                </div>
          </div><?php endforeach; ?></a>
    </div>
</div>


<div class="container">
     
     <h1><?php echo $this->Html->link('Activity', array('controller' => 'favorites', 'action' => 'category_show', $activities[0]['Favorite']['category_id'])); ?></h1>
     <div class="row form-group product-chooser">

          <?php foreach ($activities as $activity): ?>
	  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item selected">
		      <img src="https://z-1-scontent-hkg3-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/11229571_848442875231676_2566531878270294580_n.jpg?oh=46471bb44f5456655419ade188c28d44&oe=55D2308F" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="">
		      <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
			<table>

			    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

			    <tr>
				<!-- <td><?php echo $activity['Favorite']['id']; ?></td> -->
				<span class="title">
				    <?php echo $this->Html->link($activity['Favorite']['title'],
			array('controller' => 'favorites', 'action' => 'view', $activity['Favorite']['id'])); ?>
				</span>
				<span class="description"><?php echo $activity['Favorite']['body']; ?></span></br>
				<span class="description">カテゴリー : <?php echo $this->Html->link($activity['Category']['name'], array('controller' => 'favorites', 'action' => 'category_show', $activities[0]['Favorite']['category_id'])); ?></span>
			    </tr>
			    <?php unset($activity); ?>
			</table>
                     </div>
		     <div class="clear"></div>
                </div>
          </div>
          <?php endforeach; ?>
    </div>
</div>
