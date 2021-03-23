<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BoutiqueRepository;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('about/about.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }


    /**
     * @Route("/listing", name="listing")
     */
    public function listing(): Response
    {
        return $this->render('listing/listing.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }



    /**
     * @Route("/listing-details", name="listing-details")
     */
    public function listingdetails(): Response
    {
        return $this->render('listing/listing-details/listing-details.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }



    /**
     * @Route("/Produits", name="Produits")
     */
    public function produits(): Response
    {
        return $this->render('produits/produits.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/listeProduits", name="listeProduits")
     */
    public function listeproduits(): Response
    {
        return $this->render('produits/listeproduits.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/listeBoutiques", name="listeBoutiques")
     * @param $boutiqueRepository
     * @return Response
     */
    public function listeboutiques(BoutiqueRepository $boutiqueRepository): Response
    {
        return $this->render('boutiques/listingBoutiques.html.twig', [
            'boutiques' => $boutiqueRepository->findAll(),
        ]);
    }

    /**
     * @Route("/addBoutiques", name="addboutiques")
     */
    public function addboutiques(): Response
    {
        return $this->render('boutiques/addboutiques.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/addProduit", name="addProduit")
     */
    public function addProduit(): Response
    {
        return $this->render('produit/new.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }




}
