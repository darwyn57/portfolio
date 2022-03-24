<?php include 'inc.top.php'?>


<div class="container">
    <h1 class="text-center">Portfolio</h1>
    <h2 class="text-center">Mes réalisations :</h2>

    <div class="row align-items-center mt-4">
    <?php foreach($tab["Mes réalisation"] as $value):?>
        <div class="col-6 mb-4">
            <div class="card card bg-info text-dark">
                <div class="card-body ">
                    <h3><?=$value['titre du projet']?><br></h3>
                        
                        <div id="imageprojet">
                            <img class ="float-start m-2 imgpro rounded-circle" src="<?=$value['imageprojet']?>" alt="imageprojet">
                           
                        </div>
                        <p><?=$value["bio"]?></p>
                        <a  href="<?=$value['lienGit']?>">Git</a>

                               
                </div>            
            </div>    
        </div>            
    
    <?php endforeach;?>
    </div>
</div>

<?php include 'inc.bottom.php';?>                       
                    
                
                
           

        
       
                   
                    
                    

                        

    
        



       




                   
    
                
