<div class="container">
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Share Title</label>
        <input type="text" name = "title" class="form-control" placeholder="Enter a title">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Body</label>
        <textarea type="text" name = "body" class="form-control" placeholder="Enter a title"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Link</label>
        <input type="text"  name = "link" class="form-control" placeholder="Enter a title">
    </div>
    <input type="submit" name="submit" class="btn btn-primary"></input>
    <a href= "<?php echo ROOT_PATH ?>shares" name="cancel" class="btn btn-danger">Cancel</a>

    </form>
</div>
