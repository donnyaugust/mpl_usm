<!-- Form Adm Blog -->

<div class="container mt-4 mb-4">
    <h1><b>Blog</b></h1>
    <center><h4><b>New Blog</b></h4></center>
    <hr>
    <div class="col-10 mx-auto">
    <form action="<?= BASEURL; ?>Admin/insBlog" method="POST">
        <div class="form-group">
            <label for="date"><b>Date :</b></label>
            <input type="date" class="form-control" name="date"></input>
        </div>
        <div class="form-group">
            <label for="author"><b>Author :</b></label>
            <textarea class="form-control" name="author" rows="2" cols="30"></textarea>
        </div>
        <div class="form-group">
            <label for="title"><b>Title :</b></label>
            <textarea class="form-control" name="title" rows="3" cols="30"></textarea>
        </div>
        <div class="form-group">
            <label for="text"><b>Text :</b></label>
            <textarea class="form-control" name="text" rows="10" cols="30"></textarea>
        </div>
        <button type="submit" class="btn btn-dark" name="submit" style="color: #fd6701;">submit</button>
    </form>
    </div>
</div>