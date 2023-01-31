<?php 
 
 include('setting.php');
 
    $prendre_ville = $pdo->query("SELECT id,ville FROM ville");

     if(isset($_POST['enregistrement'])) {
        $titre =$_POST['titre'];
        $nbrevictimes =$_POST['nbrevictimes']; 
        $engins=$_POST['engins']; 
        $nbrenfants= $_POST['nbrenfants']; 
        $nbrfemmes= $_POST['nbrfemmes'];
        $nbrhommes = $_POST['nbrhommes'];
        $lieu = $_POST['lieu'];
        $source = $_POST['source']; 
        $dateEvenement = $_POST['dateEvenement'];
        
        $insertion = $pdo->query("INSERT INTO accidents(titre,nbrevictimes,engins,nbrenfants,nbrfemmes,nbrhommes,lieu,source,dateEvenement,datepost) 
         VALUES('$titre','$nbrevictimes','$engins','$nbrenfants','$nbrfemmes','$nbrhommes','$lieu','$source','$dateEvenement',now())");
    
        if($insertion){
            echo "<script>
                    alert('Enregistrement effectué avec succès pour continuer')</script>
                    <meta http-equiv=\"refresh\" content=\"0;URL= graph_accidents.php\">";
        } else {
            echo 'non renseignerSSSS';
        }
    
    } else {
        echo 'non renseigner';
    }
    
 ?>