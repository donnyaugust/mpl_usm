<!-- Tabel Adm User -->
<div class="container mt-4">
<div class="col-10 mx-auto">
    <div class="table-responsive">
        <table class="table table-sm table-bordered bg-dark mt-3">
            <thead class="thead-light text-center text-dark">
            <tr>
            <th>User</th>
            <th>Username</th>
            <th>Password</th>
            </tr>
            </thead>
            <?php foreach( $data['table'] as $user) : ?>
            <tbody class="text-light">
                <tr>
                <td><?= $user -> user ?></td>
                <td><?= $user -> username ?></td>
                <td><?= $user -> password ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>
