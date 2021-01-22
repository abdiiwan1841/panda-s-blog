<?= $this->extend('template/base'); ?>

<?= $this->section('content'); ?>

<h2 class="flex justify-content-start pl-8">Dashboard</h2>

<table class="p-6 m-2 table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>

    <?php
    foreach ($data as $user) {
        // var_dump($user);
    ?>
        <tr>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['created_at']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>

<?= $this->endSection(); ?>