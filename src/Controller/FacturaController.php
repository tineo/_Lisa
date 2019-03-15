<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FacturaController extends AbstractController
{
    /**
     * @Route("/factura", name="factura")
     */
    public function index()
    {
        return $this->render('factura/index.html.twig', [
            'controller_name' => 'FacturaController',
        ]);
    }
}
