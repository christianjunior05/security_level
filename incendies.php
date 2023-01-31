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
                                <div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">03</p></div> <div class="list-item">Viol</div>
                            </a>
                            <hr>
                            <a href="meurtre.php"><div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">04</p></div> <div class="list-item">Meurtre</div></a>
                            <hr>
                            <a href="suicide.php">
                                <div class="puce_blanche"><p style="color:#3e3f5f; margin-left: 17px; margin-top: 19px;">05</p></div> <div class="list-item">Suicide</div>
                            </a>
                            <hr>
                            <a href="incendies.php">
                                <div class="puce_verte"><p style="color:#ffffff; margin-left: 17px; margin-top: 19px;">06</p></div> <div class="list-item">Incendie</div>
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
                            <div class="centre"><a href="graph_incendies.php">graph</a> / <a href="incendies.php">recensement</a> </div>
                        <input type="image" src="logo.png" style="width:100px; float:right; margin-left:20px">
                                <div style="text-align:center; margin-top: 40px;">
                                  <h3>Recensement d'incendies</h3>
                                    <p  style="font-weight:bold; font-size: 15px;"> Veuillez entrez vos informations s'il vous plait !</p>
                                </div>
                            <form action="connect_incendie.php" method="post">
                                    <br><br>
                                    <div>
                                        <div style="float:left ;">
                                            <fieldset> 
                                                <legend>Titre</legend>
                                                <input type="text"  name="titre" placeholder="Titre">
                                            </fieldset>
                                        </div>                                
                                        <div style="margin-left: 250px;">
                                            <fieldset> 
                                                <legend> nombre de victimes </legend>
                                                <input type="text"  name="nbrevictimes" placeholder="Last Name">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <br><br>
                                <div>
                                    <div style="float:left ;">
                                        <fieldset> 
                                            <legend>Type d'incendies</legend>
                                            <select  name="typeIncendie">
                                                <option value="electrique"> electrique</option>
                                                <option value="criminel">criminel</option>
                                                <option value="bouteille_de_gaz">bouteille de gaz</option>
                                            </select>
                                        </fieldset>
                                    </div>                                
                                    <div style="margin-left: 250px;">
                                        <fieldset> 
                                            <legend> nombre d'enfants </legend>
                                            <input type="text"  name="nbrenfants" placeholder="nombres d'enfants">
                                        </fieldset>
                                    </div>
                                </div>
                               <br><br>
                                <div style="float:left ;">
                                    <fieldset> 
                                        <legend>nombre de femme</legend>
                                        <input type="text"  id="firsrtname" name="nbrfemmes" placeholder="nombre de femme">
                                    </fieldset>
                                </div>                                
                                <div style="margin-left: 250px;">
                                    <fieldset> 
                                        <legend> nombre d'homme  </legend>
                                        <input type="text" name="nbrhommes" placeholder="nombre d'homme">
                                    </fieldset>
                                </div>
                                <br>
                                <br>
                                <div>
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
                                <div>
                                    <fieldset> 
                                        <legend>Source :</legend>
                                        <input type="text" name="source"  placeholder="source">
                                    </fieldset>
                                </div>
                                <br>
                                <br>
                                <div>
                                    <label>Date de l'évenement : </label>
                                    <fieldset>
                                        <input type="date" name="dateEvenement" placeholder="Date de l'evenement">
                                    </fieldset>
                                </div>
                                <br><br>
                                <button type="submit" name="enregistrement"></button>
                            
                </div>
            </div>
        </div>
    </div>
     
    </script>
</body>
</html>