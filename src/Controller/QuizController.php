<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

    /**
     * @Route("/quiz")
     */

class QuizController extends AbstractController
{   // possible de mettre le template vide si on défini avec render


    /**
     * @Route("/accueil", name="accueil")
     * @Route("/accueil")
     * @Template("quiz/index.html.twig")) 
     */

    public function index() // <= typage de la valeur de retour
    {
        return array(); // ou [];
        
        
        //$this->render('quiz/index.html.twig',
        //array('name' => $name)
       // ou  ['controller_name' => 'QuizController',]);
    
    
    }


    /**
     * @Route("/inscription", name="inscription")
     * @Template("quiz/index.html.twig"))
     */

    public function inscr()
    {
        return array(); 
    
    }


     /**
     * @Route("/connexion", name="connexion")
     * @Template("quiz/index.html.twig") 
     */

    public function conn()
    {
        return array(); 
    
    }


    /**
     * @Route("/quiz", name="quiz")
     * @Template("quiz/index.html.twig")
     */

    public function quiz()
    {
        return array(); 
    
    }

    
    /**
     * @Route("/question", name="queston")
     * @Template("quiz/index.html.twig")
     */

    public function quest() 
    {
        return array(); 
    
    }
    

    /**
     * @Route("/deconnexion", name="deconnexion")
     * @Template("quiz/index.html.twig") 
     */

    public function deco() 
    {
        return array(); 
    
    }


}
