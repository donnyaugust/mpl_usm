
<!-- Nav -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>"><b>Home</b></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: #fd6701;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>Home/about"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" style="color: #fd6701;" href="<?= BASEURL; ?>Home/activity"><b>Activity</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark viewModalInsert" style="color: #fd6701;" data-toggle="modal" data-target="#FormInsert"><b>Login</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- End Nav -->

<!-- Modal -->
    <div class="modal fade" id="FormInsert" tabindex="-1" aria-labelledby="ModalTittle" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTittle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="<?= BASEURL; ?>Login/getLogin" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                </div>
            
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark" style="color: #fd6701;" name="login"><b>Login</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<!-- End Modal -->

