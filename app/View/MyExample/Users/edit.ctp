<!-- File: /app/View/Posts/edit.ctp -->
<h1>Edit Post</h1>
<?php
echo $this->Form->create('Users');
echo $this->Form->input('username');
echo $this->Form->input('role', array(
    'options' => array('admin' => 'Admin', 'author' => 'Author')
));
echo $this->Form->end('Save Users');
?>