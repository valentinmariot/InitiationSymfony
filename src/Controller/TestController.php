<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(Request $request): Response
    {
        /*********************************************************/
        //1) Création d'une session qui équivaut à $_SESSION de php
        $session = $request->getSession();
        //2) Création de la variable de session
        $session->getFlashBag()->add('info', 'Premier message');
        $session->getFlashBag()->add('info', 'Second message');
        //3) Création d'un chemin virtuel vers redirection (il n'est pas effectif)
        $url = $this->generateUrl('flash');
        //4) return
        return $this->redirect($url);
    }


    // /**
    //  * @Route("/test", name="test")
    //  */
    // public function index(Request $request): Response
    // {


    //     /*********************************************************/
    //     //1) Création d'une session qui équivaut à $_SESSION de php
    //     $session = $request->getSession();
    //     //2) Création de la variable de session
    //     $session->set('nameUser', 'Valentin');
    //     //3) Création d'un chemin virtuel vers redirection (il n'est pas effectif)
    //     $url = $this->generateUrl('redirection');
    //     //4) return
    //     return $this->redirect($url);

    //     /*********************************************************/
    //     // echo $request->getPathInfo();
    //     // echo $request->query->get('info');
    //     // print_r($request->query->all());
    //     /*********************************************************/
    //     // $response = new Response('Bienvenue dans Symfony', Response::HTTP_OK, ['content-type' => 'text/html']);
    //     // return $response; 
    //     /*********************************************************/
    //     // $response = new Response();
    //     // $response -> setContent('Hello Word');
    //     // $response->header->set('Content-Type', 'text/plain');
    //     // $response->setStatusCode(Response::HTTP_NOT_FOUND);
    //     // return $response;

    //     // return $this->render('test_controller/index.html.twig', [
    //     //     'controller_name' => 'TestController',
    //     // ]);
    // }


    /**
     * @Route("/flash", name="flash")
     */
    public function flash(Request $request)
    {
        //1) Récupération de la session
        $session = $request->getSession();
        //2) Récupération de la clé issue de add() de la fonction index()
        $maVariable = $session->getFlashBag()->get('info');
        //3) Initialisation de la variable
        $show = 'Le Flash Bag contient : <br>';
        foreach($maVariable as $key => $value) {
            $show = $show.$key."-".$value."<br>";
        }
        return new Response($show);
    }  

    // /**
    //  * @Route("/redirection", name="redirection")
    //  */
    // public function redirection(Request $request)
    // {
    //     //1) Récupération de la session
    //     $session = $request->getSession();
    //     //2) 
    //     $user = $session->get('nameUser');
    //     echo $user;
    //     return new Response('Redirection : variable nom, session $user');
    // }  

    
     /**
     * @Route("/hello", name="hello")
     */
    public function hello(Request $request)
    {   
        //1) Créer un tableau dans une variable $params qui va récupérer toutes les informations
        $params = $request->query->all();
        $string = 'Les paramètres sont : <br>';
        //2) Parcourir le tableau params via un foreach
        foreach ($params as $key => $value) {
            $string = $string.$key."-".$value."<br>";
        }
        //3) Faire un return en créant une réponse manuelle
        return new Response($string);
    }

    /**
     * @Route("/hello/{age}/{nom}/{prenom}", name="hello", requirements={"nom"="[a-z]{2,50}"})
     */
    public function hello2(Request $request, int $age, $nom, $prenom)
    {
        // return new Response ("
        //     Hello $prenom $nom ! <br>
        //     Vous avez $age ans.
        // ");

        return $this->render('test_controller/hello.html.twig', [
            'nom' => $nom,
            'prenom' => $prenom,
        ]);

    }

}