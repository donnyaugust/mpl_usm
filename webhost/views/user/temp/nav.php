
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container">
    <form class="form-inline mt-1" action="<?= BASEURL; ?>cont/search" method="POST">
        <input type="text" class="form-control-sm mr-sm-2" name="search" placeholder="search">
        <button type="submit" value="search" class="btn btn-dark" style="color: #fd6701;"><b>Search</b></button>
        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>cont/logout"><b>Logout</b></a>
    </form> 
    </div>
</nav>


<!-- Nav Old
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: #fd6701;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>cont/user"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>cont/member"><b>Daftar Anggota</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>cont/logout"><b>Logout</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
-->
