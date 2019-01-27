<?php
class Monster{

    //des attribu de la class
    public $name='default';
    //esseye les attribu avec private 
    public $lastName;
    public $age=0;
    private $color;

// constructeur de la class 
function __construct($nameP, $strengthP,$lifeP,$typeP){
    // on affecte des valeur a mes attribu mais comme le constructeur execute ou premiere la valeur 
    //de color il serais ecrase par la veleur bleu
    $this->name = $nameP;
    $this->lastName = $strengthP;
    $this->age = $lifeP;
    $this->color = $typeP;
    
}
// on declare des fonction de get et set pour accede a les valeur des attribu sont avoir passe par les attribu elle meme, 
//donc change les valeur des attriu meme ils sont en private 
//get accede a la valeur 
function getname(){
    return $this->name;
}
//le set mettre a jouur la valeur 
function setname($n){
     $this->name=$n;
}


function getlastName(){
    return $this->lastName;
}
function setlastName($l){
     $this->lastName=$l;
}



function getage(){
    return $this->age;
} 
function setage($a){
     $this->age=$a;
}



function getcolor(){
    return $this->color;
}
//le set mettre a jouur la valeur 
function setcolor($c){
     $this->color=$c;
}



}
$monster1=new Monster();

//afficte des valeur a mes variable declare 

$monster1->name='Bodoi';

$monster1->lastName='Bodoi';
//on peut partage des atribu de ma class et afiche leur valeur dans plusieur constructeur 

$monster2 =new Monster();
$monster2->age='23';
$monster2->setcolor('blue');
echo $monster2->getcolor();
echo $monster2->getage();
var_dump($monster1 , $monster2);