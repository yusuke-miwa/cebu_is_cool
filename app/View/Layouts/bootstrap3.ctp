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
		padding-top: 50px; /* 70px to make the container go all the way to the bottom of the topbar */
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
  echo $this->Html->css('add');
  echo $this->Html->css('top');
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
				), array('class' => 'navbar-brand white')); ?>
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><?php echo $this->Html->link('Top', array(
						'controller' => 'tops',
						'action' => 'index'
					), array('class' => 'white')); ?></li>
					<li><?php echo $this->Html->link('Favorite', array(
						'controller' => 'favorites',
						'action' => 'index'
					), array('class' => 'white')); ?></li>
					<li><?php echo $this->Html->link('Blog', array(
                                                'controller' => 'posts',
                                                'action' => 'index'
                                        ), array('class' => 'white')); ?></li>
					<li><?php if (is_null($user)): ?>
					    <?php echo $this->Html->link('Login', array(
                                                'controller' => 'users',
                                                'action' => 'login'), array('class' => 'white')); ?>
					    <li><?php echo $this->Html->link('登録', array(
                                                'controller' => 'users',
                                                'action' => 'add'), array('class' => 'white')); ?>
					    </li>
					    <?php else: ?>
					    <a class="white"> ようこそ <?php echo $user['username']; ?> さん</a>
					    <li><?php echo $this->Html->link('Logout', array(
						'controller' => 'users',
						'action' => 'logout'), array('class' => 'white')); ?>
					    </li>
				            <?php endif; ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<?php if($this->name == 'Tops'): ?>
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
<?php endif; ?>
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
