<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something ! </h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="form-group">
            <lable>Share Titles</label>
            <input type="text" name="title" class="form-control" />
        </div>

        <div class="form-group">
            <lable>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <lable>Link</label>
            <input type="text" name="link" class="form-control" />
        </div>

        <input class="btn btn-primary" name="submit" type="submit" value="submit" />

        <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>">Cancel</a>
    </form>
  </div>
</div>