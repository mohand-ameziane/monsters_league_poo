<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ComabtController extends AbstractController
{
    /**
     * @Route("/comabt", name="comabt")
     */
         // public function index(array $choix=[])
    public function index()
    {
        return $this->render('comabt/index.html.twig', [
            'controller_name' => 'ComabtController',
            'dragonnom'=> "Montgomery",
            'dragonpuissance'=>300,
            'dragondefanse'=>250,
            'dragonvitesse'=>450,
            'dragondex'=>10,
            'dragonvie'=> 300,


            'persnom'=> "Sauveur",
             'perspuissance'=>250,
            'persdefense'=>450,
            'persvitesse'=>500,
            'persdex'=>20,
            'persvie'=>444,

        ]);
    }


    // public function index(array $choix=[])


   // public function index($id, $idd)
  //  {


    //    return $this->render('comabt/index.html.twig', [
     //       'controller_name' => 'ComabtController',
      //      'dragon'=>$id,
     //      'pers'=>$idd,
       // ]);
  //  }
}
