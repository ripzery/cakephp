<h1>List of Users</h1>
<table>
    <tr>
        EGCO423: Web Database and Its Application
        <th>Id</th>
        <th>Username</th>
        <th>Role</th>
        <th>Created</th>
        <th>Modified</th>
        <th></th>
    </tr>

    <?php echo $this->Html->link(
        'Add Users',
        array('controller' => 'users', 'action' => 'add')
    ); ?>


    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['Users']['id']; ?></td>
            <td>
                <?php echo $user['Users']['username'] ?>
            </td>
            <td>
                <?php echo $user['Users']['role']; ?>
            </td>
            <td>
                <?php echo $user['Users']['created']; ?>
            </td>
            <td>
                <?php echo $user['Users']['modified']; ?>
            </td>
            <td>

                <?php echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['Users']['id']),
                    array('confirm' => 'Are you sure?'));
                ?>
                <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['Users']['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>

</table>