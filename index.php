<?php $json = file_get_contents('json/destination.json');
$obj = json_decode($json, true); ?>


<?php

foreach ($obj as $key => $value) { ?>
    <div>

    </div>
    <div class="card">
        <div class="card-img"> <img src="assets/img/photos/<?= $value['picture'] ?>"></div>
        <div class="card-title">
            <h2><?= $value['title'] ?></h2>
        </div>
        <div class="card-body"><?= $value['description'] ?></div>
        <div class="card-footer">
            <?= $value['zone'] ?>
        </div>
    </div>

<a href=""></a>
<?php } ?>