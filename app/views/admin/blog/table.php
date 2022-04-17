<!-- Tabel Adm Blog -->

<div class="container mt-4">
    
        <h1><b>Blog</b></h1>
        <?php $count = $data['count']; ?>
        <p><b>Total Record : <?= $count ?> &emsp;</b></p>
        
        <table>
            <tr>
            <th>
            <form class="form-inline" action="<?= BASEURL; ?>Admin/searchBlog" method="POST">
                <input type="text" class="form-control form-control-sm" name="search" placeholder="search">
            </th>
            <th>
                <button type="submit" value="search" class="btn btn-sm btn-dark"><b>Search</b></button>
            </form>
                <a class="btn btn-sm btn-dark" href="<?= BASEURL; ?>Admin/insBlogForm"><b>New</b></a>
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
            <th>Publish</th>
            <th>Title</th>
            <th>Author</th>
            <th></th>
            </tr>
            </thead>
            <?php $no = 1; 
            foreach( $data['table'] as $blog) : ?>
            <tbody class="text-light">
                <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $blog -> date ?></td>
                <td><?= $blog -> title ?></td>
                <td><?= $blog -> author ?></td>
                <td><center><a href="<?= BASEURL; ?>Admin/detailBlog/<?= $blog -> id ?>" class="badge badge-pill bg-light text-dark">Detail</a></center>
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

