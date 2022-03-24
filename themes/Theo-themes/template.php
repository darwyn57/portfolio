<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>My Personnal Home Page</title>
    <link rel="stylesheet" href="themes/Theo-themes/style.css">
</head>
<body>
    <div id="photo_bio">
        <img src="<?=$profileUrl ?>" alt="Photo profil">
        <h1><?= $lastname?>  <?= $firstname ?></h1>
    </div>
    <h2>Biographie</h2>
    <p><?= $bio ?></p>
    <div class="ExperiancePro">
        <h2>Expérience Professionel</h2>
        <?php foreach($expPro as $value):?>
        <div class="ExperiancePro">
            <h3><?=$value['Poste']?> -<strong><?=$value['Entreprise']?></strong>(<?=$value['Lieu']?>)</h3>
            <p><small><?=$value["DateDeb"]?>- <?=$value["DateDeb"]?></small></p>
            <p><?=$value["Descriptions"]?></p>
        </div>
        <?php endforeach;?>
    </div>

    <footer>
        Copyright - Tous droits réservés &copy;<?= $lastname ?> <?= $firstname ?> 2022
    </footer>
</body>
</html>