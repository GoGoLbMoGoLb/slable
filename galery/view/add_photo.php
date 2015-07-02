<h1>add_photo</h1>
<?php if (!empty($file_error)): ?>
    <div class="container alert alert-danger">
        Error!
    </div>
<?php endif ?>
<img src="/galery/public/5845.tmp" alt="">
<form action="" class="col-sm-5" method="POST" enctype="multipart/form-data">

    <label for="image" class="control-label">Image</label>
    <input type="file" name="image" id="image" class="form-control">

    <label for="description" class="control-label">Description</label>
    <input type="text" name="description" id="description" class="form-control">

    <label for="category" class="control-label">Category</label>
    <select name="category" id="category" class="form-control" >
        
    </select>

    <input type="submit" value="Upload" class="btn btn-success">

</form>