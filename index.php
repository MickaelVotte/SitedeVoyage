<?php include './elements/header.php' ?>


<?php $json = file_get_contents('json/destination.json');
$obj = json_decode($json, true); ?>
<?php $json2 = file_get_contents('json/continents.json');
$obj2 = json_decode($json2, true); ?>




<nav class="navbg">
<a>
    <img class="logocss" src="./assets/img/Pictos/logo-travelcorp.png" alt="">
</a>

<ul>
    <?php
    foreach ($obj2 as $key => $value) { ?>
    <li><a href="#"></a><?= $value['continents_name'] ?></li>
  <?php  } ?>
  
  <div class="account">
    <img class="" src="./assets/img/Pictos/account.svg" alt="">
  </div>
  
</nav>









<div class='container'>

    <?php foreach ($obj as $key => $value) { ?>
        
        <?php if ($value['id'] == 2) { ?>

            <div class="cardBig">
                <div> <img class="card-imgBig" src="assets/img/photos/<?= $value['picture'] ?>"></div>
                <div class="card-titleBig">
                    <h2><?= $value['title'] ?></h2>
                </div>
                <div class="card-footer2">
                    <?= $value['zone'] ?>
                </div>
            </div>

        <?php } else { ?>

            <div class="card">
                <div> <img class="card-img" src="assets/img/photos/<?= $value['picture'] ?>"></div>
                <div class="card-title">
                    <h2><?= $value['title'] ?></h2>
                </div>
                <div class="card-body"><?= $value['description'] ?></div>
                <div class="card-footer">
                    <?= $value['zone'] ?>
                </div>
            </div>

        <?php } ?>
    <?php } ?>

</div>