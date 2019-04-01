<?php

namespace App\Controller;


use App\Entity\Personnage;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class AjouPersonnageController extends AbstractController
{
    /**
     * @Route("/ajou/personnage", name="ajou_personnage")
     */
    public function index()
    {
        return $this->render('ajou_personnage/index.html.twig', [
            'controller_name' => 'AjouPersonnageController',
        ]);
    }
    /**
     * @Route("/ajou/personnage", name="ajou_personnage")
     */
    public function ajoutPersonnage(Request $request, ObjectManager $manager){
        dump($request);

        $personnage= new Personnage();
         $form = $this->createFormBuilder($personnage)
             ->add('nom')
             ->add('vie')
             ->add('puissance')
             ->add('defense')
             ->add('dex')
             ->add('vitesse')
             ->add('img')
             ->getForm();

         $form->handleRequest($request);
         //dump($personnage);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($personnage);
            $manager->flush();
        }
        return $this->render('ajou_personnage/index.html.twig',[
            'formPersonnage'=>$form->createView()
        ]);

    }
}
