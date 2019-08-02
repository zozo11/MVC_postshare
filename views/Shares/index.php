<div>
    <?php if($_SESSION['is_logged_in']): ?>
        <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>shares/add">ADD Post</a>
    <?php endif; ?>
</div>
    <br/>
<div>
    <?php foreach($viewmodel as $item): ?>
        <div class='well'>
            <h3><?php echo $item['title'] ?></h3>
            <small><?php echo $item['create_date'];?></small>
            <hr/>
            <p><?php echo $item['body']; ?></p>
            <br/>
            <a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>
            <div class="mt-5">
            <?php if($_SESSION['user_data']['id'] == $item['user_id']): ?>
                <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" >
                    <input type="hidden" name="postid" value="<?php echo $item['id']?>"/>
                    <button class="btn btn-default" value="delet" name="delet">Delect Post</button>
                </form>
            <?php endif;?>
            </div>
        </div>
    <?php endforeach;?>
</div>