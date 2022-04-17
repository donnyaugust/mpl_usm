<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: #fd6701;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <a class="navbar-brand" href="<?= BASEURL; ?>admin"><b>Admin</b></a>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>admin/user"><b>User</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>admin/member"><b>Daftar Anggota</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>login/logout"><b>Logout</b></a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
