<?php

namespace App\Controller;

use App\Entity\Dragon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;


use Symfony\Component\HttpFoundation\Request;

class AjoutDragonControlleController extends AbstractController
{
    /**
     * @Route("/ajout/dragon/controlle", name="ajout_dragon_controlle")
     */
    public function index()
    {
        return $this->render('ajout_dragon_controlle/index.html.twig', [
            'controller_name' => 'AjoutDragonControlleController',
        ]);
    }


    /**
     * @Route("/ajout/dragon/controlle", name="ajout_dragon_controlle")
     */
    public function ajoutPersonnage(Request $request, ObjectManager $manager){
        dump($request);

        $dragon= new Dragon();
        $form = $this->createFormBuilder($dragon)
            ->add('nom')
            ->add('vie')
            ->add('puissance')
            ->add('defense')
            ->add('dex')
            ->add('vitesse')
            ->add('img')
            ->getForm();

        $form->handleRequest($request);
        //dump($dragon);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($dragon);
            $manager->flush();
        }
        return $this->render('ajout_dragon_controlle/index.html.twig',[
            'formDragon'=>$form->createView()
        ]);

    }
}
