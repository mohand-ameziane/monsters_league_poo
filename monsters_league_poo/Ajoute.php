<?php
// verifier que post fonction bien 
var_dump($_POST);
// itablire la connexion avec ma base 

$mabasa=new PDO('mysql:host=localhost; dbname=bdd_json','root','Mama2406');

// faire la requete 

$pd = $mabasa->prepare('INSERT INTO bdd_json VALUES (NULL, :nom, :age, :weight, :bio, :filename)');
 //recupere les chan et donne a chaque valeur  
      $pd->bindValue(':nom', $_POST['nom'], PDO:: PARAM_STR);
      $pd->bindValue(':age', $_POST['age'], PDO:: PARAM_STR);
      $pd->bindValue(':weight', $_POST['weight'], PDO:: PARAM_STR);
      $pd->bindValue(':bio', $_POST['bio'], PDO:: PARAM_STR);
      $pd->bindValue(':filename', $_POST['filename'], PDO:: PARAM_STR);
      
     // execute la requete prepare s
     $pd->execute();
    
?>
