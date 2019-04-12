<h1>Blog posts</h1>
<table>
    <tr>
        <th>UserId</th>
        <th>User Name</th>
        <th>Active</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['userid']; ?></td>
        <td>
            <?php echo $user['User']['username']; ?>
        </td>
        <td><?php echo $user['User']['active']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>
