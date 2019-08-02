<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel_title">Login User</h3>
    </div>
    <br/>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" class="container">
        <div class="form-group">
            <label>Email</label>
            <input name="email"  type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control"/>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="submit"/>
    </form>
    <br/>
</div>

