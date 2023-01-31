<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulaire d'ajout</title>
    <?php include "seting.php"; ?>
</head>
<body>
    <div class="principal">
        <div class="secondaire"> <!-- fond degrade -->
            <div class="trois">
                <div class="sidebar_gche cacher">
                    <div class="menu">
                            <a href="index.php">
                                <div class="puce_blanche"> <p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">01</p> </div> <div class="list-item">Accident</div><hr>
                            </a>
                            <a href="vol.php">
                                <div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">02</p></div> <div class="list-item">Vol</div>
                            </a>
                            <hr>
                            <a href="viol.php">
                                <div class="puce_verte"><p style="color:#ffffff; margin-left: 17px; margin-top: 19px;">03</p></div> <div class="list-item">Viol</div>
                            </a>
                            <hr>
                            <a href="meurtre.php"><div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">04</p></div> <div class="list-item">Meurtre</div></a>
                            <hr>
                            <a href="suicide.php">
                                <div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">05</p></div> <div class="list-item">Suicide</div>
                            </a>
                            <hr>
                            <a href="incendies.php">
                                <div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">06</p></div> <div class="list-item">Incendie</div>
                            </a>
                            <hr>
                            <a href="inondations.php">
                                <div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">07</p></div> <div class="list-item">Inondations</div>
                            </a>
                            <hr>
                            <a href="negligence.php"><div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">08</p></div> <div class="list-item">Negligeance medicale</div></a>
                    </div>
                </div>
            <div class="fond_blanc">
    <div class="section_centrale">
                        <div class="formulaire">
                             <div class="centre"><a href="graph_viols.php">graph</a> / <a href="viol.php">recensement</a> </div>
                        <input type="image" src="logo.png" style="width:100px; float:right; margin-left:20px">
                                <div style="text-align:center; margin-top: 40px;">
                                  <h3>  Recensement de viols</h3>
                                    <p  style="font-weight:bold; font-size: 15px;"> Veuillez entrez vos informations s'il vous plait !</p>
                                </div>
                            <form action="connect_viol.php" method="post">
                                    <br><br>
                                    <div class="responsive">
                                        <div >
                                            <fieldset> 
                                                <legend>Titre</legend>
                                                <input type="text"   name="titre" placeholder="Titre">
                                            </fieldset>
                                        </div>                                
                                        <div style="margin-left:30px">
                                            <fieldset> 
                                                <legend> Nombre de victimes </legend>
                                                <input type="text" name="nbrevictimes" placeholder="nombre de victimes">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <br><br>
                                
                                    <div class="responsive">
                                        <div style="width:210px">
                                             <fieldset> 
                                            <legend>TypeViol </legend>
                                            <select name="typeviol">
                                                <option value="">selectionner un type de viol</option>
                                                <option value="viol">viol </option>
                                                <option value="harcèlement_sexuel">harcèlement sexuel</option>
                                                <option value="atteintes_a_la_pudeur">atteintes a la pudeur</option>
                                            </select>
                                        </fieldset>
                                        </div>
                                       
                                    <div style="margin-left:40px">
                                        <fieldset> 
                                            <legend> Nombre d'enfants </legend>
                                            <input type="text"  name="nbrenfants" placeholder="nombre d'enfants">
                                        </fieldset>
                                    </div>
                                                                   
                                    </div> 
                                
                               <br><br>
                               <div class="responsive">
                                   <div >
                                    <fieldset> 
                                        <legend>Nombre de femme</legend>
                                        <input type="text"   name="nbrfemmes" placeholder="nombre de femmes">
                                    </fieldset>
                                    </div>                                
                                    <div style="margin-left:30px">
                                    <fieldset> 
                                        <legend> Nombre d'homme  </legend>
                                        <input type="text" name="nbrhommes" placeholder="nombres d'hommes">
                                    </fieldset>
                                    </div>
                               </div>
                                
                                <br>
                                <br>
                                <div class="rang">
                                <fieldset> 
                                        <legend>Lieu :</legend>
                                        <select name="lieu">
                                        <option value=""></option>
                                            <?php foreach ($jour as $ville): ?>
                                            <option value="<?= $ville->id?>"><?= $ville->ville ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                    </fieldset>
                                </div>
                                <br><br>
                                <div class="rang">
                                    <fieldset > 
                                        <legend>Source :</legend>
                                        <input type="text" name="source"  placeholder="source">
                                    </fieldset>
                                </div>
                                <br>
                                <br>
                                <div class="rang">
                                    <legend>Date de l'evenement : </legend>
                                    <fieldset>
                                        <input type="date" name="dateEvenement" placeholder="Date de l'evenement">
                                    </fieldset>
                                </div>
                                <br><br>
                                <button name="enregistrement" type="submit"> </button>
                               </div>
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>