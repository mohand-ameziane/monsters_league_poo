<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Monsters League</title>
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="jumbotron">
        <?php
            $welcomeMessage ='wolcome to the monsters leageue';
            $numberOfmonsters = rand(10,100);
            ?>
            <h1 class="display-4">  <?php echo strtoupper (strtolower($welcomeMessage))?>  </h1>
            
            <p class="lead">more than <?php echo $numberOfmonsters;?> monstres </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>


        <?php
          $firstMonster ='internaltree';
          $secondMonster ='toxin';
          $thirdMonster ='acid';
          $monsters = [$firstMonster,$secondMonster,$thirdMonster];//initialise les valeur de tableau
         ?>
         <?php  var_dump ($monsters); 
         foreach($monsters as $monster){//une boucle foreach pour ffiche les 3 VALEUR de tableau
             echo $monster ." ";//affichage 
         }
         $barbling=[
             'name'=>'barbling',
             'weigth'=>'150',
             'AGE'=>'20',
             'bien'=>'barbling',
             'tab'=>  [
                 'ville'=> 'paris',
                 'paye '=> 'france' 
             ]

         ];
         var_dump($barbling);
         echo $barbling['name']."<br/>";
         echo $barbling['weigth'] ?? 'toto';//affiche une message errure si une valeur ou bien un mot existe pas  

         if(isset ($barbling['weigth'])){//affiche une errure avec un if 
             echo 'toto';
         }
         $json = '[
            {
                "name": "Infernaltree",
                "age": "10",
                "weight": "5",
                "bio": "Hi! I\'m Infernaltree.",
                "filename": "infernaltree.png"
            },
            {
                "name": "Toxinscream",
                "age": "20",
                "weight": "10",
                "bio": "Hi! I\'m Toxinscream.",
                "filename": "toxinscream.png"
            },
            {
                "name": "Acidpaw",
                "age": "30",
                "weight": "15",
                "bio": "Hi! I\'m Acidpaw.",
                "filename": "acidpaw.png"
            },
            {
                "name": "Barbling",
                "age": "40",
                "weight": "20",
                "bio": "Hi! I\'m Barbling.",
                "filename": "barbling.png"
            }
        ]';  
        //echo $monster['age'] . " ";

        $monsters =json_decode($json );

        foreach($monsters as $monster){
           // echo $monster['age'] . " ";    //accede un tableau
            echo $monster ->name . " ";    //accede un objet
        }

        //recupere un fichier et affiche avec php
        $monsters = file_get_contents('C:\wamp64\www\monsters_league\resources\monsters.json');
        var_dump(json_decode($monsters));

         ?>

        <footer>
            <div class="container">
                <p>Copyright © 2019 Monsters League</p>
            </div>
        </footer>

        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>