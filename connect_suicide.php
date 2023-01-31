<?php 
 
 include('setting.php');
 //selection des ville de la base de données  VALUES('$titre','$nbrevictimes','$engins','$nbrenfants','$nbrfemmes','$nbrhommes','$lieu','$ndateEvenement ','$source')");
    $prendre_ville = $pdo->query("SELECT id,ville FROM ville");

     //declaration de variables
     if(isset($_POST['enregistrement'])) {
        $titre=$_POST['titre'];
        $nbrevictimes=$_POST['nbrevictimes'];
        $typesuicide=$_POST['typesuicide'];
        $nbrenfants=$_POST['nbrenfants'];
        $nbrfemmes=$_POST['nbrfemmes'];
        $nbrhommes=$_POST['nbrhommes'];
        $lieu=$_POST['lieu'];
        $source=$_POST['source'];
        $dateEvenement=$_POST['dateEvenement'];
            
       
        $insertion = $pdo->query("INSERT INTO suicides(titre,nbrevictimes,typesuicide,nbrenfants,nbrfemmes,nbrhommes,lieu,source,dateEvenement,datepost) 
         VALUES('$titre','$nbrevictimes','$typesuicide','$nbrenfants','$nbrfemmes','$nbrhommes','$lieu','$source','$dateEvenement',now())");
    
        
        if($insertion){
            echo "<script>
                    alert('Enregistrement effectué avec succès pour continuer')</script>
                    <meta http-equiv=\"refresh\" content=\"0;URL= graph_suicides.php\">";
        }
    
        
    } else {
        echo 'non renseigner';
    }
    
 ?>