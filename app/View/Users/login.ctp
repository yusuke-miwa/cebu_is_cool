<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="users form container">
<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Form->create('User',array('class' => 'form-signin')); ?>
    <h1 class="form-signin-heading text-muted">Sign In</h1>
        <?php echo $this->Form->input('username',array('class' => 'form-control', 'placeholder' => 'Username', 'label' => false)); ?>
        <?php echo $this->Form->input('password',array('class' => 'form-control', 'placeholder' => 'Password', 'label' => false)); ?>
<?php echo $this->Form->end(array(
                'label' => 'Sign in',
                'div' => false,
                'class' => 'btn btn-lg btn-primary btn-block'
        )); ?>
</div>
