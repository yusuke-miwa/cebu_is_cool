
<!-- Warming Up -->
<link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
<script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
<!--Video Section-->
<section class="content-section video-section">
  <div class="pattern-overlay">
  <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=fdJc1_IBKJA',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
<h1>Thank you for your registration! Enjoy our service!</h1>
<h3>Please login here!</h3>
<?php echo $this->Html->link('login',
                             array('controller' => 'users', 'action' =>'login'),
                             array('class' => 'btn btn-success')); ?>
     </div>
      </div>
    </div>
  </div>
</section>
<!--Video Section Ends Here-->

