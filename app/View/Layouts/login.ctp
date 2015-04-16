<?php

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<?php echo $this->Html->docType('html5'); ?>
<html lang="en">
<head>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
//    echo $this->fetch('meta');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('sb-admin-2');
    echo $this->fetch('css');

    echo $this->Html->script('jquery-1.10.2.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->fetch('script');
    ?>
</head>

<body>
<div class="container">
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
</div>
</body>
</html>