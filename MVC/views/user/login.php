<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">User Login</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    
        <div class="form-group">
            <lable>Email</label>
            <input type="text" name="email" class="form-control" />
        </div>

        <div class="form-group">
            <lable>Password</label>
            <input type="text" name="password" class="form-control" />
        </div>

        <input class="btn btn-primary" name="submit" type="submit" value="submit" />

        <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>">Cancel</a>
    </form>
  </div>
</div>