<!-- app/View/Users/add.ctp -->
<div class="users form">
    <?php echo $this->Form->create('Users'); ?>
    <fieldset>
        <legend><?php echo __('Add Users'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>