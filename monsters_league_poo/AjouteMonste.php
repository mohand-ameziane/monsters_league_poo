<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Monsters League</title>
    </head>
    <body>
    <h1>ajoute un monster</h1>
// formulaire a remblir par utilisateur 
//methode post permettre de recuper des donne saisair 
    <form action="Ajoute.php" method="POST">
      <p>

        <label for="nom"> Nom </label>
        <input id="nom" type="text" name="nom">
      </p>
      <p>

        <label for="age">   Age </label>
        <input id="age" type="text" name="age">
      </p>
      <p>

        <label for="weight"> weight </label>
        <input id="weight" type="text" name="weight">
      </p>
      <p>

        <label for="bio"> Bio</label>
        <input id="bio" type="text" name="bio">
      </p>

      <p>

        <label for="filename"> filename</label>
        <input id="filename" type="text" name="filename">
      </p>
      <main>
<input type="button" class="btn btn-md btn-danger center-block" type="submit" value="valide" onclick="document.location.href='./Ajoute.php';">
      </main>

    </form>
// le dernier td recuper la base de donne et afiche la 

<?php
      $mabasa=new PDO('mysql:host=localhost; dbname=bdd_json','root','Mama2406');
 ?>

 <p>

 <?php
       $reponse=$mabasa->query('select * from bdd_json');
       $data=$reponse->fetchAll();
       var_dump($data);
     $reponse->closeCursor();
    ?>
 </p>
   </body>
 </html>
