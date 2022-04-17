<!-- Modal Adm Insert Member-->

<div class="modal fade" id="FormInsert" tabindex="-1" aria-labelledby="ModalTittle" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalTittle">INSERT</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>Admin/insMember" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="nia"><b>NIA :</b></label>
                        <input type="text" class="form-control" id="nia" name="nia" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="nama"><b>Nama :</b></label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nama_lapangan"><b>Nama Panggilan :</b></label>
                        <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan">
                    </div>
                    <div class="form-group">
                        <label for="nama_angkatan"><b>Nama Angkatan :</b></label>
                        <input type="text" class="form-control" id="nama_angkatan" name="nama_angkatan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin"><b>Jenis Kelamin :</b></label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option></option>
                            <option>Laki - laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir"><b>Tempat Lahir :</b></label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir"><b>Tanggal Lahir :</b></label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="progdi"><b>Program Study :</b></label>
                        <select class="form-control" id="progdi" name="progdi">
                            <option></option>
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
                    <div class="form-group">
                        <label for="nim"><b>NIM :</b></label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="agama"><b>Agama :</b></label>
                        <input type="text" class="form-control" id="agama" name="agama">
                    </div>
                    <div class="form-group">
                        <label for="gol_darah"><b>Gol. Darah :</b></label>
                        <input type="text" class="form-control" id="gol_darah" name="gol_darah">
                    </div>
                    <div class="form-group">
                        <label for="kewarganegaraan"><b>Kewarganegaraan :</b></label>
                        <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                    </div>
                    <div class="form-group">
                        <label for="kontak"><b>Kontak :</b></label>
                        <textarea class="form-control" id="kontak" name="kontak" rows="5" cols="30"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alamat"><b>Alamat :</b></label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="5" cols="30"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status"><b>Status :</b></label>
                        <select class="form-control" id="status" name="status">
                            <option></option>
                            <option>Aktif</option>
                            <option>Non Aktif</option>
                            <option>Meninggal Dunia</option>
                        </select>
                    </div>
            </div>
        
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">INSERT</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>