<?php include 'inc.top.php'?>

<div class="container">
    <div class="row ">
        <div class="col-8">
            <h1><?=printName()?></h1>
            <div id = "photo_de_profil">
                <img src="<?=$tab['profile']['photoprofile']?>"class="rounded-circle"alt="photo de profile">
            </div>
            <p><?=$tab['profile']['bio']?></p>
               
             
        </div> 
        
        <div class="col-12 mt-4 mb-4">
            <div class="card bg-primary">
            <h2>Experience Professionel :</h2>
                <div class="ExperiancePro">
                    
                    <?php foreach($tab["exPro"] as $value):?>
                        <div class="card bg-info text-dark mt-4">
                            <div class="ExperiancePro">
                                <h3>-<?=$value['Poste']?> <br>-<strong><?=$value['Entreprise']?></strong> (<?=$value['Lieu']?>)</h3>
                                <p><small><?=$value["DateDeb"]?>- <?=$value["DateFin"]?></small></p>
                                <p><?=$value["Descriptions"]?></p>
                            </div>  
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="diplôme">
                    <h2>Diplôme :</h2>
                    <?php foreach($tab["Diplôme Formation"] as $value):?>
                    <div class="card bg-info text-dark mt-4">
                        <div class="diplôme">
                            <h3>-<?=$value['nom du diplôme']?> <br>-<strong><?=$value['établissement']?></h3>
                            <p><small><?=$value["année d'obtention"]?></small></p>
                            
                        </div>
                    </div>   
                    <?php endforeach;?>
                </div>
            </div>
        </div> 
    </div>
</div>

<?php include 'inc.bottom.php';?>
    
