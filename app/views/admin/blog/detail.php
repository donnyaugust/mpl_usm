<!-- Detail Adm Member-->

<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4 mt-3">Blog</h1>
        <hr class="my-4">
        <div class="container mt-3">
            <?php Flasher::flash(); ?>
        </div>
        <?php foreach( $data['table'] as $blog) : ?>
        
        <h4><b><?= $blog -> title ?></b></h4>
        <p><b><?= $blog -> author ?></b></p>
        <p><?= $blog -> date ?></p>
        <hr class="my-4">
        <p><?= $blog -> text ?></p>

        <div class="row">
            <div class="col-3">
                <img src="<?= BASEURL; ?>img/cal_1.JPEG" alt="<?= $blog -> title ?>" class="img-fluid mx-auto d-block mt-3" width="200">
            </div>
            <div class="col-3">
                <img src="<?= BASEURL; ?>img/cal_1.JPEG" alt="<?= $blog -> title ?>" class="img-fluid mx-auto d-block mt-3" width="200">
            </div>
            <div class="col-3">
                <img src="<?= BASEURL; ?>img/cal_1.JPEG" alt="<?= $blog -> title ?>" class="img-fluid mx-auto d-block mt-3" width="200">
            </div>
            <div class="col-3">
                <img src="<?= BASEURL; ?>img/cal_1.JPEG" alt="<?= $blog -> title ?>" class="img-fluid mx-auto d-block mt-3" width="200">
            </div>
        </div>
        <hr class="my-4">
        <a class='btn btn-sm btn-dark mt-4' style='color: #fd6701;' href="<?= BASEURL; ?>Admin/blog"><b>Back</b></a>
        <a class='btn btn-sm mt-4 text-dark' style='background: #fd6701;' href="<?= BASEURL; ?>Admin/delMember/<?= $blog -> id ?>" onclick="return confirm('Are you sure DELETE Data ?')"><b>Delete</b></a>
        <a class='btn btn-sm mt-4 text-dark' style='background: #fd6701;' href="<?= BASEURL; ?>Admin/upFormMember/<?= $blog -> id ?>"><b>Update</b></a>

        <?php endforeach; ?>
    </div>
</div>


