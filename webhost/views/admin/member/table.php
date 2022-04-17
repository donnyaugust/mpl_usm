<!-- Tabel Adm Member-->

<div class="container mt-4">
    
        <h1><b>Daftar Anggota</b></h1>
        <?php $count = $data['count']; ?>
        <p><b>Total Record : <?= $count ?> &emsp;</b></p>
        
        <table>
            <tr>
            <th>
            <form class="form-inline" action="<?= BASEURL; ?>admin/search" method="POST">
                <input type="text" class="form-control" name="search" placeholder="search">
            </th>
            <th>
                <button type="submit" value="search" class="btn btn-dark"><b>Search</b></button>
            </form>
                <button type="button" class="btn btn-dark viewModalInsert" data-toggle="modal" data-target="#FormInsert"><b>Insert</b></button>
            </th>
            </tr>
        </table>
        
        <div class="container mt-3">
            <?php Flasher::flash(); ?>
        </div>

    <div class="table-responsive">
        
        <table class="table table-sm table-bordered bg-dark">
            <thead class="thead-light text-dark">
            <tr>
            <th>No.</th>
            <th>Nama Angkatan</th>
            <th>NIA</th>
            <th>Nama</th>
            <th>Nama Panggilan</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th></th>
            </tr>
            </thead>
            <?php $no = $data['number'] + 1; 
            foreach( $data['table'] as $crew) : ?>
            <tbody class="text-light">
                <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $crew -> nama_angkatan ?></td>
                <td><?= $crew -> nia ?></td>
                
                <td><?= $crew -> nama ?></td>
                <td><?= $crew -> nama_lapangan ?></td>
                <td><?= $crew -> jenis_kelamin ?></td>
                <td><?= $crew -> status ?></td>
                <td><center><a href="<?= BASEURL; ?>admin/detail/<?= $crew -> id ?>" class="badge badge-pill bg-light text-dark">Detail</a></center>
                </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

