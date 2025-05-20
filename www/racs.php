<div class="container">
     
    <div class="row">
        <?php foreach($tablets as $tablet): ?>
            <div class="col-lg-4">
                <img src="<?= $tablet->getImagePath()?>" alt="" class="img-fluid">
                <h2><?=$tablet->fullname?></h2>
                <ul>
                    <li><b>Gyártó</b>: <?= $tablet->manufacturer_name ?></li>
                    <li><b>Kijelző</b>: <?= $tablet->screen ?>"</li>
                    <li><b>Tárhely</b>: <?= $tablet->storage ?> GB</li>
                    <li><b>OS</b>: <?= $tablet->os ?></li>
                    <li><b>Ár</b>: <?= $tablet->getFormattedPrice() ?></li>
                </ul>
            </div>
        <?php endforeach;?>
    </div>
   
    
</div>