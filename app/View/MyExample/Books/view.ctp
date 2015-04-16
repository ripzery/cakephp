<h2>Book Details</h2>
<?php echo $this->Html->link('Back', array('action' => 'index')); ?>

<table>

    <?php

    echo "<tr><td rowspan=4><img src='" . $book['Book']['bookimg'] . "'

 height=120/></td>";

    echo "<td><b>Book ID: </b>" . $book['Book']['id'] . "</td><tr>";

    echo "<tr><td><b>Title: </b><a href='" . $book['Book']['link'] . "'

 target='_blank'>" . $book['Book']['title'] . "</a></td></tr>";

    echo "<tr><td><b>Author: </b>" . $book['Book']['author'] . "</td></tr>";



    ?>

</table>