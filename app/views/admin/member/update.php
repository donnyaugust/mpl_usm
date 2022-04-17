<!-- Edit Adm Member-->

<div class="container mt-4">
    <div class="jumbotron">
        <img src="<?= BASEURL; ?>img/MPLUSM_Logo.png" alt="..." class="rounded-circle shadow mx-auto d-block mt-3" width="200">

        <h1 class="display-4 mt-3">Biodata Anggota</h1>
        <hr class="my-4">
        
        <form action="<?= BASEURL; ?>Admin/upMember" method="POST" class="needs-validation" novalidate>
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
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="nama" name="nama" rows="1" cols="30"><?= $crew -> nama ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Nama Panggilan</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="nama_lapangan" name="nama_lapangan" rows="1" cols="30"><?= $crew -> nama_lapangan ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Nama Angkatan</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="nama_angkatan" name="nama_angkatan" rows="1" cols="30"><?= $crew -> nama_angkatan ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Jenis Kelamin</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option><?= $crew -> jenis_kelamin ?></option>
                            <option>Laki - laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Tempat Lahir</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="tempat_lahir" name="tempat_lahir" rows="1" cols="30"><?= $crew -> tempat_lahir ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Tanggal Lahir</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="tanggal_lahir" name="tanggal_lahir" rows="1" cols="30"><?= $crew -> tanggal_lahir ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Program Study</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                        <select class="form-control" id="progdi" name="progdi">
                            <option><?= $crew -> progdi ?></option>
                            <option>Teknik</option>
                            <option>Teknik Sipil</option>
                            <option>Teknik Elektro</option>
                            <option>Teknik PWK</option>
                            <option>Ekonomi</option>
                            <option>Ekonomi Manajemen</option>
                            <option>Ekonomi Akuntansi</option>
                            <option>TIK</option>
                            <option>TIK Sistem Informasi</option>
                            <option>TIK Teknik Informatika</option>
                            <option>TIK Ilmu Komunikasi</option>
                            <option>Teknologi Pertanian</option>
                            <option>Psikologi</option>
                            <option>Hukum</option>
                        </select>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>NIM</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="nim" name="nim" rows="1" cols="30"><?= $crew -> nim ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Agama</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="agama" name="agama" rows="1" cols="30"><?= $crew -> agama ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Kewarganegaraan</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="kewarganegaraan" name="kewarganegaraan" rows="1" cols="30"><?= $crew -> kewarganegaraan ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Gol Darah</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="gol_darah" name="gol_darah" rows="1" cols="30"><?= $crew -> gol_darah ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Kontak</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="kontak" name="kontak" rows="4" cols="30"><?= $crew -> kontak ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Alamat</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                            <textarea class="form-control" id="alamat" name="alamat" rows="4" cols="30"><?= $crew -> alamat ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><b>Status</b></td>
                    <td width="5%">:</td>
                    <td width="65%">
                        <div class="form-group">
                        <select class="form-control" id="status" name="status">
                            <option><?= $crew -> status ?></option>
                            <option>Aktif</option>
                            <option>Non Aktif</option>
                            <option>Meninggal Dunia</option>
                        </select>
                    </div>
                    </td>
                </tr>
            </table>

            <hr class="my-4">
            <a class='btn btn-dark mt-4' style='color: #fd6701;' onclick='goBack()'><b>Back</b></a>

            <input type="hidden" name="id" value=<?= $crew -> id ?>>
            <button type="submit" class="btn mt-4" style="background: #fd6701;" name="submit" onclick="return confirm('Are you sure UPDATE DATA ?')"><b>Save</b></button>

            <?php endforeach; ?>
        </form>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>


