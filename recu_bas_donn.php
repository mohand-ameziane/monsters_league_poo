<!DOCTYPE html>
<html>
    <head>
        <title>PDO</title>
        <meta charset="UTF-8">

    </head>
    <?php
       try{
        $baseDeDonne= new PDO('mysql: host=localhost; dbname= bdd_json; charset=utf8','root','Mama2406' );   
       }
       catch( Exception $e){
        die('Erreur : '.$e->getMessage());
       }
        
    ?>
    <p>
        <?php
        $response = $baseDeDonne->query('select * from bdd_json ');
        $data=$response->fetchAll();
        var_dump($data);
        respone->closeCursor();
        ?>
    </p>
</html>