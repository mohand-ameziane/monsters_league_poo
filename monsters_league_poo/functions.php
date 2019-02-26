<?php
require __DIR__ . '/monster.php';
// on va faire avec les  tableau objet ou lieu de tableau
function getMonstersObjet(){
    $monster1 =new Monster();
    $monster1->setname('Domovai');
    $monster1->setlastName('30');
    $monster1->setage('300');
    $monster1->setcolor('water');   
    
    $monster2 =new Monster();
    $monster2->setname('Wendigos');
    $monster2->setlastName('1000');
    $monster2->setage('450');
    $monster2->setcolor('earth');   
    
    $monster3 =new Monster();
    $monster3->setname('Thunderbird');
    $monster3->setlastName('400');
    $monster3->setage('500');
    $monster3->setcolor('air');   
    
    $monster4 =new Monster();
    $monster4->setname('Sirrush');
    $monster4->setlastName('250');
    $monster4->setage('1500');
    $monster4->setcolor('fire');   
    $monsters = getMonsters();
    $monstersObjet = array();
     
    
    $monsterObjet= array($monster1, $monster2, $monster3, $monster4);
    
    return $monsterObjet;
}
// avec les tableau 
function getMonsters()
{
    return [
        [
            'name' => 'Domovoï',
            'strength' => 30,
            'life' => 300,
            'type' => 'water'
        ],
        [
            'name' => 'Wendigos',
            'strength' => 100,
            'life' => 450,
            'type' => 'earth'
        ],
        [
            'name' => 'Thunderbird',
            'strength' => 400,
            'life' => 500,
            'type' => 'air'
        ],
        [
            'name' => 'Sirrush',
            'strength' => 250,
            'life' => 1500,
            'type' => 'fire'
        ],
    ];
}
/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(array $firstMonster, array $secondMonster)
{
    $firstMonsterLife = $firstMonster['life'];
    $secondMonsterLife = $secondMonster['life'];
    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster['strength'];
        $secondMonsterLife = $secondMonsterLife - $firstMonster['strength'];
    }
    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }
    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}
