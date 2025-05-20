<div class="container">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Gyártó</th>
                    <th>Kijelző</th>
                    <th>Tárhely</th>
                    <th>OS</th>
                    <th class="text-end">Ár</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tablets as $tablet): ?>
                <tr>
                    <td><?= $tablet->manufacturer_name ?></td>
                    <td><?= $tablet->screen ?>"</td>
                    <td><?= $tablet->storage ?> GB</td>
                    <td><?= $tablet->os ?></td>
                    <td class="text-end"><?= $tablet->getFormattedPrice() ?></td>
                </tr>

                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>