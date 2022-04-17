<div class="container mt-4">
    <div class="table-responsive">
        <center>
            <h1><b>Daftar Anggota</b></h1>
        </center>
        
        <form class="form-inline mt-4" action="<?= BASEURL; ?>User/search" method="POST">
            <input type="text" class="form-control mb-2 mr-sm-2" name="search" placeholder="search">
            <button type="submit" value="search" class="btn btn-dark mb-2 mr-sm-2"><b>Search</b></button>
        </form>

        <table class="table table-sm table-bordered bg-dark mt-4">
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
                <td><center><a href="<?= BASEURL; ?>User/detail/<?= $crew -> id ?>" class="badge badge-pill bg-light text-dark">Detail</a></center>
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
