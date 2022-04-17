<!-- Login -->

<div class="container-fluid">
	<div class="col-sm-4 mx-auto text-light bg-dark m-5 p-5 rounded">
        <center>
        <img src="<?= BASEURL; ?>/img/MPLUSM_Logo.png" class="mx-auto" width="100">
        <br><br>
        <h1><b>Buku Anggota</b></h1>
        <hr class="bg-light">
        <h3><b>Login</b></h3>
        <br>
        <?php App::flashLogin(); ?>
        </center>
                
        <form action="<?= BASEURL; ?>cont/getLogin" method="POST">
            <div class="form-group">
                <label for="username"><b>Username</b></label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <br>
            <button type="submit" class="btn mx-auto d-block" style="background: #fd6701;" name="login"><b>Login</b></button>
        </form>

	</div>
</div>