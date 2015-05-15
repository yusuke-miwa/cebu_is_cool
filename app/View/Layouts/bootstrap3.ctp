<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		BoostCake -
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<style>
	body {
		padding-top: 70px; /* 70px to make the container go all the way to the bottom of the topbar */
	}
	.affix {
		position: fixed;
		top: 60px;
		width: 220px;
	}
	</style>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  <?php
  echo $this->Html->script('jquery.mb.YTPlayer');
  ?>

  <script>
    $(function(){
        $(".player").mb_YTPlayer();
      });
  </script>
  <?php
  echo $this->Html->css('YTPlayer');
  ?>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php
	echo $this->Html->css('custom');
  echo $this->Html->css('login');
  echo $this->Html->css('registration');
  echo $this->Html->css('favorite');
  echo $this->Html->script('registration');
  echo $this->Html->script('favorite');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php echo $this->Html->link('Cebu is Cool', array(
				       //	'plugin' => 'boost_cake',
					'controller' => 'tops',
					'action' => 'index'
				), array('class' => 'navbar-brand')); ?>
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><?php echo $this->Html->link('Top', array(
						'controller' => 'tops',
						'action' => 'index'
					)); ?></li>
					<li><?php echo $this->Html->link('Favorite', array(
						'controller' => 'favorites',
						'action' => 'index'
					)); ?></li>
					<li><?php echo $this->Html->link('Blog', array(
                                                'controller' => 'posts',
                                                'action' => 'index'
                                        )); ?></li>
					<li><?php if (is_null($user)): ?>
					    <?php echo $this->Html->link('Login', array(
                                                'controller' => 'users',
                                                'action' => 'login')); ?>
					    <li><?php echo $this->Html->link('登録', array(
                                                'controller' => 'users',
                                                'action' => 'add')); ?>
					    </li>
					    <?php else: ?>
					    <a> ようこそ <?php echo $user['username']; ?> さん</a>
					    <li><?php echo $this->Html->link('Logout', array(
						'controller' => 'users',
						'action' => 'logout')); ?>
					    </li>
				            <?php endif; ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">

		<?php echo $this->fetch('content'); ?>

	</div><!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<?php echo $this->fetch('script'); ?>

</body>
</html>
