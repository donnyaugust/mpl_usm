<!-- Detail Adm Member-->

<div class="container mt-4">
    <div class="jumbotron">
        <img src="<?= BASEURL; ?>img/MPLUSM_Logo.png" alt="..." class="rounded-circle shadow mx-auto d-block mt-3" width="200">

        <h1 class="display-4 mt-3">Biodata Anggota</h1>
        <hr class="my-4">

        <table class="table table-sm table-borderless">
            <?php foreach( $data['table'] as $crew) : ?>
            <tr>
                <td width="30%"><b>NIA</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> nia ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Nama</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> nama ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Nama Panggilan</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> nama_lapangan ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Nama Angkatan</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> nama_angkatan ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Jenis Kelamin</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> jenis_kelamin ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Tempat Lahir</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> tempat_lahir ." , ". $crew -> tanggal_lahir; ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Program Study</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> progdi ?></td>
            </tr>
            <tr>
                <td width="30%"><b>NIM</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> nim ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Agama</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> agama ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Kewarganegaraan</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> kewarganegaraan ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Gol Darah</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> gol_darah ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Kontak</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> kontak ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Alamat</b></td>
                <td width="5%">:</td>
                <td width="65%"><?= $crew -> alamat ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Status</b></td>
                <td width="5%">:</td>
                <td width="65%"><b><?= $crew -> status ?></b></td>
            </tr>
            
        </table>

        <hr class="my-4">
        <a class='btn btn-dark mt-4' style='color: #fd6701;' href="<?= BASEURL; ?>Admin/member"><b>Back</b></a>
        <a class='btn mt-4 text-dark' style='background: #fd6701;' href="<?= BASEURL; ?>Admin/delMember/<?= $crew -> id ?>" onclick="return confirm('Are you sure DELETE Data ?')"><b>Delete</b></a>
        <a class='btn mt-4 text-dark' style='background: #fd6701;' href="<?= BASEURL; ?>Admin/upFormMember/<?= $crew -> id ?>"><b>Update</b></a>

        <?php endforeach; ?>
    </div>
</div>


