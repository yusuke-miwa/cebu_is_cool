<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="users form container">
<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Form->create('User',array('class' => 'form-signin')); ?>
    <h1 class="form-signin-heading text-muted">Registration</h1>
        <?php echo $this->Form->input('username',array('class' => 'form-control', 'placeholder' => 'Username', 'label' => false)); ?>
        <?php echo $this->Form->input('password',array('class'=> 'form-control', 'placeholder' => 'Passward', 'label' => false)); ?>
<div class="users form">
        <?php echo $this->Form->input('role', array('label' => false,
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
<?php echo $this->Form->end(array(
            'label' => 'Registration',
            'div' => false,
            'class' => 'btn btn-lg btn-warning btn-block'
        )); ?>
</div>
