<h2>List of Books</h2>

<table>

    <tr>

        <th>ID</th>

        <th></th>

        <th>Title</th>

        <th>Author</th>
        <th></th>
    </tr>

    <?php foreach ($books as $book): ?>

        <tr>

            <td><?php echo $book['Book']['id']; ?></td>

            <td><?php echo "<img src='" . $book['Book']['bookimg'] . "' height=100/>"; ?></td>

            <td><?php echo "<a href='" . $book['Book']['link'] . "'

EGCO423: Web Database and Its Application

 target='_blank'>" . $book['Book']['title'] . "</a>"; ?> </td>

            <td><?php echo $book['Book']['author']; ?></td>

            <td><?php echo $this->Html->link('View', array('action' => 'view',

                    $book['Book']['id'])); ?></td>

        </tr>

    <?php endforeach; ?>

</table>