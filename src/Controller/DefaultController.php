<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/photos", name="photos")
     */
    public function photos()
    {
        return $this->render('default/photos.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/histoire", name="histoire")
     */
    public function histoire()
    {
        return $this->render('default/histoire.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/avis", name="avis")
     */
    public function avis()
    {
        return $this->render('default/avis.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/livraison", name="livraison")
     */
    public function livraison()
    {
        return $this->render('default/livraison.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/tabarnak", name="tabarnak")
     */
    public function tabarnak()
    {
        return $this->render('default/tabarnak.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/flibustiere", name="flibustiere")
     */
    public function flibustiere()
    {
        return $this->render('default/flibustiere.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
