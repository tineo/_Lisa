<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\MtInsumosServicios;

class LuckyController extends AbstractController
{
    public function number(EntityManagerInterface $entityManager)
    {
        $number = random_int(0, 100);

        //$entityManager = $this->getDoctrine()->getManager();
        $entityManager = $this->getDoctrine()->getManager('intranet');
        //$entityManager = $this->get('doctrine.orm.intranet_entity_manager');

        $users = $this->getDoctrine()
            ->getRepository(MtInsumosServicios::class)
            ->findAll()
        ;

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}