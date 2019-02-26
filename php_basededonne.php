 
 <?php
       try{
        $baseDeDonne= new PDO('mysql:host=127.0.0.1; dbname= bdd_json; charset=utf8','root','Mama2406');   
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
        $response->closeCursor();
        ?>
    </p>

<?php
 $baseDeDonne= new PDO('mysql:host=localhost; dbname= bdd_json','root','Mama2406' ); 
// $base = mysql_connect ('mysql:host=localhost', 'root', '');
// mysql_select_db ('', $base) ;
?>