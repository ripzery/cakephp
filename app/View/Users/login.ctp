<!--// Create new login form cakephp-->

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <img src="img/logo.png" style="width:100%;">

                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
                <?php echo $this->Session->flash('auth'); ?>
                <?php echo $this->Form->create('User'); ?>
                <fieldset>
                    <div class="form-group">
                        <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php
                        echo $this->Form->input('password', array('class' => 'form-control'));
                        ?>
                    </div>
                    <?php
                    echo $this->Form->button('Login', array('type' => 'submit', 'name' => 'submit', 'class' => 'btn btn-lg btn-success btn-block'));
                    ?>

                </fieldset>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>

