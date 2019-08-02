<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel_title">Sare Something!</h3>
    </div>
    <br/>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" class="container">
        <div class="form-group">
            <label>Tile for share</label>
            <input type="text" name="title" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" class="form-control"/>
        </div>
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_data']['id']; ?>"/>
        <input type="submit" name="submit" class="btn btn-primary" value="submit"/>
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
    <br/>
</div>