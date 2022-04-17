<div class="container">
    <nav>
        <ul class="pagination justify-content-center">
            <?php 
                $page   = $data['page'];
                $pages  = $data['pages'];
                $prev   = $page - 1;
                $next   = $page + 1;
            ?> 
            <li class="page-item">
                <a class="page-link bg-dark text-light m-1" 
                    <?php if($page > 1) { ?>
                        href='<?= BASEURL; ?>User/page/<?= $prev; ?>'
                    <?php } ?>
                ><b>Previous</b></a>
            </li>

            <?php for($x = 1; $x <= $pages; $x++) : ?>
            <li class="page-item">
                <a class="page-link bg-dark text-light m-1" href="<?= BASEURL; ?>User/page/<?= $x; ?>"><?= $x; ?></a>
            </li>
            <?php endfor; ?>

            <li class="page-item">
                <a  class="page-link bg-dark text-light m-1"
                    <?php if($page < $pages)  { ?>
                        href='<?= BASEURL; ?>User/page/<?= $next; ?>' 
                    <?php } ?>
                ><b>Next</b></a>
            </li>

        </ul>
    </nav>
</div>