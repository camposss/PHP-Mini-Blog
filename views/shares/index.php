<div class="container">
    <?php if (isset($_SESSION['logged_in'])) :  ?>
    <a href="<?php echo ROOT_PATH?>shares/add" class="btn-success btn btn-share">Share Something</a>
<?php endif; ?>
    <?php foreach($viewmodel as $item):?>
    <div class="card">
        <div class="card-block">
            <h3><?php echo $item['title'] ?></h3>
            <small><?php echo $item['create_date'] ?></small>
            <hr>
            <p><?php  echo $item['body']?></p>
            <a href="<?php echo $item['link'];?>" class="btn btn-default" target="_blank">Go to website</a>
        </div>
    </div>
    
    <?php endforeach; ?>
</div>